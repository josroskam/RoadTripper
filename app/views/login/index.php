<?php

// session_start();
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../feed/css/mystyle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../css/mystyle.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../css/mystyle.css" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="../feed/css/mystyle.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <style>
        <?php include '../../app/css/mystyle.css';
        ?>
    </style>
    <style>
        .nav-link {
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="alert alert-success" role="alert" id="alertBox" style="display:none">
                <p id="alertParagraph"></p>
            </div>
            <div class="col-md-6 login-form-1">
                <h3>Login in</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Emailaddress *" value="" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value=""
                            name="hashedpassword" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" name="LoginUser" />
                    </div>
                    <!-- <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div> -->
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Register new account</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Firstname *" value="" name="firstname" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Lastname *" value="" name="lastname" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Emailaddress *" value="" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value=""
                            name="hashedpassword" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repeat password *" value=""
                            name="passwordrepeat" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Favorite holiday destination *" value=""
                            name="destination" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Register" name="SubmitNewUser" />
                    </div>
                    <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                </form>
            </div>
        </div>
    </div>
    <footer>
        <?php
                // define('PROJECT_ROOT_PATH', __DIR__);
                include_once (PROJECT_ROOT_PATH . '/../footer/index.php');
            ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    var alertBox = document.getElementById('alertBox');
    var alertParagraph = document.getElementById('alertParagraph');

    function userRegisteredSuccessfully(){  
        alertBox.className = "alert alert-success";
        alertBox.style = "display:block"
        alertParagraph.innerHTML = "User registered successfully!";
    }

    function userRegisteredFailed(errorMessage){  
        alertBox.className = "alert alert-danger";
        alertBox.style = "display:block"
        alertParagraph.innerHTML = errorMessage;
    }
</script>
</html>