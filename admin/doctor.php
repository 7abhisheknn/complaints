<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    td,
    th {
        border: 3px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<?php

$conn2 = mysqli_connect('localhost', 'root', '', 'COMPLAINTVIT');

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
// echo "Connected successfully";
if (isset($_POST["submit1"])) {

    // $sql3= 'SELECT `TOTAL CLASS` FROM `MAT4001` WHERE 1';

    // $result2= mysqli_query($conn2,$sql3);
    // $attn2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
    // $sql4 = "UPDATE `MAT4001` SET `TOTAL CLASS`=`TOTAL CLASS`+1";
    // $result2 = mysqli_query($conn2, $sql4);
    $sql5 = "SELECT  `Username`,  `Status` FROM `department_credentials`";
    $result5 = mysqli_query($conn2, $sql5);
    // $attn5 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    // while($attn5 as $attnd5) {
    while ($attnd5 = mysqli_fetch_array($result5)) {
        // $num=$attnd2["TOTAL CLASS"]+1;
        // $sql4="UPDATE `MAT4001` SET `TOTAL CLASS`='$num' WHERE `USERID` = '$attnd2[];";
        if ($_POST[$attnd5['Username']] == 'Blocked') {
            $sql6 = "UPDATE `department_credentials` SET `Status`='Blocked'  WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Username']] == 'Delete') {
            $sql6 = "DELETE FROM `department_credentials` WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Username']] == 'Approv') {
            $sql7 = "UPDATE `department_credentials` SET `Status`='Approved'  WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result7 = mysqli_query($conn2, $sql7);
            // $attn7 = mysqli_fetch_all($result7, MYSQLI_ASSOC);
        }
    }
    // header('Location:auth/login.php');
}

?>
<body>
    <table>
        <h1>Hi</h1>
        <tr>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>

        </tr>
        <?php
        //database connection
        // $conn = mysqli_connect('localhost', 'root', '', 'COMPLAINTVIT');
        // if (!$conn) {
        //     // echo 'Connection error: ' . mysqli_connect_error();
        //     print "Connection Error";
        // } else {
        //     // echo 'Connection Sucessful';
        //     // print "Database Connection successful";
        // }
        // $sql = 'SELECT * FROM department_credentials';
        // $result = mysqli_query($conn, $sql);
        // $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // // print_r($attn);
        // // while($row = $result->fetch_assoc())
        // // {
        // //     echo $attn["Course Name"];
        // // }

        // foreach ($attn as $attnd) {
        //     echo "<tr>
        //             <td>" . $attnd["First Name"] . "</td>
        //             <td>" . $attnd["Last Name"] . "</td>
        //             <td>" . $attnd["Gender"] . "</td>
        //             <td>" . $attnd["Phone No"] . "</td>
        //             <td>" . $attnd["Email"] . "</td>
        //             <td>" . $attnd["Designation"] . "</td>
        //             <td>" . $attnd["Department"] . "</td>
        //             <td>" . $attnd["Location"] . "</td>
        //             <td>" . $attnd["Username"] . "</td>
        //             <td>" . $attnd["Password"] . "</td>


        //           </tr>";
        //     // echo $attnd["Course Code"];
        //     // <td>" .$attnd["Attendence Percent"] . "</td>
        // }


        ?>
    </table>
</body>

</html> -->
<!-- <td>" . $attnd["ATTENDED CLASS"] * 100 / $attnd["TOTAL CLASS"] . "</td> -->
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
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #cee5d0;
        background-size: cover;
        background-repeat: no-repeat;
    }


    .doct {
        border: 3px solid black;
        border-collapse: collapse;
    }

    .wrapper {
        /* background-color: white; */
        overflow: hidden;
        display: block;
        height: 547px;
        width: 1200px;
        margin: auto;
        margin-top: 100px;
    }

    h1 {
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
        text-transform: uppercase;
    }

    .input {
        display: block;
        margin: auto;
    }

    .text {
        width: 390px;
        height: 50px;
        margin: 30px auto 30px;
        border: none;
        border-bottom: 1px solid #cee5d0;
    }

    .input[placeholder] {
        text-align: center;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
    }

    .text:focus {
        text-align: center;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        border-bottom: 1px solid #04aa6d;
        outline: none;
    }

    .button {
        margin: 30px auto 30px;
        width: 100px;
        height: 40px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
    }

    .button:hover {
        background-color: #04aa6d;
        margin: 30px auto 30px;
        width: 100px;
        height: 40px;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        border: 1px solid white;
    }

    .ref {
        padding-left: 8.47em;
        margin: 30px auto 30px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-decoration: none;
    }

    .ref1 {
        padding-left: 5.8em;
        margin: 30px auto 30px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-decoration: none;
    }

    .ref2 {
        padding-left: 2.5em;
        margin: 30px auto 30px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-decoration: none;
    }

    .ref3 {
        padding-left: 5.2em;
        margin: 30px auto 30px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-decoration: none;
    }

    .ref4 {
        padding-left: 5em;
        margin: 30px auto 30px;
        color: #04aa6d;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-decoration: none;
    }

    @media only screen and (max-width: 768px) {
        [class="wrapper"] {
            width: 100%;
            text-align: center;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .text {
            max-width: 300px;
        }
    }

    @media only screen and (max-width: 1024px) {
        [class="wrapper"] {
            width: 100%;
            text-align: center;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .text {
            max-width: 300px;
        }

        .wrapper {
            margin-top: 20px;
            height: auto;
        }
    }

    /* #padding{
            padding-left: 5em;
            padding-right: 5em;
        } */
    /* table{
            width: 100%;
            height: 20px;
        } */
    #div3 {
        width: 10%;
        /* float: right; */
        height: 60px;
        height: 30px;
        padding-left: 2em;
    }

    #div1 {
        width: 10%;
        height: 30px;
        padding-left: 1em;
    }

    #div2 {
        left: 200px;
        width: 10%;
        padding-left: 2em;
        /* margin: 0 auto; */
        height: 30px;
    }

    .hover a::before {
        content: "";
        position: absolute;
        width: 0;
        height: 15px;
        background: #fd7474;
        bottom: 0;
        left: 0;
        border-radius: 15px;
        z-index: -1;
        transition: .2s linear;
    }

    .hover a:hover::before {
        width: 100%;
    }

    #menu {
        float: left;
    }

    th,
    td,
    table {
        border-collapse: collapse;
        letter-spacing: 1px;
    }

    .tr1 {
        border-bottom-style: solid;
    }

    .td {
        border-right-style: solid;
        border-right-color: grey;
    }

    .iconbtn {
        width: 14px;
        height: 21px;
        text-decoration: none;
        position: relative;
        font-size: 30px;
    }

    .iconbtn::before {
        position: absolute;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .iconbtn::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        border-radius: 50%;
        z-index: 0;
    }

    .hover1 .iconbtn {
        /* border: 4px solid #04AA6D; */
        color: #34495e;
    }

    .hover1 .iconbtn::after {
        /* background: #fff; */
        transition: 0.4s;
    }

    .hover1 .iconbtn:hover::after {
        transform: scale(1.3);
        opacity: 0;
    }

    .hover1 .iconbtn:hover {
        color: #B1D7B4;
    }

    .button2 {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14.5px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .btn {
        cursor: pointer;
        /* border: 1px solid #3498db; */
        background-color: transparent;
        height: 40px;
        width: 40px;
        /* color: #3498db; */
        /* font-size: 1.5em; */
        /* box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6); */
        border-radius: 500px;
    }

    .button1 {
        border-radius: 500px;
    }

    .img {
        border-radius: 100%;
    }

    footer {
        background: #cee5d0;
        padding: 90px 0;
    }

    .footer-container {
        max-width: 1300px;
        margin: auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap-reverse;
    }

    .logo {
        width: 180px;
    }

    .social-media {
        margin: 20px 0;
    }

    .social-media a {
        color: #001a21;
        margin-right: 25px;
        font-size: 22px;
        text-decoration: none;
        transition: 0.3s linear;
    }

    .social-media a:hover {
        /* color: #fc5c65; */
        color: #04aa6d;
    }

    .right-col h1 {
        font-size: 26px;
    }

    .border {
        width: 100px;
        height: 4px;
        /* background: #fc5c65; */
        background: #04aa6d;
        padding-right: 1em;
    }

    .newsletter-form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding-right: 1em;
    }

    .txtb {
        flex: 1;
        padding: 18px 40px;
        font-size: 16px;
        color: #293043;
        background: #ddd;
        border: none;
        font-weight: 700;
        outline: none;
        text-align: center;
        border-radius: 30px;
        min-width: 260px;
    }

    .btn {
        /* padding: 18px 40px; */
        padding-right: 5em;
        padding-left: 1em;
        font-size: 16px;
        color: #f1f1f1;
        /* background: #fc5c65; */
        background: #04aa6d;
        border: none;
        font-weight: 700;
        outline: none;
        border-radius: 30px;
        margin-left: 20px;
        cursor: pointer;
        transition: opacity 0.3s linear;
    }

    .btn:hover {
        opacity: 0.7;
    }

    .btn1:hover {
        /* opacity: .7; */
        background-color: #b1d7b4;
    }

    @media screen and (max-width: 960px) {
        .footer-container {
            max-width: 600px;
        }

        .right-col {
            width: 100%;
            margin-bottom: 60px;
        }

        .left-col {
            width: 100%;
            text-align: center;
        }
    }

    @media screen and (max-width: 700px) {
        .btn {
            margin: 1;
            width: 100%;
            margin-top: 20px;
        }
    }

    .side-menu {
        position: fixed;
        top: 50%;
        right: -200px;
        width: 200px;
        background-color: #f1f1f1aa;
        transition: 0.4s linear;
    }

    .side-menu.active {
        right: 0;
    }

    .side-menu a {
        display: block;
        padding: 14px 10px;
        color: #333;
        font-size: 20px;
        transition: 0.4s linear;
    }

    .side-menu a i {
        width: 40px;
        font-size: 24px;
        text-align: center;
    }

    .side-menu a:hover {
        /* background-color: #333; */
        background-color: #04aa6d;
        color: #f1f1f1;
    }

    .toggle-btn {
        position: absolute;
        left: -40px;
        top: 0;
        width: 40px;
        height: 60px;
        /* background: #333; */
        background: #04aa6d;
        color: #f1f1f1;
        line-height: 60px;
        text-align: center;
        font-size: 20px;
        cursor: pointer;
    }

    /* Slide Menu */
    .side-menu {
        position: fixed;
        top: 50%;
        right: -200px;
        width: 200px;
        background-color: #f1f1f1aa;
        transition: 0.4s linear;
    }

    .side-menu.active {
        right: 0;
    }

    .side-menu a {
        display: block;
        padding: 14px 10px;
        color: #333;
        font-size: 20px;
        transition: 0.4s linear;
    }

    .side-menu a i {
        width: 40px;
        font-size: 24px;
        text-align: center;
    }

    .side-menu a:hover {
        /* background-color: #333; */
        background-color: #04aa6d;
        color: #f1f1f1;
    }

    .toggle-btn {
        position: absolute;
        left: -40px;
        top: 0;
        width: 40px;
        height: 60px;
        /* background: #333; */
        background: #04aa6d;
        color: #f1f1f1;
        line-height: 60px;
        text-align: center;
        font-size: 20px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div>
        <table class="header" style="width: 100%;">
            <tr class="tr1">
                <td class="td" style="width: 10%; padding-right: 1em; padding-left: 1em;"><img src="pic.jpeg"
                        alt="No Image" height="75" width="150"></td>
                <td style="width: 50%; padding-left: 1em;">
                    <table>
                        <tr>
                            <td style="padding: 1em;" class="hover">
                                <a href="#pname" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-home home"></i> Home</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="About_Us_Page.html" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-align-left about"></i> About Us</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="Our_Team_Menu.html" target="_blank" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-users team"></i> Our Team</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="Contact_US_Page.html" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-headset contact"></i> Contact Us</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 40%; padding-left: 14.5em;">
                    <table>
                        <tr>
                            <!-- <td style="padding-right: 0.8em;"><button class="btn"><img src="download4.png" alt="" height="21px" width="14px"></button></td> -->
                            <td style="padding-right: 0.8em;" class="hover1"><a
                                    href="https://www.google.com/maps/place/Vellore+Institute+of+Technology+-+VIT+Chennai/@12.8406462,80.1512396,17z/data=!3m1!4b1!4m5!3m4!1s0x3a5259af8e491f67:0x944b42131b757d2d!8m2!3d12.840641!4d80.1534283"
                                    target="_blank" class="iconbtn fas fa-location-dot"></a></td>
                            <td><a href="#pname"><button class="button2 button1"><span style="font-weight: bold;">BOOK
                                            complaint</span></button></a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <form id="form1" class="form" action="" method="post">
            <h1>Doctor Details</h1>
            <div id="view_table">

                <table class="doct" style = "margin-left:auto;margin-right:auto;">
                    <tr style = "background-color:aqua;">
                        <th class="doct">First Name</th>
                        <th class="doct">Last Name</th>
                        <th class="doct">Gender</th>
                        <th class="doct">Mob No</th>
                        <th class="doct">Email</th>
                        <th class="doct">Designatio</th>
                        <th class="doct">Department</th>
                        <th class="doct">Location</th>
                        <th class="doct">Username</th>
                        <th class="doct">Status</th>
                        <th class="doct">Edit</th>
                    </tr>
                    <?php
                    //database connection
                    $conn = mysqli_connect('localhost', 'root', '', 'COMPLAINTVIT');
                    if (!$conn) {
                        // echo 'Connection error: ' . mysqli_connect_error();
                        print "Connection Error";
                    } else {
                        // echo 'Connection Sucessful';
                        // print "Database Connection successful";
                    }
                    $sql = 'SELECT * FROM department_credentials';
                    $result = mysqli_query($conn, $sql);
                    $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // print_r($attn);
                    // while($row = $result->fetch_assoc())
                    // {
                    //     echo $attn["Course Name"];
                    // }

                    foreach ($attn as $attnd) {
                        echo "<tr>
                    <td class='doct'>" . $attnd["First Name"] . "</td>
                    <td class='doct'>" . $attnd["Last Name"] . "</td>
                    <td class='doct'>" . $attnd["Gender"] . "</td>
                    <td class='doct'>" . $attnd["Phone No"] . "</td>
                    <td class='doct'>" . $attnd["Email"] . "</td>
                    <td class='doct'>" . $attnd["Designation"] . "</td>
                    <td class='doct'>" . $attnd["Department"] . "</td>
                    <td class='doct'>" . $attnd["Location"] . "</td>
                    <td class='doct'>" . $attnd["Username"] . "</td>
                    <td class='doct'>" . $attnd["Status"] . "</td>
                    <td>
                    <select name='" . $attnd["Username"] . "' >
                    <option value=''><p>Select</p></option>
                        <option value='Approv'><p>Approved</p></option>
                        <option value='Blocked'><p>Blocked</p></option>
                        <option value='Delete'><p>Delete</p></option>
                    </select>
                    </td>

                    
                  </tr>";
                        // echo $attnd["Course Code"];
                        // <td>" .$attnd["Attendence Percent"] . "</td>
                    }


                    ?>
                    <!-- <tr>
                        <td colspan="11" stayle="padding:30px; margin-left:10em;"><input type="submit" name="submit1"
                                value="save"></td>
                    </tr> -->
                </table>
                </div><div style="display: grid;height:25px;width: 50px;text-align:center;position:absolute;padding-left: 650px;">
                <input type="submit" name = "submit1" class = "input button" value="save">
            </div>
            <div style="display: grid;height:25px;width: 50px;text-align:center;position:absolute;padding-left: 650px;">
                <input type="submit" name = "submit1" class = "input button" value="save">
            </div>
        </form>
        <!-- <input type="button" class="input button" value="Save"> -->
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
        $(".toggle-btn").click(function() {
            $(".side-menu").toggleClass("active");
            $(this).toggleClass("fa-chevron-right");
        });
        </script>
    </div>
    </div>
    <div>
        <footer id="footer">
            <div class="footer-container">
                <div class="left-col">
                    <img src="pic.jpeg" alt="Error loading Image" class="logo" />
                    <div class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="rights-text">© 2022 Created By Life Wave All Rights Reserved.</p>
                </div>

                <div class="right-col">
                    <h1>Our Newsletter</h1>
                    <div class="border"></div>
                    <p>Enter Your Email to get our news and updates.</p>
                    <form action="" class="newsletter-form">
                        <input type="text" class="txtb" placeholder="Enter Your Email" />
                        <input type="submit" class="btn" value="Submit" />
                    </form>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>