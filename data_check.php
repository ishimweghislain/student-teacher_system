<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["apply"])) {
    $data_name = $_POST["name"];
    $data_email = $_POST["email"];
    $data_location = $_POST["location"];
    $data_phone = $_POST["phone"];
    $data_course = $_POST["course"];
    if (empty($data_name) || empty($data_email) || empty($data_location) || empty($data_course) || empty($data_phone)) {
        $_SESSION['message'] = "All fields are required";
        header("Location: index.php");
        exit(); 
    }


    $sql = "INSERT INTO admission(name, email, course, location, phone) VALUES ('$data_name', '$data_email','$data_course', '$data_location', '$data_phone')";

    if (mysqli_query($data, $sql)) {
        $_SESSION['message'] = "You are registered successfully";
    } else {
        $_SESSION['message'] = "Something went wrong: " . mysqli_error($data);
    }

   
    mysqli_close($data);

    header("Location: index.php");
    exit();
}
?>
