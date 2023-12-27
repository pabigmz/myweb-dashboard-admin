<?php

include("connect/connect.php");
include("function/func.php");

$users_name = $_REQUEST['user_name'];
$users_email = $_REQUEST['user_email'];
$users_password = base64_encode($_REQUEST['user_password']);
$users_password_con = base64_encode($_REQUEST['user_password_con']);

echo $ck_mail = dup_email($users_email,$conn);

if($ck_mail > 0){
    echo "<script>";
    echo "alert('มีการใช้งาน email นี้แล้ว กรุณาใช้ email ใหม่');";
    echo "window.location='index_admin.php?mode=add'";
    echo "</script>";
} elseif($users_password != $users_password_con){
    echo "<script>";
    echo "alert('กรุณากรอก password ให้ตรงกัน');";  
    echo "window.location='index_admin.php?mode=add'";
    echo "</script>";
}   
else{
    if($users_name != "" && $users_email != "" && $users_password !=""){
        $sql = "INSERT INTO  users (user_id,user_name,user_email,user_pass,user_type) values ('','$users_name','$users_email','$users_password',0)";
        $query = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if($query){
            die(header('Location: index_admin.php'));
        }else{
            die(header('Location: index_admin.php?mode=add'));
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