<?php
include('classes/server.php');

if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        DB::query('INSERT INTO user VALUES (\'\', :name, :username, :password, :email)', array(':name'=>$name, ':email'=>$email, ':username'=>$username, ':password'=>$password, ));
        echo "Success!";

}

?>



<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i>Register
        </div>

        <form action="registration.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="name" placeholder="Name" name="name" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" name="email" type="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" name="username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" value="Register" name="register"/>
        </form>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>