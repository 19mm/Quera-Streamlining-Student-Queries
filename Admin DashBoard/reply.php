<?php
 
     include "connect.php";
     
     $id=$_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $query=$_POST['query'];
     $status=$_POST['status'];
    $reply=$_POST['reply'];
    $qs1="UPDATE ask_query SET status='$status',reply='$reply' WHERE id=$id ";
    $run_query=mysqli_query($conn,$qs1)or die (mysqli_error($conn));
    echo "<script>alert(' Replied successfully!!!')</script>";
    echo "<script>window.location.href='Read-Queries.php';</script>";
    
?>