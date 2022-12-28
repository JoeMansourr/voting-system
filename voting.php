<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/voting.css">
    <script src="https://kit.fontawesome.com/9e872d27fa.js" crossorigin="anonymous"></script>
    <title>Voting</title>
</head>
<body>
    <div class="contain">
        <div class="box">

                <?php 
                
                    include "inc/db.inc.php";

                    $sql = "select * from vote";
                    $exec = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($exec) > 0){
                        while($row = mysqli_fetch_assoc($exec)){
                            echo '<div class="container">
                                    <div class="boxes">
                                        <div class="content">
                                            <img src="images/profile-pic.png" id="profile-pic">
                                                <h1>' . $row['name'] . '</h1>
                                                    <h3>Votes: ' . $row['votes'] . '</h3>
                                                    <a href="inc/vote.inc.php?id=' . $row['id'] . '">Vote</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }else{
                        echo '<div class="container">
                                    <div class="boxes">
                                        <div class="content">
                                            <img src="images/profile-pic.png" id="profile-pic">
                                                <h1>No Result Found!</h1>
                                                    <h3>Votes: N/A</h3>                                                    
                                        </div>
                                    </div>
                                </div>';
                    }

                ?>
        </div>
        <div class="homeBTN">
            <span><a href="index.php">Home</a></span>   
        </div>
    </div>
</body>
</html>