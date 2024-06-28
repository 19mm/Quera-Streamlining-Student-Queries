<?php 
    include "connect.php";

    $id=$_POST['id'];
    $Announcer= $_POST['Announcer'];
    $date= $_POST['date'];
    $Announcment= $_POST['Announcment'];
    $qi= "UPDATE update_announcment SET Announcer='$Announcer', dt='$date', Announcment='$Announcment' WHERE id=$id";
    mysqli_query($conn,$qi) or die(mysqli_error($conn));
    echo "<script>alert(' Announcment updated successfully!!!')</script>";
    echo "<script>window.location.href='Update-Announcment.php';</script>";
    ?>