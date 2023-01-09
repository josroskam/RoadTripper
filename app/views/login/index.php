<?php

session_unset();
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../feed/css/mystyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>      
        <form action="" method="POST">
            <label for="fname">Emailaddress:</label><br>
            <input type="text" id="fname" name="emailaddress" value="John"><br>
            <label for="lname">Password:</label><br>
            <input type="text" id="lname" name="password" value="Doe"><br><br>
            <input type="submit" value="Submit" name="Submit">
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            <!-- <button value="Submit" type="Submit" name="Submit">Submit</button> -->
        </form>
    </div>
</body>
<style>
    .error {
        font-size: 30px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>