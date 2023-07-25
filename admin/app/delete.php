<?

require 'bd.php';


// Получение значения параметра id из запроса
$id = $_GET['id'];

// Подготовка SQL-запроса для удаления записи
$sql = "DELETE FROM banks WHERE id = $id";

// Выполнение SQL-запроса
if ($conn->query($sql) === TRUE) {
    echo "Запись успешно удалена";
} else {
    echo "Ошибка удаления записи: " . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>