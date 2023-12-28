<?php include('connect/connect.php'); ?>
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
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div>


  <!-- Main content -->
    <section class="content">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Product Categoriesr</h3>
                </div>
                <div class="card-body">

                    <?php   
                    $x = 0;
                    $sql = "select * from product 
                    INNER JOIN product_type ON 
                    product.product_type_id = product_type.product_type_id; ";
                    $query = mysqli_query($conn,$sql); ?>
                        <a href="product.php?mode=add_product" class="btn btn-primary" role="button">เพิ่มสินค้า</a> 
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ลำกับ</th>
                                    <th>รหัสสินค้า</th>
                                    <th>ประเภทสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคาทุน</th>
                                    <th>ราคาขาย</th>
                                    <th>คงเหลือ</th>
                                    <th>รูปภาพ</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>

                                </tr>
                            </thead>
                        <?php
                            while($row = mysqli_fetch_assoc($query)){
                            $x = $x + 1;
                        
                    echo "  <tbody>";
                    echo "      <tr>";
                    echo "          <td>" .$x. "</td>";
                    echo "          <td>".$row['product_id']."</td>";
                    echo "          <td>".$row['product_type_name']."</td>";
                    echo "          <td>".$row['product_name']."</td>";
                    echo "          <td>".$row['product_cost']."</td>";
                    echo "          <td>".$row['product_price']."</td>";
                    echo "          <td>".$row['product_amount']."</td>";
                    // echo "          <td>".$row['product_image']."</td>";
                    echo "          <td><img src='image/".$row['product_image']."' width='50px' height='50px'></td>";
                    echo "          <td>"; 
                    echo '              <a href="product.php?mode=edit_product&id='.$row['product_id'].'" class="btn btn-warning" role="button">แก้ไข</a>';?>
                                    </td>
                                    <td>
                                    <?php
                                        echo  "<a href='product_form_del.php?id=$row[product_id]' class='btn btn-danger' role='button' onclick=\"return confirm('คุณต้องการลบใช่หรือไม่')\">ลบ</a>";?>
                                    </td>
                                </tr><?php } ?>
                            </tbody>
                        </table>
                </div>
        </div>
    </section>
</div>
</body>
</html>
