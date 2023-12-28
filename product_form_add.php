<?php
include("connect/connect.php");
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
<div class="card">
      <div class="card-header">
        <h3 class="card-title">เพิ่มสินค้า</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-content">
              <!-- your steps content here -->
              <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <form action="product_form_add_db.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                        <label for="exampleInputEmail1">หมวดหมู่สินค้า</label>
                        <?php 
                        $sql = "select * from product_type";
                        $query = mysqli_query($conn,$sql);
                        ?>
                        <select required id="product_type_id"name="product_id" 
                            class ="from-control">
                        <?php
                        while($row = mysqli_fetch_array($query)){ ?>
                      <option value="<?php echo $row["product_type_id"]; ?>">
                      <?php echo $row["product_type_name"]; ?></option>
                      <?php  } ?>

                        </select>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label>
                        <input type="text" name="product_name" id="product_name" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">ราคาทุน</label>
                        <input type="text" name="product_cost" id="product_cost" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">ราคาขาย</label>
                        <input type="text" name="product_price" id="product_price" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">คงเหลือ</label>
                        <input type="text" name="product_amount" id="product_amount" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">รูปภาพ (ขนาด 50 x 50)</label>
                        <input type="file" name="product_image" id="product_image" class="form-control">
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