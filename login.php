<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Social Media</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="glider.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    

      <header class="hero-container">
        <div class="left">
          
          <div id="container-login">
        <div id="title">
            <i>Log in to see videos photos of your friends</i>
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Log In" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="registration.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
        </div>  
      
         
        <div class="right">
          <img class="phone" src="images/Untitled.svg" alt="" />
        </div>

        <img class="hero-bg" src="images/HeroBG.svg" alt="" />

        <div class="polygon-container">
          <img class="polygon" src="images/Polygon.svg" alt="" />
          <img class="polygon2" src="images/Polygon2.svg" alt="" />
          <img class="polygon3" src="images/Polygon3.svg" alt="" />
        </div>
      </header>
  </body>
  </html>