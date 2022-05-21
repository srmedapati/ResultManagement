<?php
session_start();
if(!isset($_POST['submit']))
{
    echo '<script>alert("Invalid Request")</script>';
    header("refresh:0;url='login.html'");
}
else
    {
      $un=$_POST['usr'];
      $pw=$_POST['pwd'];
      $role=$_POST['role'];
      include('connection.php');
      mysqli_select_db($con,"srms");
      $sqli="SELECT * FROM `$role` WHERE `username`= '$un' AND `password` = '$pw'";
      $result=mysqli_query($con,$sqli);
      if(mysqli_num_rows($result)==1)
      {
          echo '<script>alert("Logged in...! please wait while redirecting to page")</script>';
          $_SESSION['log']=1;
          if($role=="admin"){
            header("refresh:0;url='admin.php'");
          }elseif ($role=="faculty") {
            header("refresh:0;url='faculty_home.php?id=$un'");
          }elseif ($role=="students") {
            // echo '<script>alert("Welcome <?php echo $result['name']"; )</script>'
            header("refresh:0;url='student_home.php?id=$un'");
          }
      }
      else
      {
          echo '<script>alert("Invalid login credentials")</script>';
          $_SESSION['log']=0;
          header("refresh:0;url='login.html'");
      }
}
// print_r($_POST);
?>
