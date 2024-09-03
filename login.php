<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1IbXyVY4AnDQlJlnGp1JcuT7jzwjju9SvrLVRyOoPp2hbWrGmJQ1iXwJSp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-TcSIqQb027qvyjSMfHjOMaLkfuwVxZzUPnCJA7lzmcCWNIP3zVgnCgpD7Xa" crossorigin="anonymous"></script>
    
    <style>
       
        body {
            overflow-x: hidden;
        }
       
        body{
    padding: 50px;
}
.container{
    max-width: 600PX;
    margin: auto;
    padding: 50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
   margin-top:100px;
   
}

.form-group{
    margin-bottom: 30px;
}

    </style>
</head>
<body>
    <div class="container">
    <center>
        <h4>
            <?php

            error_reporting(0);
            session_start();
            echo $_SESSION["loginMessage"];
            ?>
        </h4>
        <h1 style="margin-top:10px; font-size:15px">Login Here !</h1>
        <form action="login_check.php" method="POST" class="form-deg">
            <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter password:">
                </div>
               
                   <input type="submit" class="btn btn-success" value="Login" name="submit" style="width:100%">
               
    
            </form>
    </center>
</div>
</body>
</html>
