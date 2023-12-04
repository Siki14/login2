<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="loginpage.css">
    <title>Login</title>
</head>
<body>
   
    <div  class  = "wrapper">
    <form action="" method="post">
        <h2>Login</h2>
        <div class="input-box">
                <input id="fn" type="text" name="fname" placeholder="Enter your name"><i class='bx bxs-user' ></i>
        </div>
        <div class="input-box">
                <input id="pas" type="password" name="upassword" placeholder="Enter you password"><i class='bx bxs-lock-alt'></i>
        </div> 
                <input type="submit" value="Log In" name="submit" >
    </form>
    </div>
</body>
</html>
<?php
    $ser = mysqli_connect("localhost","root","","login");
    $query = "SELECT * FROM info";
    $show= mysqli_query($ser,$query);
    if(isset($_POST['submit']))
    {
        $Name= $_POST['fname'];
        $password= $_POST['upassword']; 
        $query= "INSERT INTO `info`(`fname`, `upassword`) VALUES ('$Name','$password')";
        mysqli_query($ser,$query);
    }   
        mysqli_close($ser);
?>