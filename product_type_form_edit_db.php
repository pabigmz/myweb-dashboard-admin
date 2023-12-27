<?php
include("connect/connect.php");

$data = $_REQUEST['edit_product'];
$id = $_REQUEST['product_id'];

if(isset($_REQUEST['edit_product'])){
    $sql = "UPDATE product_type SET product_type_name = '$data' WHERE product_type_id = '$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: index_admin.php?mode=product");
    }else{
        header("Location: index_admin.php?mode=edit");
    }
}else{
    header("Location: index_admin.php?mode=product");
}

?>