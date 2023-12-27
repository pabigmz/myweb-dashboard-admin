<?php session_start();

include("connect/connect.php");

$email = $_REQUEST['ad_email'];
$password = base64_encode($_REQUEST['ad_password']);

$sql = "SELECT * FROM users WHERE user_email='$email' AND user_pass='$password'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

echo $row = mysqli_num_rows($query);
// $_SESSION['user_id'] = $result['user_id'];
// $_SESSION['user_name'] = $result['user_name'];
// $_SESSION['user_type'] = $result['user_type'];

if($row < 1){
    if($row == 0){
        echo '<script>alert("อีเมลล์หรือรหัสผ่านไม่ถูกต้อง")
        window.location="login_form_add.php";</script>'; 
        
    }
}
else{
    // session_write_close();
    if($result['user_type']==1){
        echo '<script>alert("เข้าสู่ระบบสำเร็จ")
        window.location="index_admin.php";</script>'; 
    }else{
        echo "<script>alert('อีเมลล์หรือรหัสผ่านไม่ถูกต้อง')
        window.location='login_form_add.php';</script>";
        
    }
}

?>