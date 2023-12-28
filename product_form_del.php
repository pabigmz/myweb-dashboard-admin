<?php
include("connect/connect.php");

$id = $_REQUEST['id'];

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