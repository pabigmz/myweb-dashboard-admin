<?php 
include('connect/connect.php');

$product_type_id = $_REQUEST['product_type_id'];
$product_name = $_REQUEST['product_name'];
$product_cost = $_REQUEST['product_cost'];
$product_price = $_REQUEST['product_price'];
$product_amount = $_REQUEST['product_amount'];

$product_image = (isset($_REQUEST['product_image']) ? $_REQUEST['product_image']:'');
$product_image_upload = $_FILES['product_image'];

// print_r($_POST);

// บันทึกรูปลง server

if($product_image_upload <> ''){
    $path = "image/";
    date_default_timezone_set('Asia/Bangkok');
    $date1 = date("Ymd_His");
    $randnum = (mt_rand());

    $type = strrchr($_FILES['product_image']['name'],".");
    $newname = $randnum . $date1 . $type;
    $path_copy = $path . $newname;

    move_uploaded_file($_FILES['product_image']['tmp_name'],$path_copy);
    
    if($newname != ""){
        $sql = "INSERT INTO `product`(`product_id`, `product_type_id`, `product_name`, `product_cost`, `product_price`, `product_amount`, `product_image`) VALUES ('','$product_type_id','$product_name','$product_cost','$product_price','$product_amount','$newname')";
    
    $query = mysqli_query($conn,$sql);

    if(!$query){
        echo "<script>
            alert('add failed');
            window.location='product.php?mode=add_product';
        </script>";
    }else{
        echo "<script>
            alert('add success');
            window.location='product.php';
        </script>";
    }
    }

}
?>