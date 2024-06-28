<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel=" shortcut icon" href="logo.png" type="image">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="section1-content">
                <center>
                    <h1>LOGIN</h1>
                    <hr>
                </center>
                <form method="POST" action="login.php">
                <h3>UserName</h3>
                <input type="email" class="Username" name="email" id="email" placeholder="Enter your UserName" required/>
                <h3>Password</h3>
                <input type="password" class="password" name="password" id="password" placeholder="Enter your Password" required/>
                <br>
                <input type="submit" class="btn" id="submit" name="submit" value="Login">
                <br>
                </form>
                <input type="checkbox" class="remember" name="remember" id="remember">
                <label for="remember" class="remember"><strong>Remember Me</strong></label>
                <a href="#" class="forgot"><strong>Forgot Password</strong></a>
                
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
                    <h2>Welcome to Login</h2>
                    <h3><strong>Wait, don't have an Account? <br>Don't worry, just get Registerd with us!</strong></h3>
                    <a href="Register.php"><button class="btn">Register</button></a>
                </center>
            </div>

        </div>

    </div>
    <?php
    include "connect.php";
    if (isset($_POST['submit'])) 
    {
         $mail=$_POST['email'];
        $pass=$_POST['password'];
           $qs="SELECT * FROM user_login";
          $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
           while ($row = mysqli_fetch_array($run_query)) 
           {
             $temail= $row['User_name'];
              $tpass= $row['Password'];
              if ($mail==$temail) 
           {	
                      if ($pass==$tpass) {
                          echo "<script>alert('Login successfull!!!')</script>";
                          echo "<script>window.location.href='Student DashBoard/Student.php';</script>";
                      }
                      else{
                          echo "<script>alert('You have entered incorrect password! Try again!')</script>";
                      }
              }
         }
        echo "<script>alert('You have entered incorrect username! Try again!')</script>"; 
     }
    
    ?>
</body>

</html>