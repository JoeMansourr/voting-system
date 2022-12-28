<?php

    include "db.inc.php";



  // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Get the email, password, and password confirmation from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

      $query = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        header("Location: ../register.php?error=username&is&already&in&use");
      } else {
        $query = "insert into users(username, password) values ('$username', '$password')";
        mysqli_query($conn, $query);
        session_start();
        $_SESSION['username'] = $username;
        // Log the user in and redirect them to a secure page
        header("location: ../login.php");
      }
  }
?>
