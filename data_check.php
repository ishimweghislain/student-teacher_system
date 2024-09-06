<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed");
}

if(isset($_POST["apply"])){
    $data_name = $_POST["name"];
    $data_email = $_POST["email"];
    $data_message = $_POST["message"];
    $data_phone = $_POST["phone"];
    
    $sql="INSERT INTO admission(name,email,message,phone) VALUES('$data_name','$data_email','$data_message','$data_phone')";
    $result = mysqli_query($data,$sql);

    if($result){
    $_SESSION['message']="your application sent successful";

    header("location: index.php");
    }else{
        echo"apply failed";
    }
}
?>