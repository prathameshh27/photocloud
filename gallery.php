<?php
    $directory="pictures/";
    //$image = glob($directory."*.{jpg, png, bmp}"); //to get multiple formats
    $image = glob($directory."*");
    foreach($image as $item)
    {
        echo "<img src='$item' height='200' width='200'> &nbsp; &nbsp;";
        //echo $item."<br>";
    }
?>