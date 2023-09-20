<?php
include 'includes/conn.php';
session_start();

if(isset($_SESSION['id'])){ // Check if the 'id' session variable is set
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM contact_form WHERE id = '$user_id'";
    $query = $conn->query($sql);

    if($query){
        $voter = $query->fetch_assoc();
    } else {
        // Handle database query error here, e.g., log an error message or redirect with an error message.
    }
} else {
    header('location: index.php');
    exit();
}
?>
