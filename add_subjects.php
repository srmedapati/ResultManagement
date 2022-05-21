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
      $snm=$_POST['sname'];
      $scd=$_POST['scode'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="INSERT INTO `subjects`(`subjectname`, `subjectcode`) VALUES ('$snm','$scd')";
      $result=mysqli_query($con,$sqli);
      if($result)
      {
          echo '<script>alert("Added subject..!")</script>';
          $_SESSION['log']=1;
          header("refresh:0;url='subjects.php'");
      }
      else
      {
          echo '<script>alert("Error Occured..!")</script>';
          echo $result;
          header("refresh:20;url='admin.php'");
      }
}
?>
