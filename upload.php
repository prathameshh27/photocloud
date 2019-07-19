<?php
    require_once('global.php');
    if(isset($_POST['submit']))
    {
        $name=$_POST['nametxt'];
        $image=$_FILES['image']['name'];

        //echo "$name &nbsp; &nbsp; $image";

        echo $_FILES['image']['tmp_name'];

        move_uploaded_file($_FILES['image']['tmp_name'], 'pictures/'.$image);

        $query = "insert into pictures(name, imgname) values('$name', '$image')";
        $result=mysqli_query($db, $query);

        if($result==1)
        {
            header("location:home.php");
        }
    }
?>