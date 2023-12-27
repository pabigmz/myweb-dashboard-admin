<?
include("connect/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="register-box">
            <form action="register_form_add_db.php" method="post">
                <h2>Register</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="uername" autocomplete="off" name="users_name" id="users__name" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" autocomplete="off" name="users_email" id="users_email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password"  name="users_password" id="users_password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="users_password_con" id="users_password_con" required>
                    <label for="password">Password Confirm</label>
                </div>
                <button type="submit">Register</button>
                <div class="register-link">
                    <p>I aleady have a <a href="login_form_add.php">membership</a></p>
                </div>
            </form>
        </div>
    </section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>