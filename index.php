<html>
    <head></head>
    <body>

        <!-- psuedo form  -->
        <!-- <form method='POST'></form> -->
        
        <div>
            <h3>Sign up</h3>
            <!-- <form method='POST' > -->
            <form action='signup.php' method='POST'>
                Username: <input type='text' name='username' required> <br><br>
                Password:&nbsp; <input type='password' name='password' required> <br><br>
                <input type='submit' value='sign up' name='submit'>
            </form>
        </div>
        
        <div>
            <h3>Sign in</h3>
            <!-- <form method='POST' > -->
            <form action='signin.php' method='POST'>
                Username: <input type='text' name='username' required> <br><br>
                Password:&nbsp; <input type='password' name='password' required> <br><br>
                <input type='submit' value='sign in' name='submit'> 
            </form>
        </div>
        <br><br>
    </body>
</html>







<?php
/*
    require_once('global.php');
    if(isset($_POST))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $task=$_POST['submit'];

        echo "this is $username \t $password \t $task <br>";

        if($task=="sign up")
        {
            echo "signup page <br>";
        }

        else if($task=="sign in")
        {
            echo "signin page <br>";
        }

        else
        {
            echo "task error";
        }
    }
*/    
?>
