<?php

include 'connect.php';    

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (email,name,mobile,password) VALUES ('$email', '$name', '$mobile', '$password')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:display.php');
        // echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h2 {
            text-align: center;
            margin: 20px;
        }
       .button{
        background-color:black;
       }
    </style>
</head>

<body>
    <h2>User Registration</h2>

    <div class="containermy-4">
        <form method="post">
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email address." autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name." autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number." autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password." autocomplete="off">
            </div>
            <div class= "button">
            <button type="submit" name=""><a href="http://127.0.0.1:5500/mainpage.html"> Submit</a></button>
            </div>
        </form>
    </div>
</body>

</html>