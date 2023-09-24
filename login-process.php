<?php
session_start(); // Start or resume the session

if (isset($_POST['signin'])) {
    require 'includes/conn.php';
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        header("Location: login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM lists WHERE email=?;";
        $stmt = mysqli_stmt_init($conn); // Initialize prepared statement

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email); // Bind parameters to the statement
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
            
                if ($pwdCheck == false) {
                    echo "Password verification failed: " . $password;
                    header("Location: login.php?error=wrongPwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    echo "Password verification successful: " . $password;
                    $_SESSION['email'] = $row['email'];
                    header("Location: dashboard.php");
                    exit();
                }
            }
             else {
                header("Location: login.php?error=noUser");
                exit();
            }
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
