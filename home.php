<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['id'])){
header('location:login.php');
}
?>

<?php
 if(isset($_POST['post_upload']))
  {
    $user_id = $_SESSION['id'];
    $user_email = $_SESSION['useremail'];
    $username = $_SESSION['username'];
    $caption = $_POST['caption'];
    $post_date = date("yy-m-d");
    $upload_file = $_FILES['photo'];
    $location = $upload_file['tmp_name'];
    $name = $upload_file['name'];
    $url = "./images/posts/".$name;
    move_uploaded_file($location, $url);

    $q = "INSERT INTO posts (user_id, user_email, user_name, caption, post_date, post_url) VALUES ('$user_id', '$user_email' , '$username', '$caption', '$post_date', '$url')"; 
    $query= mysqli_query($conn,$q);
    if($query){
        echo "<script> alert('success'); </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3d6f2df1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">

    <title>Document</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container justify-content-center">
                <div class="d-flex flex-row justify-content-between align-items-center col-9">
                    <a class="navbar-brand" href="#">
                        <img src="logo" alt="" loading="lazy">
                    </a>
                    <div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="d-flex flex-row">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="#" class="link-menu">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                                        <path fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-inboxes"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1-.78.624l-3.7-4.624A.5.5 0 0 0 11.02 1H4.98a.5.5 0 0 0-.39.188L.89 5.812a.5.5 0 1 1-.78-.624L3.81.563z" />
                                        <path fill-rule="evenodd"
                                            d="M.125 5.17A.5.5 0 0 1 .5 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6H10.45a2.5 2.5 0 0 1-4.9 0H1.066z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-compass"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
                                        <path
                                            d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2 align-middle">
                                <a href="#" class="link-menu">
                                    <div
                                        class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border topbar-profile-photo">
                                        <img src="assets/images/profiles/profile-6.jpg" alt="..."
                                            style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

        

    <div class="mt-4">
        <div class="container d-flex justify-content-center">
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        
                        <!-- START OF STATUS -->
                        <!-- Start of post an content -->
                        <form method="post" action="home.php" enctype="multipart/form-data">
                        <div class="main mainpost" style="margin-bottom:20px; padding-bottom:10px; width: 700px; margin-left: -70px;">    

                            <div class="userimg"><img src="../images/profile/upload.png"/>
                            </div>
                            <div class="username">               <p class="name" style="top:15px;">user name</p>
                            </div>
                            <p class="quotes">
                                <textarea id="mypara" name="caption" placeholder="Share an article ,photo ,video or idea."></textarea>
                            </p>
                            <!-- image load to post -->
                            <div class="post d-none" id="post_preview">
                                <div id="preview_div">
                                    
                                </div>
                            </div>

                            <div class="postbar">
                                <input type="file" name="photo" accept="images/*" id="chooseimg" onchange="preview()"/>
                                <button type="button" class="imgbttn" id="imgbttn">&#x1f4f7; Images</button>
                                <button name="post_upload" type="submit" id="postmypost" class="postmypost">Post</button>
                            </div>

                        </div>
                        </form>
                        <!-- End of post an content -->
                        <!-- END OF STATUS -->

                        <!-- START OF POSTS -->

                        <div class="d-flex flex-column mt-4 mb-4">

                            <div class="card" style="width: 700px; margin-left: -70px;">
                                <div class="card-header p-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                            <img src="assets/images/profiles/profile-1.jpg" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <span class="font-weight-bold">samkolder</span>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    

                                    <!-- posted content view -->
                                    <div class="allpost">
                                    <!-- post 1 by creator-->
                                        <div class="mainpost">
                        
                                            <p class="quotes">
                                                Welcome to our society. You will be judged on what you wear, which music you listen to, what you look like, how you act, who you hang around with, and on practically every other personal trait and imperfection about you, and you'll be made fun of for being who you are. Enjoy your stay.
                                            </p>
                                        <div class="post">
                                            <img class="postimg" src="./images/About.png"/>
                                        </div>

                                        <div class="likedislike">
                                            <p class="like">
                                                <span class="nooflike" id="like1">0 </span> likes &nbsp <span class="noofdislike" id="dislike1">0 </span> dislikes
                                            </p>
                                            <p class="likedisbttn">
                                                <span id="thumbsup1" class="fa fa-thumbs-up" onclick="increase('like1','dislike1','thumbsup1','thumbsdown1');"></span> <span id="thumbsdown1" class="fa fa-thumbs-down" onclick="decrease('like1','dislike1','thumbsup1','thumbsdown1');"></span>
                                            </p>
                                            <p class="like">
                                                <span class="nooflike" id="like1">0 </span> Comments</span>
                                            </p>
                                        </div>
                                    </div>
                                <!-- end of post 1 by creator -->
                                </div>
                                <!-- end of posted content view -->

                                <!-- button to view more previous post -->
                                <button type="button" id="viewmore" class="viewmore" onclick="newpost();">View More</button>

                                    


                            </div>
                            </div>

                        </div>
                        <!-- END OF POSTS -->
                    </div>
                    <!-- RIGHT SIDE START
                    <div class="col-4">
                        <div class="d-flex flex-row align-items-center" >
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sidenav-profile-photo">
                                <img src="assets/images/profiles/profile-6.jpg" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute;">
                            </div>
                            <div class="profile-info ml-3">
                                <span class="profile-info-username">codingvenue</span>
                                <span class="profile-info-name">Coding Venue</span>
                            </div>
                        </div> 
                        <div class="mt-4">
                            <div class="d-flex flex-row justify-content-between">
                                <small class="text-muted font-weight-normal" >Suggestions For You</small>
                                <small>See All</small>
                            </div>
                            <div> -->
                                <!-- start of right section suggestion user 
                               
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-3.jpg" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">instagram</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-4.png" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">dccomics</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-5.jpg" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">thecw</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig">Follow</button>
                                </div>
                            </div>
                                
                            End of right section suggestion user 
                        
                            
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>    
</body>



</html>
