<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require('db.php');

        if (isset($_REQUEST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password); #sees if username is linked to the password
            $trn_date = date("Y-m-d H:i:s"); #creates data into database
            $query = "INSERT into `users` (username, password, email, create_datetime) #type in sql query 
                        VALUES ('$username', '".md5($password)."', '$email', '$trn_date')"; #when running a function in a query is only when you can use " 
            $result = mysqli_query($con, $query); #runs query
            if ($result) { #if result was successfull
                echo "<div class='form'>
                        <h3>You are registered successfully.</h3>
                        <br/>Click here to <a href='login.php'>Login</a>
                    </div>";
            } else { #shows what is missing and not sucessful
                echo "<div class='form'>
                        <h3>Required fields are missing.</h3>
                        <br/>Click here to <a href='registration.php'>register</a> again.
                    </div>";
            }
        } else {

    
    ?>

    <form action="" method="post"> <!-- creating form -->
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="email" class="login-input" name="email" placeholder="Email" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit"  name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>

    <?php
        }
    ?>
</body>
</html>