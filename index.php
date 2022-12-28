<?php 


    session_start();

    include "inc/db.inc.php";

    $sql = "select * from vote";
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($res)){
        
    }

    $query = "select * from users";
    $result = mysqli_query($conn, $query);

    while($data = mysqli_fetch_assoc($result)){
        
    }
?>



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
                    <p class="session-name"><?php 

                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }else{
                            echo "Administrator";
                        }
                    ?></p>
                    <ul>
                        <li class="active"><a href="index.php">Dashboard</a></li>
                        <li><a href="results.php">Results</a></li>
                        <form action="inc/logout.inc.php" method="POST">
                            <li><input type="submit" value="Logout" name="submit"></li>
                        </form>
                    </ul>
                </div>
            </div>
            <div class="box2">
                <?php 
                
                    include "inc/db.inc.php";

                    $query = "select count(username) from users";
                    $result = mysqli_query($conn, $query);
                
                    while($data = mysqli_fetch_assoc($result)){
                        echo '<div class="box2-content">
                                <div class="teacher-box">
                                    <h3>Users</h3>
                                    <div class="align">
                                        <h1>' . $data['count(username)'] . '</h1>
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                </div>';
                    }

                    $sql = "select count(name), sum(votes) from vote";
                    $res = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($res)){
                        echo '<div class="student-box">
                                    <h3>Participants</h3>
                                    <div class="align">
                                        <h1>' . $row['count(name)'] . '</h1>
                                        <i class="fa-sharp fa-solid fa-people-group"></i>
                                    </div>
                                </div>';

                                echo '<div class="project-box">
                                            <h3>Total Votes</h3>
                                            <div class="align">
                                                <h1>' . $row['sum(votes)'] .'</h1>
                                                <i class="fa-solid fa-square-poll-vertical"></i>
                                            </div>
                                        </div>';
                    }
                
                
                ?>
                </div>
                <div class="box-container">
                    <div class="box2-section">
                        <div class="sec-section">
                            <h1>About</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur minima facilis tempore magni modi tempora quasi repellendus ducimus fugit illo, iusto est! Sapiente eveniet eius, error quasi est quas tempore iusto distinctio perspiciatis nobis quia, ullam similique asperiores nemo! Porro quos provident molestias, amet sed sequi expedita cupiditate officiis soluta.</p>
                        </div>
                    </div>
                    <div class="vote-access">
                        <div class="adjust-content">
                            <p>Vote</p>
                            <a href="voting.php">Proceed to Vote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>