<?php

error_reporting(0);
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
}elseif($_SESSION["usertype"]=='student'){
    header("location:login.php");
}

$host ="localhost";
$user ="root";
$password="";
$db="schoolproject";
$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT *FROM users WHERE usertype='student'";
$result = mysqli_query($data,$sql);
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
     .content .table-responsive{
        width: 85%;
        margin-left: -20%;
     }
    </style>
</head>
<body>
<?php
include 'admin_sidebar.php';
 ?>
<div class="content">
    <h1>Student Data</h1>
    <?php
     if($_SESSION['message']){
        echo $_SESSION['message'];
     }

     unset($_SESSION['message']);
    ?>
    <div class="content">
    <div class="container mt-5">
  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($info=$result->fetch_assoc()){

        
        ?>
        <tr>
          <td>
            <?php echo "{$info['username']}";  ?>
          </td>
          <td>
          <?php echo "{$info['email']}";  ?>
          </td>
          <td>
          <?php echo "{$info['phone']}";  ?>
          </td>
          <td>
          <?php echo "{$info['password']}";  ?>
          </td>
          <td>
          <?php echo "<a onClick=\" javascript:return confirm('Are you sure you to delete this student')\" href='delete.php?student_id={$info['id']}'><button class='btn btn-danger'>Delete</button></a>";  ?>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

</body>
</html>