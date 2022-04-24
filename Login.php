<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chattang</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/Login.css">
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
            <a href="Login.php" class="link">Log In</a>
            <a href="SignUP.php" class="link">Sign Up</a>

            
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    
        <div id="main-part">
            <div class="login-box">
                <h2>Login</h2>
                <form action="includes/login-inc.php" method="post">
                  <div class="user-box">
                    <input type="text" name="username">
                    <label id="label">Username</label>
                  </div>
                  <div class="user-box">
                    <input type="password" name="password">
                    <label id="label1">Password</label>
                  </div>
                  <div id="buttons">
                    <a href="" id="a" type="submit" value="Submit"><input type="submit" name="submit" value="Submit" onclick="myFunction()" id="input">
                        <span id="span"></span>
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                    </a>
                    <a id="b" href="#">Forgot password</a>
                </div>
                </form>
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
    </div> 
             
       <script src="js/Login.js"></script>
        

    </body>
</html>
