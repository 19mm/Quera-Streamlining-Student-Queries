<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Feedback</title>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>FEEDBACK</h1>
                    <hr>
                </center>
                <form method="POST" action="Feedback.php">
                <h3>Name</h3>
                <input type="text" class="name" name="name" placeholder="Enter your Name" required/>
                <h3>Email</h3>
                <input type="email" class="email" name="email" placeholder="Enter your Email Address" required/>
                <h3>Message</h3>
                <textarea style="resize: none;" name="msg" id="msg" cols="30" rows="6" class="msg" placeholder="Enter your Message here . . ." required/></textarea>
                <br>
                <input type="submit" name="submit" class="btn" value="Submit">
                <br>
                </form>
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

        <div class="section2">
            <div class="section2-content">
                <center>
                    <h2>Welcome to Feedback</h2>
                    <h3><strong>Your Feedback's help us to reach out problem's faced <br>by you more efficently. by this we can make necessary changes in the system and offer you best in class services!!</strong></h3>
                    <a href="#"><button class="btn">Thank You</button></a>
                </center>
            </div>

        </div>

    </div>
     
<?php
include "connect.php";
 
if(isset($_POST['submit']))
{
$nm=$_POST['name'];
$mail=$_POST['email'];
$msg=$_POST['msg'];
$Query ="INSERT INTO feedback VALUES ('$nm','$mail','$msg');";
$abc=mysqli_query($conn,$Query) or die(mysqli_error($conn));
echo "<script>alert('We got your feedback! Thanks for your feedback.')</script>";
}									
?>

</body>

</html>