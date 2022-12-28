<?php

    include "db.inc.php";
    
    
    if (isset($_POST['submit'])) {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      
      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) == 1) {
        header("location: ../index.php?loginstatus=success");
      } else {
      header("location: ../login.php?error=email&or&password&is&incorrect");
    }
  }
?>