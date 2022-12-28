<?php 

    include "db.inc.php";

    if (isset($_GET['visited'])) {
        setcookie('visited', true, time() + (86400 * 30), "/"); // 86400 = 1 day
      }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "update vote set votes = votes + 1 where id = '$id'";
        $exec = mysqli_query($conn, $sql);

        if($exec){
            header("Location: ../voting.php?vote=added");
        }
    }

?>