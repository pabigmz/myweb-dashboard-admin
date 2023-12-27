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

</head>
<body>

    
    <div class="wrapper">
        <form action="register_form_add_db.php" method="post">
            <div class="admin">
                <h1>Admin</h1>
                <h3>Register</h3>
            </div>
            <div class="text">
                <p>Register a new membership</p>
            </div>
            <div class="input-box">
                <input type="text"  placeholder="Username" name="users_name" id="users_name">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email"  name="users_email" id="users_email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password"  name="users_password" id="users_word">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password"  name="users_password_con" id="users_password_con">
                <i class='bx bxs-lock-alt' ></i>
            </div>

            

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p><a href="login_form_add.php" class="text-center">I already have a membership</a></p>
            </div>
        </form>
    </div>
</body>
</html>