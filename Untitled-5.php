

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum'];
    $message = $_POST['message'];
    $sent_date = $_POST['sent_date'];
 }

    $sql = "INSERT INTO contact_message (id, name, email, pnum, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $id, $name, $email, $pnum, $message);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Message sent successfully';     

} else {
    $_SESSION['error'] = 'Fill up add form first';
}

// Close the database connection
$conn->close();

header('location: success.php');
?>
