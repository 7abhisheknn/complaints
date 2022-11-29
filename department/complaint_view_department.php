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
session_start();

if (!isset($_SESSION['username'])) {
    header('Location:../auth/login.php');
}

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
    $sql5 = "SELECT  `Sl No`,  `Status` FROM `complaint`";
    $result5 = mysqli_query($conn2, $sql5);
    // $attn5 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    // while($attn5 as $attnd5) {
    while ($attnd5 = mysqli_fetch_array($result5)) {
        // $num=$attnd2["TOTAL CLASS"]+1;
        // $sql4="UPDATE `MAT4001` SET `TOTAL CLASS`='$num' WHERE `USERID` = '$attnd2[];";
        if ($_POST[$attnd5['Sl No']] == 'Blocked') {
            $sql6 = "UPDATE `complaint` SET `Status`='Blocked'  WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            // $sql6 = "DELETE FROM `complaint`  WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Sl No']] == 'Upvote') {
            $sql6 = "UPDATE `complaint` SET `Upvote`= `Upvote`+1 WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // UPDATE `complaint` SET `Upvote`= `Upvote`+1 WHERE `Sl No`=4
        }
        if ($_POST[$attnd5['Sl No']] == 'Delete') {
            // $sql6 = "UPDATE `complaint` SET `Status`='Blocked'  WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            $sql6 = "DELETE FROM `complaint`  WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Sl No']] == 'Approv') {
            $sql7 = "UPDATE `complaint` SET `Status`='Approved'  WHERE `Sl No` = '" . $attnd5['Sl No'] . "'";
            $result7 = mysqli_query($conn2, $sql7);
            // $attn7 = mysqli_fetch_all($result7, MYSQLI_ASSOC);
        }
    }
    // header('Location:auth/login.php');

    // window.location.replace('doctor.php');
}
echo "<script>alert('Saved Successfully!!');
    
    </script>";

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
    <title>complaint View</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/78d75312e3.js">
    <link rel="stylesheet" href="complaint_view_department.css">
</head>

<body>
    <div>
        <?php include '../template/header.php'; ?>

        <form id="form1" class="form" action="" method="post">
            <h1>Complaint Details</h1>
            <div id="view_table">

                <table class="doct" style = "margin-left:auto;margin-right:auto;">
                    <tr>
                        <th class="doct">Department</th>
                        <th class="doct">Location</th>
                        <th class="doct">Date</th>
                        <th class="doct">Description</th>
                        <th class="doct">Status</th>
                        <th class="doct">Upvote</th>
                        <th class="doct">Edit</th>
                    </tr>
                    <?php

                    if (!isset($_SESSION['username'])) {
                        header('Location:../auth/login.php');
                    }
                    //database connection
                    $conn = mysqli_connect('localhost', 'root', '', 'COMPLAINTVIT');
                    if (!$conn) {
                        // echo 'Connection error: ' . mysqli_connect_error();
                        print "Connection Error";
                    } else {
                        // echo 'Connection Sucessful';
                        // print "Database Connection successful";
                    }
                    // $sql = 'SELECT * FROM complaint WHERE Department="Electric" ORDER BY Upvote DESC';
                    // $result = mysqli_query($conn, $sql);
                    // $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // print_r($attn);
                    // while($row = $result->fetch_assoc())
                    // {
                    //     echo $attn["Course Name"];
                    // }
                    if (isset($_POST["submit2"]) || isset($_SESSION['dept']))
                    {
                    $var1="";
                    if(isset($_POST["submit2"]))
                    {
                        $var1=$_POST['puser'];
                        $_SESSION['dept']=$var1;
                    }
                    if(isset($_SESSION['dept']))
                    {
                        $var1=$_SESSION['dept']; 
                    }
                    $sql = "SELECT * FROM complaint  where Department='".$var1."' ORDER BY Upvote DESC";
                    $result = mysqli_query($conn, $sql);
                    $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($attn as $attnd) {
                        echo "<tr>
                    <td class='doct'>" . $attnd["Department"] . "</td>
                    <td class='doct'>" . $attnd["Location"] . "</td>
                    <td class='doct'>" . $attnd["Date"] . "</td>
                    <td class='doct'>" . $attnd["Time"] . "</td>
                    <td class='doct'>" . $attnd["Status"] . "</td>
                    <td class='doct'>" . $attnd["Upvote"] . "</td>
                    <td>
                    <select name='" . $attnd["Sl No"] . "' >
                    <option value=''><p>Select</p></option>
                        <option value='Approv'><p>Approved</p></option>
                        <option value='Blocked'><p>Blocked</p></option>
                        <option value='Upvote'><p>Upvote</p></option>
                        <option value='Delete'><p>Delete</p></option>
                    </select>
                    </td>

                    
                  </tr>";
                        // echo $attnd["Course Code"];
                        // <td>" .$attnd["Attendence Percent"] . "</td>
                    }
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
        </form>
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
    <?php include '../template/footer.php'; ?>
</body>

</html>