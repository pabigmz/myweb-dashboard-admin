<?php
include("connect/connect.php");

$id = $_REQUEST['id'];

$sql = "SELECT * FROM product_type WHERE product_type_id = $id";
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
    <h2>Add Product</h2>
    <p><br></p>
    <form action="product_type_form_edit_db.php" class="was-validated" method="post">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $row['product_type_id']; ?>">
        <div class="form-group">
        <label for="edit_product">Product name:</label>
        <input type="text" class="form-control" id="edit_product"  name="edit_product" value="<?php echo $row['product_type_name']; ?>">
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