<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
}elseif($_SESSION["usertype"]=='student'){
    header("location:login.php");
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
     .content{
        margin-left: 20%;
        margin-top: 5%;
     }
    </style>
</head>
<body>
 <header>
   <a href="">Admin Dashboard</a>
   <div class="logout">
    <a href="login.php" class="btn btn-primary">Logout</a>
   </div>
</header>
<aside>
    <ul>
        <li><a href="">Admission</a></li>
        <li><a href="">Add Student</a></li>
        <li><a href="">View Student</a></li>
        <li><a href="">Add Teacher</a></li>
        <li><a href="">View Teacher</a></li>
        <li><a href="">Add Courses</a></li>
        <li><a href="">View Courses</a></li>
    </ul>
</aside>
<div class="content">
    <h1>Sidebar Accordion</h1>
    <p>In this system bla bla bla continue reading stupid words ask the maker
        lalal lalal lalal hello how are you
    </p>
    <input type="text" name="" id="">
</div>

</body>
</html>