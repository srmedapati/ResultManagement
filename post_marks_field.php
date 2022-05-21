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
if(isset($_POST['submit_marks']))
{
    // header("refresh:0;url='login.html'");
    $subcode=$_POST['subjectcode'];
    $usr=$_POST['usr'];
    $cl=$_POST['cl'];
    $marks=$_POST['marks'];
    $selectquery="INSERT INTO `student_marks`(`username`, `subjectcode`, `class`, `marks`) VALUES ('$usr','$subcode','$cl','$marks')";
    $query=mysqli_query($con,$selectquery);
}
else
{
  $subcode="";
  $cl="";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Marks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  </head>
  <body>
    <button type="button" name="button" onclick="window.location.href='view_marks.php'">Back to Marks</button>
    <div class="col-md-7 col-lg-5 col-xl-9 offset-xl-1" style="background-color:white; padding:5%; border-radius:10%;">
    <form action="post_marks_field.php" method="POST">
      <h4 class="display-10 fw-bold" align="center">Post Marks</h4>
      <div class="form-outline mb-4 form-group">
        <input type="text" name="subjectcode" class="form-control form-control-lg" value="<?php echo $subcode; ?>" />
        <label class="form-label" for="form1Example13">Subject Code</label>
      </div>
      <div class="form-outline mb-4 form-group">
        <input type="text" name="usr" class="form-control form-control-lg" />
        <label class="form-label" for="form1Example13">Student ID</label>
      </div>
      <div class="form-outline mb-4 form-group">
        <input type="text" name="cl" class="form-control form-control-lg" value="<?php echo $cl; ?>" />
        <label class="form-label" for="form1Example13">Class</label>
      </div>
      <div class="form-outline mb-4 form-group">
        <input type="text" name="marks" class="form-control form-control-lg"/>
        <label class="form-label" for="form1Example13">Marks</label>
      </div>
      <button name="submit_marks" type="submit" class="btn btn-primary btn-lg btn-block">Add Marks</button><br><br>
    </form>
  </div>
  </body>
</html>
