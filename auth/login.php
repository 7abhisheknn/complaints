<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/78d75312e3.js">
    <link rel="stylesheet" href="./login.css">
</head>
<body>
   <div>
   <?php include '../template/header.php'; ?>
    <div class="wrapper">
        <form id="form1" class="form" action="./after_login.php" method="post">
            <h1>Login</h1>
                <table>
                    <tr id="padding">
                        <td><a href="index2.html" target="_blank"><div id="div2"><input type="radio" class="input button" value="Doctor" name="login"></div></a></td>
                        <td><a href="index3.html" target="_blank"><div id="div1"><input type="radio" class="input button" value="Patient" name="login"></div></a></td>
                        <td><a href="index1.html" target="_blank"><div id="div3"><input type="radio" class="input button" value="Admin" name="login"></div></a></td>
                        <br>
                        <a href="#" class="ref2">Depart.</a>
                        <a href="#" class="ref3">Student</a>
                        <a href="#" class="ref4">Admin</a>
                        <!-- <td><a href="index3.html" target="_blank"><div id="div1"><input type="button" class="input button" value="Patient"></div></a></td>
                        <td><a href="index2.html" target="_blank"><div id="div2"><input type="button" class="input button" value="Doctor"></div></a></td>
                        <td><a href="index1.html" target="_blank"><div id="div3"><input type="button" class="input button" value="Admin"></div></a></td> -->
                    </tr>
                </table> 
                <input type="text" class="input text" placeholder="Username" name="uname">
                <input type="password" class="input text" placeholder="Password" name="pword">
                <a href="#" class="ref">Forgot Password</a>
                <input type="submit" class="input button" name="submit1" value="SUBMIT">
                <a href="sign_up.html" class="ref1">Don't have an Account? Sign Up</a>
        </form>
        <div>
            <div class="side-menu">
                <div class="toggle-btn fas fa-chevron-left"></div>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>

                <a href="#">
                    <i class="fab fa-twitter"></i>
                    Twitter
                </a>

                <a href="#">
                    <i class="fab fa-youtube"></i>
                    Youtube
                </a>

                <a href="#">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>

                <!-- <a href="#">
            <i class="fab fa-discord"></i>
            Discord
          </a> -->
            </div>
            <script>
                $(".toggle-btn").click(function () {
                    $(".side-menu").toggleClass("active");
                    $(this).toggleClass("fa-chevron-right");
                });
            </script>
        </div>
    </div>
    <?php include '../template/footer.php'; ?>
</body>
</html>