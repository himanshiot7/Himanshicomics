<?php

include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$email = $row['email'];
$name = $row['name'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET id=$id,email='$email',name='$name',mobile='$mobile',password='$password' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:display.php');
        // echo "Data updated successfully";
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
    </style>
</head>

<body>
    <h2>User Registration</h2>

    <div class="container my-4">
        <form method="post">
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email address." autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name." autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number." autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password." autocomplete="off" value=<?php echo $password;?>>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>

</html>