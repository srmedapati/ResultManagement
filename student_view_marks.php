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
        <h1 align="center">Marks Sheet</h1>
    </header>
      <div>
          <div>
              <table class="table table-striped">
              <thead class="thead thead-dark">
              <tr style="border:2px solid black;">
                  <th> Subject Code </th>
                  <th> Class </th>
                  <th> Marks </th>
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
                  $id=$_GET['id'];
                  $cl_query="SELECT `semester` FROM `students` WHERE `username`='$id'";
                  $cl_q=$query=mysqli_query($con,$cl_query);
                  $cl_val=mysqli_fetch_array($cl_q)['semester'];
                  // echo $cl_q;
                  $selectquery="SELECT * FROM `student_marks` WHERE `username`='$id' AND `class`='$cl_val'";
                  $query=mysqli_query($con,$selectquery);
                  if($query){
                    while($res=mysqli_fetch_array($query)){
                    ?>
                    <tr style="border:1px solid black">
                        <td><?php echo $res['subjectcode']; ?></td>
                        <td><?php echo $res['class']; ?></td>
                        <td><?php echo $res['marks']; ?></td>
                    </tr>
                  <?php
                }
                  }
                  ?>
              </tbody>
              </table>
          </div>
      </div>
    </body>
</html>
