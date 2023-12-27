<?php

//ตรวจสอบว่า email นี้ใช้แล้วหรือยัง

function dup_email($users_email,$conn){
    $sql = "SELECT user_email from users where user_email = '$users_email' ";

    $query = mysqli_query($conn,$sql);

    $row = mysqli_num_rows($query);

    return $row;
}

function dup_name_product($product_name,$conn){
    $sql = "SELECT product_type_name FROM product_type WHERE product_type_name = '$product_name' ";

    $query = mysqli_query($conn,$sql);

    $row = mysqli_num_rows($query);

    return  $row;
}




?>