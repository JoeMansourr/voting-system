<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9e872d27fa.js" crossorigin="anonymous"></script>
    <title>Voting System</title>
</head>
<body>
    <div class="container">
        <div class="panel">
            <div class="box1">
                <div class="box1-content">
                    <img src="images/profile-pic.png" id="profile-pic">
                    <p class="session-name">Administrator</p>
                    <ul>
                        <li><a href="index.php">Dashboard</a></li>
                        <li class="active"><a href="results.php">Results</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="box2 winner">
                <h3 class="box2-header">Project Voting Winner</h3>
                <?php 
                
                
                include "inc/db.inc.php";

                $sql = "SELECT id, votes, name FROM vote WHERE votes = (SELECT MAX(votes) FROM vote);";
                $exec = mysqli_query($conn, $sql);

                if(mysqli_num_rows($exec) > 0){
                    while($row = mysqli_fetch_assoc($exec)){
                        echo '<div class="box2-content-winner">
                        <img src="images/profile-pic.png" id="profile-pic">
                                <div class="winner-box"><b>ID</b>' . "<br/>" . '
                                    ' . $row['id'] . "<br/>" .'
                                    <b>Name</b> ' . "<br/>" . $row['name'] . "<br/>" . '
                                    <b>Votes</b> ' . "<br/>" . $row['votes'] . '
                                </div>
                            </div>';
                    }
                }else{
                    
                }

            ?>


                
                </div>
            </div>
        </div>
    </div>
</body>
</html>