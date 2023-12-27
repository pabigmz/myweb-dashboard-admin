<?php include("connect/connect.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM users WHERE user_id = '$id'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style_admin_list.css">

</head>
<body>
  

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
 
    <!-- <div class="card"> -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">ADD USER</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                        
                            <!-- your steps here -->
                            
                            <div class="bs-stepper">
                                <div class="bs-stepper-content">
                                    <form action="admin_form_edit_db.php" method="pot">
                                        <input type="hidden" name="users_id" id="users_id" value="<?php echo $row['user_id']; ?>">
                                    <!-- your steps content here -->
                                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group">
                                        <label for="user_name">Username</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter name" value="<?php echo $row['user_name'];?>">
                                    </div>
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter email" value="<?php echo $row['user_email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter Password" value="<?php echo $row['user_pass']; ?>">
                                    </div>
                                    <button class="btn btn-primary">Next</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- </div> -->
</section>


          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->



  <!-- /.content -->
</div>





</body>
</html>
