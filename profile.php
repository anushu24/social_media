<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['email'])){
header('location:login.php');
}

$username = $_SESSION['username'];
$bio = $_SESSION['bio'];
$url = $_SESSION['url'];
$followers = "SELECT nooffollowers FROM table WHERE email= $_SESSION['email']";
$following = "SELECT nooffollowing FROM table WHERE email= $_SESSION['email']";





?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Profile Page</title>

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div style="font-size: 20px;" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
      <a class="nav-item nav-link active" href="home.php">Home</a>
      <a class="nav-item nav-link" href="#">lateruse</a>
      <a class="nav-item nav-link" href="logout.php">Log out</a>
     
    </div>
  </div>
</nav>
</div>


    <header style="border-bottom: 2px solid rgb(186 186 186);" >
        <div class="container">
            <div class="profile">
                <div class="profile-image">
                    <img src=" <?php echo "$url"; ?>" alt="Profile Pic">
                </div>

                <div class="profile-user-settings">
                    <h1 class="profile-user-name"> <?php echo "$username"; ?></h1>
                    <a href="editprofile.php" class="btn profile-edit-btn">Edit Profile</a>
                </div>

                <div class="profile-stats">

                    <ul>
                        <li><span class="profile-stat-count"> <?php echo "$nooffollowers" ?> </span> followers</li>
                        <li><span class="profile-stat-count"> <?php echo "$nooffollowing" ?> </span> following</li>
                    </ul>
                </div>
                <div class="profile-bio">

                    <p> <?php echo "$bio"; ?> </p>
                    
                </div>
            </div>
        </div>
    </header>



<main>
    



    
</main>













</body>
</html>




