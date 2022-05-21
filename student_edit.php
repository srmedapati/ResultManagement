<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile Display </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Student Profile</h1>
    </header>
<hr>
    <h2><center>Details</center></h2><br>
        <div class="center-div">
            <div class="table-responsive">
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
                    $selectquery="SELECT * FROM `students` WHERE `username`='$_GET[id]'";
                    $query=mysqli_query($con,$selectquery);
                    $res=mysqli_fetch_array($query);
                    ?>
                    <section class="h-100 bg-dark">
                      <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col">
                            <div class="card card-registration my-10">
                              <div class="row g-0">
                                <div class="col-xl-10">
                                  <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Edit form</h3>
                                    <form action="edit_stu.php" method="POST">
                                    <div class="row">
                                      <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                          <input type="text" name="name" class="form-control form-control-lg" value=<?php echo $res['name']; ?> />
                                          <label class="form-label" for="form3Example1n">Name</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                      <input type="text" name="usr" class="form-control form-control-lg" value="<?php echo $res['username'] ?>"/>
                                      <label class="form-label" for="form3Example97">UserID</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                      <input type="password" name="pwd" class="form-control form-control-lg" value="<?php echo $res['password'] ?>"/>
                                      <label class="form-label" for="form3Example97">Password</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                      <input type="text" name="sem" class="form-control form-control-lg" placeholder="<?php $res['semester'] ?>"/>
                                      <label class="form-label" for="form3Example97">Semester</label>
                                    </div>
                                    <div class="d-flex justify-content-end pt-3">
                                      <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </section>
                <?php
                    ?>
                </div>
              </section>
            </section>
          </div>
        </div>
</body>
</html>
