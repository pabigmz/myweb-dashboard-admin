<?php
include("connect/connect.php");
include("function/func.php");


if(isset($_REQUEST['edit_id'])){
    echo $_REQUEST['edit_id'];
    $id = $_REQUEST['edit_id'];
    $sql = 'SELECT * FROM users WHERE user_id = "$id"';
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    

    
}else{
    header('index_admin.php');
}
    $users_id = $row['user_id'];
    $users_name = $row['user_name'];
    $users_email = $row['user_email'];
    $users_password = $row['user_password'];

    $ck_id = edit_id($users_id,$conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
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
                <input type="id"  name="ad_id">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="name"  name="ad_name" value="<?php echo $ck_id; ?>"></input>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email"  name="ad_email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="ad_password">
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