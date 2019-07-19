<?php
    require_once('global.php');

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from users where username='$username'";
    $result=mysqli_query($db, $query);
    $rows=mysqli_num_rows($result);
    echo "this is $username \t $password \t $task <br>";
    echo "$rows <br>";
    
    if($rows>0)
    {
        echo "the username already exist";
        header('location:index.php');    
    }
    
    else
    {
        $query="INSERT INTO `users`(username, password) values('$username', '$password')";
        mysqli_query($db, $query);
        echo "Registration successfull";
        header('location:index.php');
    }
    
?>