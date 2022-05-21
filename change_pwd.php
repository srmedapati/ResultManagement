<?php
session_start();
if(!isset($_POST['submit']))
{
    echo '<script>alert("Invalid Request")</script>';
    // header("refresh:0;url='login.html'");
}
else
    {
      $id=$_GET['id'];
      $pw=$_POST['new_pwd'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="UPDATE `students` SET `password`='$pw' WHERE `username`='$id'";
      $result=mysqli_query($con,$sqli);
      if($result)
      {
          echo '<script>alert("Details changed..!")</script>';
          header("refresh:0;url='student_home.php?id=$id'");
      }
      else
      {
          echo '<script>alert("Error Occured..!")</script>';
          echo $result;
          header("refresh:20;url='student_home.php'");
      }
}
?>
