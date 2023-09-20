<?php
require_once "includes/header.php"; // Include the header from the includes folder
?>
<!-- Rest of the page HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Successful</title>
</head>
<style>
    /* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}



/* Main content styles */
.main-content {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Link styles */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
.success-message {
      color: #4CAF50;
      font-weight: bold;
    }

</style>
<body>
    
    <div class="container">
        <div class="main-content">
            <p class="success-message">Signup successful! You can now <a href="login.php">login</a> to your profile.</p>
        </div>
    </div>
</body>
</html>