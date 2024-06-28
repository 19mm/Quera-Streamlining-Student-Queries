<?php 
                     include "connect.php";
                     $id=$_GET['id'];
                     $q="UPDATE ask_query SET status='Rejected' WHERE id=$id";
                           mysqli_query($conn,$q)or die (mysqli_error($conn));
                           echo "<script> alert('Query rejected!!!'); </script>";
                           echo "<script> window.location.href='Read-Queries.php'; </script>";
                           
?>