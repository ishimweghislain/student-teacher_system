<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
} elseif ($_SESSION["usertype"] == 'student') {
    header("location: login.php");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['student_id'];


$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($data, $sql);

if ($result) {
    $info = $result->fetch_assoc();
} else {
    die("Error fetching data: " . mysqli_error($data));
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET username='$name', email='$email', phone='$phone', password='$password' WHERE id='$id'";
    $result2 = mysqli_query($data, $query);
    
    if ($result2) {
        header("location:view_student.php");
    } else {
        echo "Update failed: " . mysqli_error($data);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1IbXyVY4AnDQlJlnGp1JcuT7jzwjju9SvrLVRyOoPp2hbWrGmJQ1iXwJSp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-TcSIqQb027qvyjSMfHjOMaLkfuwVxZzUPnCJA7lzmcCWNIP3zVgnCgpD7Xa" crossorigin="anonymous"></script>
    <style> 
    *{
        margin: 0;
        padding: 0;
    }
        header{
            background-color: skyblue;
            line-height: 70px;
            padding-left: 30px;
        }
        a,a:hover{
            text-decoration: none!important;
        }
       .logout{
        float: right;
        padding-right: 30px;

       }
     ul{
        background-color: #424a5b;
        width: 16%;
        height: 100%;
        position: fixed;
        padding-top: 5%;
        text-align: center;
     }

     ul li{
        list-style: none;
        padding-bottom: 30px;
        font-size: 15px;
     }
     ul li a{
        color: white;
        font-weight : bold;
     }
     ul li a:hover{
        text-decoration: none;
        color: skyblue;
     }
     *{
        margin: 0;
        padding: 0;
    }
body{
    overflow-x:hidden;
}
        header{
            background-color: skyblue;
            line-height: 70px;
            padding-left: 30px;
        }
        a,a:hover{
            text-decoration: none!important;
        }
       .logout{
        float: right;
        padding-right: 30px;

       }
     ul{
        background-color: #424a5b;
        width: 16%;
        height: 100%;
        position: fixed;
        padding-top: 5%;
        text-align: center;
     }

     ul li{
        list-style: none;
        padding-bottom: 30px;
        font-size: 15px;
     }
     ul li a{
        color: white;
        font-weight : bold;
     }
     ul li a:hover{
        text-decoration: none;
        color: skyblue;
     }
     .content{
        margin-left: 20%;
        margin-top: 5%;
     }
    </style>
</head>
<body>
<?php
include 'admin_sidebar.php';
 ?>
<div class="content">
    <h1>Update student</h1>
    <div align="center" style="margin-left:30%;">
        
        <form action="#" method="POST">
            <div class="form" style="margin-right: -80px;">
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="name" style=" margin-left:-550px">Username :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="name" id="name"
                     value="<?php echo "{$info['username']}" ?>">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="email" style=" margin-left:-550px">Email :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="email" id="email"
                    value="<?php echo "{$info['email']}" ?>">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="phone" style=" margin-left:-550px">Phone :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="phone" id="phone"
                    value="<?php echo "{$info['phone']}" ?>">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="message" style=" margin-left:-550px">Password :</label>
                </div>
                <div class="col-md-6">
                    <input type="password" name="password" id="password" class="form-control" style="width: 400px; margin-left: -820px;"
                    value="<?php echo "{$info['password']}" ?>"></textarea>
                </div>
            </div>
            <div>
                <input name="update" class="btn btn-success" type="submit" value="Update Student" style="width: 50%; margin-left: -410px;" >
            </div>
            </div>
        </form>
    </div>

</body>
</html>