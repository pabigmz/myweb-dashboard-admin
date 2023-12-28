<?php
include("connect/connect.php");

$product_id = $_REQUEST['product_id'];
$product_name = $_REQUEST['product_name'];
$product_cost = $_REQUEST['product_cost'];
$product_price = $_REQUEST['product_price'];
$product_amount = $_REQUEST['product_amount'];
echo $product_image_delete = $_REQUEST['product_image_delete'];

$product_type_id = $_REQUEST['product_type_id'];

$product_image = (isset($_REQUEST['product_image']) ? $_REQUEST['product_image']:'');
$product_image_update = $_FILES['product_image'];

// print_r($_POST);

if($product_image_update != ""){
    // print_r($_POST);
    $path = "image/";
    unlink($path.$product_image_delete);
    date_default_timezone_set('Asia/Bangkok');
    $date1 = date("Ymd_His");
    $randnum = (mt_rand());
    $type = strrchr($_FILES['product_image']['name'],".");
    $newname = $randnum . $date1 . $type;
    $path_copy = $path . $newname;

    move_uploaded_file($_FILES['product_image']['tmp_name'],$path_copy);

    if($newname != ""){
        $sql = "UPDATE product SET product_id = '$product_id', product_type_id = '$product_type_id', product_name = '$product_name', product_cost = '$product_cost',product_price = '$product_price', product_amount = '$product_amount' , product_image = '$newname' WHERE product_id = '$product_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "<script>alert('update success!');
                window.location = 'product.php';
            </script>";
        }
    }else{
        echo "<script>alert('update fail!');
            window.location = 'product.php?mode=edit_product';    
        </script>";
    }
}else{
    echo $product_id;
}

?>