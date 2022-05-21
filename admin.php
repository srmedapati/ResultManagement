<?php  ?>
<html>
  <head>
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <br>
        <div class="align-items-stretch g-4 py-5">
          <div class="row" onclick="window.open('add_user.html','mywindow');" style="cursor: pointer;">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Add Users</h2>
              </div>
            </div>
          </div>
          <br>
          <div class="row"  onclick="window.open('manage_faculty.php','mywindow');" style="cursor: pointer;">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Manage Faculty</h2>
              </div>
            </div>
          </div>
          <br>
          <div class="row"  onclick="window.open('manage_students.php','mywindow');" style="cursor: pointer;">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Manage Students</h2>
              </div>
            </div>
          </div>
          <br>
          <div class="row"  onclick="window.open('subjects.php','mywindow');" style="cursor: pointer;">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Manage Subjects</h2>
              </div>
            </div>
          </div><br>
          <button type="button" name="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='subjects_register_fac.php'">Class Subjects</button><br><br>
        </div>
  </body>
</html>
