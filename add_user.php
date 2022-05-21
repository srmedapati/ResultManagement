<?php
// print_r($_POST);
session_start();
if(!isset($_POST['submit']))
{
    echo '<script>alert("Invalid Request")</script>';
    // header("refresh:0;url='login.html'");
}
else
    {
      $nm=$_POST['fname'];
      $un=$_POST['usr'];
      $pw=$_POST['pwd'];
      $role=$_POST['inlineRadioOptions'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="INSERT INTO `$role` (`username`, `name`, `password`) VALUES ('$un', '$nm', '$pw')";
      $result=mysqli_query($con,$sqli);
      if($result)
      {
          echo '<script>alert("User created succesfully..!")</script>';
          $_SESSION['log']=1;
          header("refresh:0;url='add_user.html'");
      }
      else
      {
          echo '<script>alert("Error Occured..!")</script>';
          echo $result;
          header("refresh:20;url='add_user.html'");
      }
}
?>
