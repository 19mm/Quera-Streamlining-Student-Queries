<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="replyForm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Reply</title>
    <style>
        .container{
            height:900px;
        }
    </style>
</head>
<body>
    
    <?php 
    include "connect.php";
    $id=$_GET['id'];
    $qs="SELECT * FROM ask_query WHERE id=$id";
    $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
    while ($row = mysqli_fetch_array($run_query)) {
    $name=$row['name'];
    $email=$row['email_id'];
    $query=$row['query'];
    $status=$row['status'];
    }
    ?>

    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>Reply</h1>
                    <hr>
                </center>
                <form method="POST" action="reply.php">
                <h3>ID</h3>
                <input type="number" name="id" class="name" value='<?php echo "$id"; ?>' required/>
                <h3>Name</h3>
                <input type="text" class="name" name="name" value='<?php echo "$name";?>' required/>
                <h3>Email</h3>
                <input type="email" class="email" name="email" value='<?php echo "$email";?>' required/>
                <h3>Query</h3>
                <input type="text" class="query" name="query" id="query" value='<?php echo "$query"?>' required/>
                <h3>status</h3>
                <input type="text" class="status" name="status" id="msg" value='<?php echo "$status";?>' required/>
                <h3>Relpy</h3>
                <input type="text" class="reply" name="reply" id="reply" required/>
                <br>
                <center><input type="submit" class="btn" value="Reply"></center>
                </form>
<br>
                
                <div class="footer-icons">
                    <center>
                        <i class="fa-brands fa-facebook-square"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-dropbox"></i>
                    </center>
                </div>
            </div>
        </div>

    </div>
</body>

</html>