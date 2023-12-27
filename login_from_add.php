<?php include("connect/connect.php"); 
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>

    <!-- <script>
        var http = new XMLHttpRequest();
        var url = 'login_from_add_db.php';
        var ad_email = '<#?php echo $_REQUEST['ad_email']; ?>';
        var ad_password = '<#?php echo $_REQUEST['ad_password']; ?>';
        var params = 'ad_email=' +ad_email + '&ad_password=' + ad_password;
    
        http.open('POST', url, true);
    
        //send to header
        http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
          alert(this.responseText);
          if(this.responseText==1){
            
            
            if(<#?php $data['user_type' ]==1 ?>){
                window.location = "index_admin.php";
            }else{
                window.location = "index.php";
            }


            // window.location = "index_admin.php";
            // alert("เข้าสู่ระบบสำเร็จ");
          }
          else{
            alert("อีเมลหรือรหัสผ่านไม่ถูกต้อง");
          };
        }
        };
        http.send(params);
    
    
      </script> -->
</head>
<body>

    
    <div class="wrapper">
        <form action="login_from_add_db.php" method="post">
            <div class="admin">
                <h1>Admin</h1>
                <h3>Login</h3>
            </div>
            <div class="text">
                <p>Sign in to start your session</p>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" name="ad_email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="ad_password">
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="registerpage.php">Register</a> </p>
            </div>
        </form>
    </div>
</body>
</html>