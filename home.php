<html>
    <head>
    </head>
    
    <body>
        <h3>
            <center>Welcome to the Home</center>
        </h3>
        <br>

        <form method='POST' action='upload.php' enctype='multipart/form-data'> 
            <center>
                <lable>Name</lable>
                <input type='text' name='nametxt' required>
                <input type='file' name='image' required>
                <input type='submit' name='submit' value='Upload'>
            </center>

            
        </form>
    </body>
</html>

<?php

    require_once('global.php');
    $query = "select * from `pictures`";
    $result = mysqli_query($db, $query);
    $rows_num=mysqli_num_rows($result);
    if($rows_num>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $pic=$row['imgname'];
            $name=$row['name'];
            echo "<img src='pictures/$pic' alt='$name' height='200' width='200'>";
            echo '&nbsp; &nbsp;';
        }
        
    }

?>