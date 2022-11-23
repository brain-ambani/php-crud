<?php include 'config.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <button class="btn btn-add" ><a href="index.php">Add user</a> </button>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Srl No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "select * from `data`";
                $result = mysqli_query($conn, $sql);

                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td class="buttons">
                            <button class="btn btn-primary">Update</botton>
                            <button class="btn btn-danger">Delete</botton>
                        </td>
                    </tr>
                        ';
                    }
                }


            ?>
            </tbody>
        </table>
    </div>
</body>
</html>