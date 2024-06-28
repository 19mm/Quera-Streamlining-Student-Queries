<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AskQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Ask your Query</title>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>Ask your Query</h1>
                    <hr>
                </center>
                <form method="POST" action="AskQuery.php">
                    <h3>Name</h3>
                    <input type="text" class="name" name="name" placeholder="Enter your Name" required/>
                    <h3>Email</h3>
                    <input type="email" class="email" name="email" placeholder="Enter your Email Address" required/>
                    <h3>Query</h3>
                    <textarea style="resize: none;" name="query" id="msg" cols="30" rows="6" class="msg" placeholder="Enter your Query here . . ." required/></textarea>
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
                    <h2>Welcome to <br>Ask your Query</h2>
                    <h3><strong>Your Queries help us to reach out problem's faced <br>by you more efficently. by this we can make necessary changes in the system and offer you best in class services!!</strong></h3>
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
$msg=$_POST['query'];
$status="Not Replied";
$reply=" ";
$Query ="INSERT INTO ask_query (`name`, `email_id`, `query`, `status`, `reply`) VALUES ('$nm','$mail','$msg','$status','$reply');";
$abc=mysqli_query($conn,$Query) or die(mysqli_error($conn));
echo "<script>alert('We got your Query! We will try to reach you in, minimum time possible.')</script>";
echo "<script>window.location.href='Student.php';</script>";
}									
?>

</body>

</html>