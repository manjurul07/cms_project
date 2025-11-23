  <?php include_once 'db-connect.php'; ?>
  <!-- Navber link -->

  <?php 

    if (isset($_POST['add-user'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      $query = "INSERT INTO `user` (`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email','$mobile','$password');";

      if ($mysqli->query($query)) {
        $check_msg = true;
      } 
      else {
        echo "Error, Try again!";
      }

    }

   ?>
  <?php include_once 'header.php'; ?>

  <!-- sidebar link -->
  <?php include_once 'sidebar.php'; ?>

  <!-- main content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add New User</h3>
                <a class="btn btn-success btn-sm float-right" href="user-list.php">User List</a>
              </div>
              <div class="card-body">

                <!-- forms -->

                <div class="col-md-8 m-auto card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="POST">
                <div class="card-body">
                  <?php
                   if (isset($check_msg)) {
                  ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-success"></i> Alert!</h5>
                    Data saved successfully!
                  </div>
                  <?php
                   }

                  ?>
                  <div class="form-group row">
                    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMobileNo3" class="col-sm-2 col-form-label">Mobile No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputMobileNo3" placeholder="Mobile No" name="mobile" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right" name="add-user">Add</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
  </div>

  <!-- footer link -->
  <?php include_once 'footer.php'; ?>