<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UpdateAnnouncment(Form).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Update Announcment</title>
    <style>
        .container{
            height:700px;
        }  
    </style>
</head>

<body>
    
    <?php 
    include "connect.php";
    $qs="SELECT * FROM update_announcment";
    $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
    while ($row = mysqli_fetch_array($run_query)) {
    $id=$row['id'];
    $Announcer= $row['Announcer'];
    $date= $row['dt'];
    $Announcment= $row['Announcment'];
    }
    ?>

    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>Update Announcment</h1>
                    <hr>
                </center>
                <form method="POST" action="Update.php">
                <h3>ID</h3>
                <input type="number" class="name" name="id" placeholder="Enter Announcment ID" value='<?php echo "$id";?>' />
                <h3>Announcer</h3>
                <input type="text" class="name" name="Announcer" placeholder="Enter your Announcer's Name" value='<?php echo "$Announcer";?>' />
                <h3>Date</h3>
                <input type="date" class="email" name="date" placeholder="Enter Date of Announcment" value='<?php echo "$date";?>' />
                <h3>Announcement</h3>
                <input type="text" class="msg" name="Announcment" id="msg" placeholder="Enter Announcment" value='<?php echo "$Announcment";?>' />
                <br>
                <center><input type="submit" name="submit" class="btn" value="Update"></center>
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