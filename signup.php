<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация-Моя библиотека</title>
    <link rel="stylesheet" href="/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Страница регистрации -->
    <div class="auth-container" id="register-page">
        <div class="auth-card">
            <div class="auth-header">
                <h1><i class="fas fa-book-open"></i> Регистрация</h1>
                <p>Создайте новый аккаунт</p>
            </div>
            <form action="php_reg.php" class="auth-form" method="post">
                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input type="email" id="reg-email" name="reg-email" placeholder="Введите ваш email">
                    <span class="error-message"></span>
                </div>
                <div class="form-group">
                    <label for="reg-password">Пароль</label>
                    <input type="password" id="reg-password" name="reg-password" placeholder="Введите пароль (минимум 5 символов)">
                    <span class="error-message"></span>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                <div class="auth-footer">
                    <p>Уже есть аккаунт? <a href="index.php" id="login-link">Войти</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>