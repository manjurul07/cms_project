
  <!-- Navber link -->
  <?php include_once 'header.php'; ?>

  <!-- sidebar link -->
  <?php include_once 'sidebar.php'; ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user list</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">user list</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>manjur08</td>
                    <td>Manjurul Hasan</td>
                    <td>manjurulhasan387@gmail.com</td>
                    <td>+01859483452</td>
                    <td><a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>manjur08</td>
                    <td>Manjurul Hasan</td>
                    <td>manjurulhasan387@gmail.com</td>
                    <td>+01859483452</td>
                    <td><a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i>Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>manjur08</td>
                    <td>Manjurul Hasan</td>
                    <td>manjurulhasan387@gmail.com</td>
                    <td>+01859483452</td>
                    <td><a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i>Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>manjur08</td>
                    <td>Manjurul Hasan</td>
                    <td>manjurulhasan387@gmail.com</td>
                    <td>+01859483452</td>
                    <td><a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i>Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</a></td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
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
    <!-- /.content -->
  </div>

  <!-- footer link -->
  <?php include_once 'footer.php'; ?>