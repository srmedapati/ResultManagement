<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faculty List </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <h1>Faculty List</h1>
    </header>
      <div>
          <div>
              <table class="table table-dark">
              <thead>
              <tr style="border:2px solid black;">
                  <th> Name </th>
                  <th> Username </th>
                  <th> Password </th>
              </tr>
              </thead>
              <tbody>
                  <?php
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
                  $selectquery="SELECT * FROM `faculty`";
                  $query=mysqli_query($con,$selectquery);
                  while($res=mysqli_fetch_array($query)){
                  ?>
                  <tr style="border:1px solid black">
                      <td><?php echo $res['name']; ?></td>
                      <td><?php echo $res['username']; ?></td>
                      <td><?php echo $res['password']; ?></td>
                      <td><a href="profile_edit.php?id=<?php echo $res['username']; ?>">Edit Profile</a></td>
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
              </table>
          </div>
      </div>
</body>
</html>
