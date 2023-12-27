<?php

include("connect/connect.php");
include("function/func.php");

$product_name = $_REQUEST['add_product'];

// $sql = "INSERT INTO product_type(product_type_id, product_type_name) VALUES ('','$product_name')";

// $query = mysqli_query($conn,$sql);

$ck_name = dup_name_product($product_name,$conn);
// die("debug".$ck_name);

if($ck_name > 0){
    echo "<script>alert('มีสินค้านี้อยู่แล้ว');</script>";
    echo "<script>window.location='index_admin.php?mode=add_product'</script>";
}else{
    $sql = "INSERT INTO product_type(product_type_id, product_type_name) VALUES ('','$product_name')";
    
    $query = mysqli_query($conn,$sql);
    if ($query){
        die(header('Location: index_admin.php?mode=product'));
    }else{
        die(header('Location: index_admin.php?mode=add_product'));
    }
}



?>