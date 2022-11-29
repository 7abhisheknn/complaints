<?php
$conn = new mysqli("localhost", "root", "", "COMPLAINTVIT");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if (isset($_POST["submit1"])) {
    $dep = $_POST['dep'];
    // $doct = $_POST['doct'];
    $loc = $_POST['loc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $puser=$_POST['puser'];
    $query = "select * from complaint where  Location='$loc' and  Date='$date' and  Time='$time' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    // $query3= "select MAX(SlNo) from complaint";
    // $result3 = mysqli_query($conn, $query3);
    // $row=mysqli_fetch_array($result3);
    // while ($row = mysqli_fetch_array($result3))
    // {
    //     $slno=$row['SlNo']+1;
    // }
    
    // echo $result3;
    // echo $slno;
    if ($count > 0) {
        echo "<script>alert('An complaint already registered by someone!!');
        window.location.replace('complaint.html');
        </script>";
        // header('Location:unsuccessful.php');
        //     session_start();
        //     $cookie_name = "user";
        //     $cookie_value = $uname;
        //     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        //     if (!isset($_COOKIE[$cookie_name])) {
        //         echo "Cookie named '" . $cookie_name . "' is not set!";
        //     } else {
        //         date_default_timezone_set("Asia/Kolkata");
        //         $dt = date("h:i:sa");
        //         echo '<script type="text/JavaScript"> 
        //   alert("Cookie Is Set For ' . $_COOKIE[$cookie_name] . ' For 30 Days At Time ' . $dt . ' "); 
        //   alert(" ' . $uname . ' ,Your Session Is Started");
        //    window.location.replace("success.html");
        //   </script>';
        //     }
    } else {
        // echo "Login unsucessful";
        // header('Location:unsuccessful.php');
        $newuser = "INSERT INTO `complaint`(`Department`, `Location`, `Date`, `Time`,`StudentUser`,`Status`) VALUES ('$dep','$loc','$date','$time','$puser','Pending')";
        if (mysqli_query($conn, $newuser)) {

            // header('Location:index.html');
            echo "<script>alert('An complaint  registered suessfully !!');
        window.location.replace('./student.php');
        </script>";
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }
    // header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<!-- if(isset($_POST["submit1"]))
{
    $name=$_POST['nme'];
    $email=$_POST['eml'];
    $pno=$_POST['pno'];  
    $uname=$_POST['uname'];
    $pword=$_POST['pwd'];
  $newuser="INSERT INTO `Person_Details`(`Name`, `Email`, `Phone No`, `Username`, `Password`) VALUES ('$name','$email','$pno','$uname','$pword')";
    if(mysqli_query($conn,$newuser))
    {
        
        header('Location:index.html');
    }
    else
    {
        echo 'query error: '. mysqli_error($conn);
    }
} -->