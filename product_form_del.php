<?php
include("connect/connect.php");
$path = "image/";


$id = $_REQUEST['id'];
$sql_delete = "SELECT * FROM product WHERE product_id = $id";
$query_delete = mysqli_query($conn,$sql_delete);
$row = mysqli_fetch_array($query_delete);
unlink($path . $row['product_image']);

if($id != ""){
    $sql = "DELETE FROM product WHERE product_id = $id";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<script>alert('delete success');
            window.location = 'product.php';    
        </script>";
    }else{
        echo "<script>alert('delete fail!');
            window.location = 'product.php';    
        </script>";
    }
}else{
    echo "<script>alert('delete fail!');
        window.location = 'product.php';    
    </script>";
}

?>