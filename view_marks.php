<?php
if(!isset($_POST['submit']))
{
  $cl="";
}
else{
  $cl=$_POST['cl'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Marks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  </head>
  <body>
    <br>
    <form action="view_marks.php" method="post" class="form-container">
      <label><b>Faculty ID</b></label>
      <input type="text" placeholder="Faculty ID" name="fid" required>
      <label><b>Subject Code</b></label>
      <input type="text" placeholder="Subject Code" name="subjectcode" required>
      <label><b>Class</b></label>
      <input type="text" placeholder="Class" name="cl" required>
      <button type="submit" name="submit" class="btn">Submit</button>
    </form>
    <br>
    <table class="table table-striped">
    <thead class="thead thead-dark">
    <tr style="border:2px solid black;">
        <th> Subject Code </th>
        <th> Class </th>
        <th> Student ID </th>
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
        $selectquery="SELECT * FROM `student_marks` WHERE `class`=$cl";
        $query=mysqli_query($con,$selectquery);
        if($query)
        {
          while($res=mysqli_fetch_array($query)){
          ?>
          <tr style="border:1px solid black">
              <td><?php echo $res['subjectcode']; ?></td>
              <td><?php echo $res['class']; ?></td>
              <td><?php echo $res['username']; ?></td>
              <td><?php echo $res['marks']; ?></td>
          </tr>
        <?php } ?>
    </tbody>
    </table>
    <?php
  }
  ?>
  <button type="button" name="button" class="btn btn-lg" onclick="window.location.href='post_marks_field.php?id=$_POST['fid']'">Post Marks</button><br><br>
  </body>
  </html>
