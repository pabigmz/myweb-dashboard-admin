<?php

include("connect/connect.php");
include("function/func.php");

$users_name = $_REQUEST['users_name'];
$users_email = $_REQUEST['users_email'];
$users_password = base64_encode($_REQUEST['users_password']);
$users_password_con = base64_encode($_REQUEST['users_password_con']);

$ck_mail = dup_email($users_email,$conn);

if($ck_mail > 0){
    echo "<script>";
    echo "alert('มีการใช้งาน email นี้แล้ว กรุณาใช้ email ใหม่');";
    echo "window.location='registerpage.php'";
    echo "</script>";
} elseif($users_password != $users_password_con){
    echo "<script>";
    echo "alert('กรุณากรอก password ให้ตรงกัน');";  
    echo "window.location='registerpage.php'";
    echo "</script>";
}
else{
    if($users_name != "" && $users_email != "" && $users_password !=""){
        $sql = "INSERT INTO  users (user_id,user_name,user_email,user_pass,user_type) values ('','$users_name','$users_email','$users_password',0)";
        $query = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if($query){
            die(header('Location: loginpage.php'));
        }else{
            die(header('Location: registerpage.php'));
        }
    }
    else{
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน')";
        echo "window.location='register_form_add.php'";
        echo "</script>";
    }

}


?>