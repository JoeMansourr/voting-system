<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Register</h1>
            <form action="inc/register.inc.php" method="POST" class="">
                <div class="userInfo">
                    <label>Username</label>
                    <input type="text" name="username" id="name" required>
                    <label>Password</label>
                    <input type="password" name="password" id="pass" required>
                    <input type="submit" name="submit">
                    <span>already have an account? <a href="login.php">Login</a></span>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>