<?php include 'config.php';


$id = $_GET['updateid'];

$sql = "select * from `data` where id =$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "update `data` set id=$id, name='$name', email= '$email', mobile='$mobile',
             password= '$password' where id=$id";

    $result= mysqli_query($conn, $sql);
    if($result){
        header("location:display.php");
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
        <input type="text" name="name" placeholder="Enter your name" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div>
        <label for="">Mobile</label>
        <input type="text" name="mobile" placeholder="Enter your mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div><div>
        <label for="">Password</label>
        <input type="text" name="password" placeholder="Enter your password" value=<?php echo $password;?>>
        </div>
        <div>
            <input type="submit" name="submit" value="Update Details">
        </div>
    </form>
    
</body>
</html>