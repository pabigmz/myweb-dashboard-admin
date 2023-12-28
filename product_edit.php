<?php
include("connect/connect.php");

$id = $_REQUEST['id'];

$sql = "SELECT * FROM `product` WHERE product_id = $id";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);

$product_id = $row['product_id'];
$product_name = $row['product_name'];
$product_cost = $row['product_cost'];
$product_price = $row['product_price'];
$product_amount = $row['product_amount'];
$product_image = $row['product_image'];



?>

<!-- <body>
Content Wrapper. Contains page content -->

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
<div class="card">
      <div class="card-header">
        <h3 class="card-title">แก้ไขสินค้า</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-content">
              <!-- your steps content here -->
              <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <form action="product_form_edit_db.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                        <label for="exampleInputEmail1">หมวดหมู่สินค้า</label>
                        <?php 
                        $sql = "select * from product_type";
                        $query = mysqli_query($conn,$sql);
                        ?>
                        <select required id="product_type_id" name="product_type_id" 
                            class ="from-control">
                        <?php
                        while($row = mysqli_fetch_array($query)){ ?>
                      <option value="<?php echo $row["product_type_id"]; ?>">
                      <?php echo $row["product_type_name"]; ?></option>
                      <?php  } ?>

                        </select>
                  </div>
                  <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>" >
                  <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo $product_name; ?>">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">ราคาทุน</label>
                        <input type="text" name="product_cost" id="product_cost" class="form-control" value="<?php echo $product_cost; ?>">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">ราคาขาย</label>
                        <input type="text" name="product_price" id="product_price" class="form-control" value="<?php echo $product_price; ?>">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">คงเหลือ</label>
                        <input type="text" name="product_amount" id="product_amount" class="form-control" value="<?php echo $product_amount; ?>">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">รูปภาพ (ขนาด 50 x 50)</label>
                        <input type="file" name="product_image" id="product_image" class="form-control">
                        <input type="hidden" name="product_image_delete" id="product_image_delete" value="<?php echo $product_image ?>">
                  </div>





                  <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
              </div>

            </div>
          </div>
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
  

