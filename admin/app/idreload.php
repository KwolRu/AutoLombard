<?
  require 'bd.php';
// Функция для выполнения SQL-запроса
function swapIds($conn) {
    // Запрос на обновление значений ID
    $sql = "UPDATE banks AS b1
            JOIN banks AS b2 ON b1.ID <> b2.ID
            SET b1.ID = b2.ID, b2.ID = b1.ID";
    // Выполнение запроса
    if ($conn->query($sql) === TRUE) {
        echo "Значения ID успешно переставлены местами.";
    } else {
        echo "Ошибка при выполнении запроса: " . $conn->error;
    }
}

// Проверка, была ли отправлена форма
if (isset($_POST['submit'])) {
    // Вызов функции для выполнения SQL-запроса
    swapIds($conn);
}

// Закрытие соединения с базой данных
$conn->close();
?>