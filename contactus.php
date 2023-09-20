<?php   
// Check for success or error messages in the URL query parameters
$successMessage = isset($_GET['success']) ? $_GET['success'] : null;
$errorMessage = isset($_GET['error']) ? $_GET['error'] : null;
require_once "includes/conn.php";     // Include the database connection
require_once "includes/header.php"; // Include the header from the includes folder

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    
<style>
   #message-popup {
    display: <?php echo $Message ? 'block' : 'none'; ?>;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    position: relative;
    margin-top: 20px; /* Add space between the form and the message */
}

.close-button {
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px;
    cursor: pointer;
    color: white; /* Text color for close button */
    font-weight: bold; /* Make the close button more prominent */
}

.close-button:hover {
    background-color: #333; /* Change background color on hover */
}

   </style>

</head>
<body>
    <img src="images/bg,jpg" alt="">
    
    <div class="auth-container">

    <section class="contact-form">
            <h2>Contact Us</h2>

            <p>Kindly fill this form to send us a message</p>
             <!-- Display success message if available -->
             <?php if ($successMessage) : ?>
                <div id="message-popup" style="background-color: #4CAF50;">
                    <?php echo htmlspecialchars($successMessage); ?>
                    <span class="close-button" onclick="closeMessage()">X</span>
                </div>
            <?php endif; ?>

            <!-- Display error message if available -->
            <?php if ($errorMessage) : ?>
                <div id="message-popup" style="background-color: #FF5733;">
                    <?php echo htmlspecialchars($errorMessage); ?>
                    <span class="close-button" onclick="closeMessage()">X</span>
                </div>
            <?php endif; ?>
            <form method="post" action="process-form.php">
            <section class="contact-form">
       <input type="text" id="name" name="name" placeholder="Your Name" required>
      <input type="email" id="email" name="email" placeholder="Your Email" required>
      <input type="pnum" id="pnum" name="pnum" placeholder="Your Phone Number" required>

    <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>

    <button type="submit">Send</button>
  </form>
</section>
  </div>
 </main>
<?php
    require_once "includes/footer.php"; // Include the header from the includes folder
?>

<!-- JavaScript for closing the message popup -->
<script>
    function closeMessage() {
        document.getElementById('message-popup').style.display = 'none';
    }
</script>
</body>
</html>
