<?php
   // Include the database connection file
   include 'db_connection.php';
   // Check if the form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Retrieve form data
       $username = $_POST["username"];
       $password = $_POST["password"];
       // Validate credentials against the database
       $query = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
       $result = $conn->query($query);
       if ($result->num_rows > 0) {
           echo "Login successful! Welcome $username";
       } else {
           echo "Login failed. Please check your username and password.";
       }
   }
?>
