<!-- ce vkljucim backend/baza se stran nena prikaze -->
<?php include '../../backend/baza.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>TaskNest</title>
</head>

<body onload="shrani1()">
    <header>
        <p>ABOUT US</p>
    </header>

    <div class="container">
        <p id="naslov" class="title">TaskNest</p>
    </div>
    <p id="moto" class="moto_prescroll">The only way out is through.</p>
    <hr class="under_moto">

    <div class="login-reg">

        <div class="login-selected" id="login">
            <form method="POST" class="form_login" id="form_login">
                <p class="naslov_login" id="naslov_login">LOG IN</p>
                <label class="label_login" id="label_username">Username:</label>
                <input type="text" class="input_login" id="username"></input>

                <label class="label_login" id="label_password">Password:</label>
                <input type="password" class="input_login" id="password"></input>

                <button type="submit" class="login_button" id="login_submit">LOG IN</button>
                
            </form>
            <button class="login-button-unselected" id="login-button-unselected" onclick="shrani1()">LOG IN</button>
        </div>
        </form>

        <div class="register-unselected" id="register">
            <form method="POST" class="form_register" id="form_register">
                <p class="naslov_login" id="naslov_register">REGISTER</p>
                <label class="label_login" id="label_name_r">Name:</label>
                <input type="text" class="input_register" id="name"></input>

                <label class="label_login" id="label_surname_r">Surname:</label>
                <input type="password" class="input_register" id="surname"></input>

                <label class="label_login" id="label_email_r">Email:</label>
                <input type="email" class="input_register" id="email"></input>

                <label class="label_login" id="label_username_r">Username:</label>
                <input type="text" class="input_register" id="username_register"></input>

                <label class="label_login" id="label_password_r">Password:</label>
                <input type="password" class="input_register" id="passwordregister"></input>

                <button type="submit" class="register_button" id="register_submit">REGISTER</button>
                
            </form>
            <button class="register-button-unselected" id="register-button-unselected" onclick="shrani2()">REGISTER</button>
        </div>

    </div>
    <footer>
        <div class="container_footer">
            <hr class="footer_hr">
            <p class="footer_text1">TASK NEST</p>
            <hr class="footer_hr">
        </div>
        <div class="footer_text">&copy; 2024 TaskNest. All rights reserved.</div>
        <div class="footer_text">- Gal Badrov -</div>
    </footer>
    <script src="../JS/index.js"></script>
</body>

</html>