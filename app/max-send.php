<?
// Получение данных из GET-запроса
$type = $_GET['type'];
$time = $_GET['time'];
$bet = $_GET['bet'];
$sum = $_GET['sum'];

// Подключение к базе данных
$mysqli = new mysqli('your_host', 'your_user', 'your_password', 'your_database');

// Проверка подключения
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

// Подготовка и выполнение запроса
$stmt = $mysqli->prepare("INSERT INTO lids (type, time, bet, sum) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siii", $type, $time, $bet, $sum);
$stmt->execute();

if ($stmt->error) {
    // Если есть ошибка, выводим ее
    echo "Ошибка: " . $stmt->error;
} else {
    // Если все в порядке, выводим успешное сообщение
    echo "Данные успешно сохранены";
}

$stmt->close();
$mysqli->close();
?>