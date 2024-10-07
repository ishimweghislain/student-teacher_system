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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $name = $_POST["username"];
        $password = $_POST["password"];

      
        $name = mysqli_real_escape_string($data, $name);
        $password = mysqli_real_escape_string($data, $password);

        $sql = "SELECT * FROM users WHERE username='" . $name . "' AND password='" . $password . "'";
        $result = mysqli_query($data, $sql);

   
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            if ($row["usertype"] == "student") {
              
                $_SESSION["username"]=$name;

                $_SESSION["usertype"]="student";

                header("location: studenthome.php");

                exit();
            } elseif ($row["usertype"] == "admin") {
                $_SESSION["username"]=$name;

                $_SESSION["usertype"]="admin";

                header("location: admission.php");

                exit();
            }
        } else {

           
            $message= "Invalid username or password";

            $_SESSION["loginMessage"]=$message;
            header("location:login.php");
        }
    } else {
        echo "Please enter both username and password.";
    }
}
?>