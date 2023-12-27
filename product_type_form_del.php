<?php
include("connect/connect.php");
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM product_type WHERE product_type_id = '$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index_admin.php?mode=product");
    }else{
        echo "<script>alert('Delete Fail!');</script>";
    }
}

?>