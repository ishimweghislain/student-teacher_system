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


    if($result){
        $_SESSION['message']="your application sent successful";
    
        header("location: index.php");
        }
        
        if(empty($data_name) OR empty($data_email) OR empty($data_message) OR empty($data_phone)){
            $_SESSION['message']="Please all fields are required";
    
        header("location: index.php");
        }
        
        else{

    $sql="INSERT INTO admission(name,email,message,phone) VALUES('$data_name','$data_email','$data_message','$data_phone')";
    
    if(mysqli_query($data, $sql)){
        $_SESSION['message']="you are registered successfully";
    
    }else {
        die("something went wrong");
     }

     mysqli_close($conn);
   }
    
    
   
}
?>