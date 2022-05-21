<?php
  // session_start();
  // if(!isset($_POST['submit']))
  // {
  //     echo '<script>alert("Invalid Request")</script>';
  //     header("refresh:0;url='admin_login.html'");
  // }
  // else
  //     {
  //       include('connection.php');
  //       mysqli_select_db($con,"SRMS");
  //       $sqli="SELECT * FROM `admin` WHERE `username`= $_POST['Username'] AND `password` = $_POST['Password']";
  //       $result=mysqli_query($con,$sqli);
  //       if(mysqli_num_rows($result)==1)
  //       {
  //           echo '<script>alert("Logged in...! please wait while redirecting to page")</script>';
  //           $_SESSION['log']=1;
  //           header("refresh:0;url='users.php'");
  //       }
  //       else
  //       {
  //           echo '<script>alert("Invalid login credentials")</script>';
  //           $_SESSION['log']=0;
  //           header("refresh:0;url='admin_login.html'");
  //       }
  // }
  echo "Hello";
  print_r($_POST);
  echo $_POST['Username'];
  echo $_POST['Password'];
?>
