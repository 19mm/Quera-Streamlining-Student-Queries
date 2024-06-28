<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>REGISTER</h1>
                    <hr>
                </center>
                <form method="POST" action="Register.php">
                <h3>Name</h3>
                <input type="text" class="fullname" name="fullname" placeholder="Enter your Full-Name" required/>
                <h3>Mobile No.</h3>
                <input type="text" class="mobile" name="mobile" placeholder="Enter your Mobile Number" pattern="[7-9]{1}[0-9]{9}" required/>
                <h3>Email</h3>
                <input type="email" class="email" name="email" placeholder="Enter your Email Address" required/>
                <h3>Password</h3>
                <input type="password" class="password" name="password" placeholder="Enter the Password you want" required/>
                <br>
                <input type="submit" class="btn" name="submit" value="Register">
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
                    <h2>Welcome to Registration</h2>
                    <h3><strong>By, getting registered with us you will recieve your<br><center>Login Credential's!!!</center>by using them you can perform your further task's.</strong></h3>
                    <a href="Login.php"><button class="btn">Login</button></a>
                </center>
            </div>

        </div>

    </div>
    <?php
include "connect.php";
 
if(isset($_POST['submit']))
{
$nm=$_POST['fullname'];
$mail=$_POST['email'];
$pass=$_POST['password'];
$mob=$_POST['mobile'];
$query ="INSERT INTO `quera`.`registration` (`User_name`, `mobile_no.`, `email`, `password`) VALUES ('$nm','$mob', '$mail','$pass');";
$abc=mysqli_query($conn,$query) or die(mysqli_error($conn));
$query1="INSERT INTO `quera`.`user_login` (`User_name`, `Password`) VALUES ('$mail','$pass');";
$ac=mysqli_query($conn,$query1) or die(mysqli_error($conn));
echo "<script>alert('Registration successfull!!!')</script>";
echo "<script>alert('UserName=$mail. Password=$pass')</script>";
echo "<script>window.location.href='Index.html';</script>";
}                     
?>

</body>

</html>