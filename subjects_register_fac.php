<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Subjects List </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <h1 align="center">Subject List</h1>
    </header>
      <div>
          <div>
              <table class="table table-striped">
              <thead class="thead thead-dark">
              <tr style="border:2px solid black;">
                  <th> Faculty ID </th>
                  <th> Subject Code </th>
                  <th> Class </th>
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
                  $selectquery="SELECT * FROM `faculty_section` ORDER BY `class`";
                  $query=mysqli_query($con,$selectquery);
                  while($res=mysqli_fetch_array($query)){
                  ?>
                  <tr style="border:1px solid black">
                      <td><?php echo $res['username']; ?></td>
                      <td><?php echo $res['scode']; ?></td>
                      <td><?php echo $res['class']; ?></td>
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
              </table>
          </div>
      </div>
      <hr>
      <div style="padding:2%;">
      <form action="add_subjects_fac.php" method="post" class="form-container">
        <u><h3>Register Faculty Subject</h3></u>
        <label><b>Subject Code</b></label>
        <input type="text" placeholder="Subject Name" name="scode" required>
        <br>
        <label><b>Class</b></label>
        <input type="text" placeholder="Subject Code" name="cl" required>
        <br>
        <label><b>Faculty ID</b></label>
        <input type="text" placeholder="Faculty ID" name="fac_id" required>
        <br>

        <button type="submit" name="submit" class="btn">Submit</button>
      </form>
    </div>
</body>
</html>
