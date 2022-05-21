<?php
print_r($_POST);
session_start();
if(!isset($_POST['submit']))
{
    echo '<script>alert("Invalid Request")</script>';
    // header("refresh:0;url='login.html'");
}
else
    {
      $nm=$_POST['name'];
      $un=$_POST['usr'];
      $pw=$_POST['pwd'];
      $sem=$_POST['sem'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="UPDATE `students` SET `name`='$nm',`password`='$pw',`semester`='$sem' WHERE `username`='$un'";
      $result=mysqli_query($con,$sqli);
      if($result)
      {
          echo '<script>alert("Details changed..!")</script>';
          $_SESSION['log']=1;
          header("refresh:0;url='manage_students.php'");
      }
      else
      {
          echo '<script>alert("Error Occured..!")</script>';
          echo $result;
          header("refresh:20;url='add_user.html'");
      }
}
?>
