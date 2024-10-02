<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
}elseif($_SESSION["usertype"]=='student'){
    header("location:login.php");
}

$host ="localhost";
$user ="root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if(isset($_POST["addstudent"])){
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype ="student";

    $check = "SELECT *FROM users WHERE username = '$username'";
    $check_user =mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Username already exists ! Try another one');
        </script>";
    }
else{
    $sql = "INSERT INTO users(username,phone,email,usertype,password) VALUES('$username','$user_phone','$user_email','$usertype','$user_password')";

    $result = mysqli_query($data,$sql);

    if($result){
        echo "<script type='text/javascript'>
        alert('Data has been successfully uploaded !');
        </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Data upload has failed !');
        </script>";
    }
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
    <h1>Add Student</h1>
</div>
<div align="center" style="margin-left:30%;">
        
        <form action="#" method="POST">
            <div class="form" style="margin-right: -80px;">
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="name" style=" margin-left:-350px">Username :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="name" id="name">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="email" style=" margin-left:-350px">Email :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="email" id="email">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="phone" style=" margin-left:-350px">Phone :</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="phone" id="phone">
                </div>
            </div>
            <div class="row mb-3" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <label class="form-label" for="message" style=" margin-left:-350px">Password :</label>
                </div>
                <div class="col-md-6">
                    <input type="password" name="password" id="password" class="form-control" style="width: 400px; margin-left: -820px;"></textarea>
                </div>
            </div>
            <div>
                <input name="addstudent" class="btn btn-primary" type="submit" value="Add Student" style="width: 42%; margin-left: -310px;" >
            </div>
            </div>
        </form>
    </div>
</body>
</html>