<?php include("connect/connect.php");

if(isset($_REQUEST['delete_id'])){
  echo $_REQUEST['delete_id'];
  $id = $_REQUEST['delete_id'];
  $query = "DELETE FROM users WHERE user_id = '$id'";
  $result = mysqli_query($conn,$query);

  if($result){
      echo "
      <script>
          alert('deleted successfully');
          window.location = 'index_admin.php';
      </script>
      ";
  }
  else{
      echo '<script> alert("Data Not Deleted")</script>';

  }
}
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
          <h1 class="m-0"></h1>
        </div>
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
    <div class="container">
    <h2 >Add User</h2>
    <form action="admin_form_add_db.php" class="was-validated" method="post">
        <div class="form-group">
        <label for="user_name">Username:</label>
        <input type="text" class="form-control" id="user_name" placeholder="Enter Name" name="user_name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
        <label for="user_email">Email:</label>
        <input type="email" class="form-control" id="user_email" placeholder="Enter Email" name="user_email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
        <label for="user_password">Password:</label>
        <input type="password" class="form-control" id="user_password" placeholder="Enter Password" name="user_password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
        <label for="user_password_con">Password Confirm:</label>
        <input type="password" class="form-control" id="user_password_con" placeholder="Enter Password Confirm" name="user_password_con" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="index_admin.php?mode=product" class="btn btn-danger">CANCEL</a>

    </form>
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
