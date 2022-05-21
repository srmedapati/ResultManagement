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
      $funm=$_POST['fac_id'];
      $scd=$_POST['scode'];
      $cl=$_POST['cl'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="INSERT INTO `faculty_section`(`username`, `class`, `scode`) VALUES ('$funm','$cl','$scd')";
      $result=mysqli_query($con,$sqli);
      if($result)
      {
          echo '<script>alert("Added subject..!")</script>';
          $_SESSION['log']=1;
          header("refresh:0;url='subjects_register_fac.php'");
      }
      else
      {
          echo '<script>alert("Error Occured..!")</script>';
          echo $result;
          header("refresh:20;url='admin.php'");
      }
}
?>
