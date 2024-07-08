<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Deepika Chintala </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
      <img src="logo.png" alt="Logo" width="200"/>
      <button class="menu-toggle">☰</button>
      <nav>
          <ul class="menu">
              <li><a href="index.php">CV</a></li>
              <li><a href="regChintala.php">Mailing List Registration</a></li>
              <li><a href="contactUsChintala.php">Contact Us</a></li>
              <li><a href="courseReflectChintala.php">Course Reflection</a></li>
          </ul>
      </nav>
  </header>
  <script>
      document.querySelector('.menu-toggle').addEventListener('click', () => 
      {
          document.querySelector('.menu').classList.toggle('active');
      });
  </script>
  <main>
      <section>
       <div class="container">
     <h2>Contact Us</h2>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
         <label for="firstName">First Name</label>
         <input type="text" id="firstName" name="firstName" required><br><br>

         <label for="lastName">Last Name</label>
         <input type="text" id="lastName" name="lastName" required>
         <br><br>

         <label for="message">Message</label>
         <input type="text" id="message" name="message" required>
         <br><br>

         <label for="email">Email Address</label>
         <input type="email" id="email" name="email" required>
         <br><br>

         <button type="submit" name="submit">Submit</button>
         </form>                       
         <?php
         if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
             $firstName = $_GET['firstName'];
             $lastName = $_GET['lastName'];
             $message = $_GET['message'];
             $email = $_GET['email'];

             // Validation
             $errors = [];
             if (empty($firstName)) {
                 $errors[] = "First name is required";
             }
             if (empty($lastName)) {
                 $errors[] = "Last name is required";
             }
             if (empty($message)) {
                 $errors[] = "Message is required";
             }
             if (empty($email)) {
                 $errors[] = "Email is required";
             } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $errors[] = "Invalid email format";
             }

             // Display errors or show submitted data
             if (!empty($errors)) {
                 echo "<h3>Error(s) occurred:</h3><ul>";
                 foreach ($errors as $error) {
                     echo "<li>$error</li>";
                 }
                 echo "</ul>";
             } else {
                 echo "<h3>Data Submitted:</h3>";
                 echo "First Name: $firstName<br>";
                 echo "Last Name: $lastName<br>";
                 echo "Message: $message<br>";
                 echo "Email: $email<br>";
             }
         }
         ?>
        </div>
      </section>
  </main>

  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>
</body>
</html>
