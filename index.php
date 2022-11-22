<?php include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "insert into `data` (name, email, mobile, password)
    value('$name', '$email', '$mobile', '$password')";

    $result= mysqli_query($conn, $sql);
    if($result){
        echo "data inserted succesully";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
</head>
<body>

    <form action="" method="POST">
        <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div>
        <label for="">Mobile</label>
        <input type="text" name="mobile" placeholder="Enter your mobile">
        </div><div>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
    
</body>
</html>