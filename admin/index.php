<? session_start();

$error = '';
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autolider";
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
// Проверка, если форма отправлена
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение введенного имени пользователя и пароля из формы
    $user = $_POST["username"];
    $pass = $_POST["password"];
    // Проверка имени пользователя и пароля в базе данных
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        // Вход выполнен успешно, установка флага в сессии
        $_SESSION['admin_logged_in'] = true;
        header("Location: banks.php");
        exit();
    } else {
        // Неверное имя пользователя или пароль
        $error = '<div class="error_login">
        <p>Неверное имя пользователя или пароль</p>
    </div>';
    }
}
// Закрытие соединения с базой данных
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Вход в аккаунт</title>
    <link rel="stylesheet" href="assets/css/style-admin.css">
    <?php include 'head.php';?>
</head>

<body>wwwwwww
    <div class="screen-1">
        
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <? echo $error ?> 
            <div class="email">
                <label for="email">Ваш логин:</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input for="username" placeholder="administrator"  name="username" />
                </div>
            </div>
            <div class="password">
                <label for="password">Ваш пароль</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" placeholder="············" />
                    <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                </div>
            </div>
            <button type="submit" class="login">Войти </button>
            <div class="footer"><span>Забыли пароль?</span></div>
        </form>

    </div>

</body>

</html>