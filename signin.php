<?php
    require_once('global.php');
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from users where username='$username' && password='$password'";
    $result=mysqli_query($db, $query);
    $rows=mysqli_num_rows($result);
    //echo "$rows <br>";

    if($rows>0)
    {
        echo "<br><br> <center> ";
        echo "<h3> Welcome $username </h3>";
        echo "<br> <input type='button' value='Home' onclick=\"window.open('home.php')\">";
        echo "&nbsp; <input type='button' value='Gallery' onclick=\"window.open('gallery.php')\">";
        echo "<center> <br><br> ";

    }
    
    else
    {
        echo "Signin failed";
    }
?>