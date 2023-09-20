<?php   
require_once "includes/conn.php";     // Include the database connection
require_once "includes/header.php"; // Include the header from the includes folder

?>

<!DOCTYPE html>
<html>
<head>
  <title>Signup Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      margin-top: 50px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;

    }

    h1 {
      text-align: center;
    }

    p {
      text-align: center;
      font-size: 18px;
    }

    .success-message {
      color: #4CAF50;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Message Received!</h1>
    <p class="success-message">We will get back to you asap.</p>
  </div>
</body>
</html>
