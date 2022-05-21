<?php
$id=$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$dbname="srms";
$con= mysqli_connect($servername,$username,$password,$dbname);
if (!$con)
{
    die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"srms");
// $selectquery="SELECT * FROM `students` WHERE `username`= $id";
$selectquery="SELECT * FROM `students` WHERE `username`='$id'";
$query=mysqli_query($con,$selectquery);
$res=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <h1 align="center">My Profile</h1>
        <hr>
    </header>
      <div>
        <div>
          <table class="table table-striped" align="center"  style="width:60%;border: 2px; border-radius:2%;">
            <tbody class="table table-striped">
              <tr>
                <td>Username</td>
                <td><?php echo $res['username'];?></td>
              </tr>
              <tr>
                <td>Name</td>
                <td><?php echo $res['name']; ?></td>
              </tr>
              <tr>
                <td>Semester</td>
                <td><?php echo $res['semester']; ?></td>
              </tr>
              <tr>
                <td>New Password</td>
                <td>
                <form class="form-container" action="change_pwd.php?id=<?php echo $id; ?>" method="post">
                  <input type="password" name="new_pwd" value="">
              </td>
              </tr>
              <tr><td>
              <center>
                <button type="submit" name="submit">    Make Changes</button>
              </center></td></form>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <button type="button" name="button" class="btn btn-lg" onclick="window.location.href='student_view_marks.php?id=<?php echo $res['username']; ?>'">View Marks</button><br><br>
</body>
</html>
