  <?php include_once 'db-connect.php'; ?>

  <?php 

    $query = "SELECT * FROM `user`";
    $result = $mysqli->query($query);
    
    $num_results = $result->num_rows;
    
  ?>
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
                <a class="btn btn-success btn-sm float-right" href="add-user.php">Add New</a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile Number</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    if ($num_results > 0) {
                      while( $row = $result->fetch_assoc() ){
                        extract($row);
                  ?>
                    <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $name; ?></td>
                      <td> <?php echo $email; ?></td>
                      <td><?php echo $mobile; ?></td>
                      <td>
                        <?php
                          $status = ($status == 1) ? 'Active': 'InActive' ; 
                          $bg_color = ($status == 1) ? 'success': 'danger' ; 
                        ?>
                        <span class="badge bg-<?php echo $bg_color; ?>"><?php echo $status; ?></span>
                      </td>
                      <td>
                        <?php 
                          // echo $created_at; // March 10, 2001
                          $date = date_create($create_at);
                          echo date_format($date,"M d, Y"); 
                          ?>
                        <!-- March 10, 2001 -->
                      </td>
                      <td>
                        <a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Del</a>
                      </td>
                    </tr>
                  <?php
                      }
                    } //else {
                      //echo "No records found!@";
                    //}
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile Number</th>
                    <th>Status</th>
                    <th>Created</th>
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