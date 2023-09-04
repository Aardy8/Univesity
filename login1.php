<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./icon.png">
    <title>UNIVERSITY</title>
</head>
<body>
    <section class="header">
        <nav>
        <a href="#"><img src="images/logo1.png"/></a>
        <div class="nav-links" id="navLinks">
            <i class="fa"  onclick="hidemenu()">&times;</i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="course.html">COURSES</a></li>
                <li><a href="">LOGIN</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="transport.html">TRANSPORT</a></li>
            </ul>   
        </div>
        <i class="fa"  onclick="showmenu()">&equiv;</i>
    </nav>
    <h1 class="login-text">LOGIN</h1>
    <form action="login.php" method="post">
        <br/>
        <input type="text" class="username" name="uname" placeholder="Enter Your user Id" required>
        <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
        <button type="submit" class="visit-here login-button">login here</button>
    </form>
    </section>


    <!--- javascript -->
    <script>
        var navLinks= document.getElementById("navLinks");
        function showmenu(){
            navLinks.style.right = "0";
        }
        function hidemenu(){
            navLinks.style.right = "-200px";
        }
    </script>

    
    
</body>
</html>