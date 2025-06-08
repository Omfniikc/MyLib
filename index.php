<?php
    include "./conn/conn.php";
    $email_error = $_SESSION["errors"]['email'];
    $pass_error = $_SESSION["errors"]['pass'];
    unset($_SESSION["errors"]);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход-Моя библиотека</title>
    <link rel="stylesheet" href="/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Страница авторизации -->
    <div class="auth-container" id="login-page">
        <div class="auth-card">
            <div class="auth-header">
                <h1><i class="fas fa-book-open"></i> Моя библиотека</h1>
                <p>Войдите в свой аккаунт</p>
            </div>
            <form action="./functions/signup_f.php" class="auth-form" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Введите ваш email" <?php if (!empty($email_error)) echo 'class="error"'?>>
                    <span class="error-message"><?=$email_error?></span>
                </div>
                <!--error класс для вывода ошибок-->
                
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="pass" placeholder="Введите ваш пароль" <?php if (!empty($pass_error)) echo 'class="error"'?>>
                    <span class="error-message"><?=$pass_error?></span>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
                <div class="auth-footer">
                    <p>Ещё нет аккаунта? <a href="signup.php" id="register-link">Зарегистрироваться</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>