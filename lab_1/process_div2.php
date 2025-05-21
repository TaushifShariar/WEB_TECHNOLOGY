<?php
session_start();
if (isset($_POST["submit"])) {
    $uname = $_POST["uname"];
    $pass = $_POST["password"];
    if (!($_POST["uname"]) || !($_POST["password"])) {
    echo "Please fill in both username and password.<br>";
    header("refresh: 2; url = lab_1.html");
    exit();}

    $conn = mysqli_connect('localhost', 'root', '', 'aqi');
    if (!$conn) {
        die("Database connection failed.");
    }

   $sql = "SELECT *FROM users WHERE username = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION["uname"] = $uname;
         if (isset($_POST['color'])) 
    $color1 = $_POST['color'];
    if(setcookie('bgcolor', $color1, time() + 20)) {
       echo "success<br>";
    
    
  echo "Redirecting...";
        header("refresh: 2; url = request_aqi.php"); }
       
    } else {
        echo "User not found.";
        header("refresh: 2; url = lab_1.html");
        exit();
    }
}


?>
