<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MakeAnnouncment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Make an Announcment</title>
</head>

<body>
     <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>Make an Announcment</h1>
                    <hr>
                </center>
                <form method="POST" action="MakeAnnouncment.php">
                <h3>Announcer</h3>
                <input type="text" class="name" name="Announcer" placeholder="Enter your Announcer's Name" required />
                <h3>Date</h3>
                <input type="date" class="email" name="Date" placeholder="Enter Date of Announcment" required/>
                <h3>Announcement</h3>
                <input type="text" class="msg" name="Announcment" id="msg" placeholder="Enter Announcment" required/>
                <br>
                <center><input type="submit" class="btn" name="submit" value="Announce"></center>
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
    <?php 

    include "connect.php";

    if(isset($_POST['submit']))
    {
    $Announcer= $_POST['Announcer'];
    $date= $_POST['Date'];
    $Announcement= $_POST['Announcment'];
    $qs="INSERT INTO update_announcment (Announcer,Announcment,dt) VALUES ('$Announcer', '$Announcement', '$date');";
    $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
    echo "<script>alert('Announcment made successfull!!!')</script>";
    echo "<script>window.location.href='AdminDashBoard.php';</script>";
    }
    ?>

</body>

</html>