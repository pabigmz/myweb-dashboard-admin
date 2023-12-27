<?php

include("connect/connect.php");
include("function/func.php");

$users_id = $_REQUEST['users_id'];
$users_name = $_REQUEST['user_name'];
$users_email = $_REQUEST['user_email'];
$users_password = base64_encode($_REQUEST['user_password']);

echo $ck_mail = dup_email($users_email,$conn);

if($ck_mail > 0){
    echo "<script>";
    echo "alert('มีการใช้งาน email นี้แล้ว กรุณาใช้ email ใหม่');";
    echo "window.location='admin_form_add.php?mode=edit'";
    echo "</script>";
} 
else{
    if($users_name != "" && $users_email != "" && $users_password !=""){
        $sql = "UPDATE users SET user_name = '$users_name', user_email = '$users_email', user_pass = '$users_password' WHERE  user_id = '$users_id'";
        $query = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if($query){
            die(header('Location: index_admin.php'));
        }else{
            die(header('Location: index_admin.php?mode=edit'));
        }
    }
    else{
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน')";
        echo "window.location='index)admin.php?mode=add'";
        echo "</script>";
    }

}


?>