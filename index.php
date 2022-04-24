<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chattang</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div id="main-div">
        <div class="topnav" id="myTopnav">
            <a href="index.php" id="logo"><p id="logo">Chattang</p></a>
            <a href="index.php" class="link">Home</a>
            <a href="about.php" class="link">About Us</a>
            <!-- <a href="Login.php" class="link">Log In</a>
            <a href="SignUP.php" class="link">Sign Up</a> -->

            <?php
                if(isset($_SESSION["id"])) {
            ?>

            <a href="includes/logout-inc.php">Logout</a>
            <a href="#" class="link"><?php echo $_SESSION["username"]; ?></a>

            <?php 
                }
                else
                {
            ?>

            <a href="Login.php" class="link">Log In</a>
            <a href="SignUP.php" class="link">Sign Up</a>

            <?php  
                }
            ?>
            
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </div>

        <div id="main-part">
            <div id="colors">
                <button class="color-btn" data-color="darkorange">Orange</button>
                <button class="color-btn" data-color="#0310a1">Blue</button>
                <button class="color-btn" data-color="#1e9c20">Green</button>
                <button class="color-btn" data-color="#a11d00">Red</button>
                <button class="color-btn" data-color="#a60053">Purple</button>
            </div>

            <div id="main-posts">
                <div id="posts">
                    <a href="#" id="add_posts">+</a>
                    <p id="text_posts">Add Post!</p>
                </div>
            </div>

            <div id="chat">
                    <div id="wrapper">
                        <div id="menu"> 
                            <p class="welcome">Welcome<b></b></p>
                        </div>
             
                        <div id="chatbox"></div>
             
                        <form name="message" action="">
                            <input name="usermsg" type="text" id="usermsg" />
                            <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
                        </form>
                    </div>
            </div>
        </div>
        <div id="footer">
            <div id="list1">
                <ul id="ul1">
                    <a href="" class="link"><li>Google</li></a>
                    <a href="" class="link"><li>LinkedIn</li></a>
                    <a href="" class="link"><li>Instagram</li></a>
                    <a href="" class="link"><li>Facebook</li></a>
                    <a href="" class="link"><li>Gmail</li></a>
                </ul>
            </div>
        </div>

        <div id="credits">
            <h3>Created by: Granit Deliu & Enes Shabani</h3>
        </div>
    </div>




    <script src="js/script.js"></script>
</body>
</html>
