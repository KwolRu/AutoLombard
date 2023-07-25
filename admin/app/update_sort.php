<? 
require 'bd.php';

 // Проверка на уникальность значений сортировки
$sort_value = $_POST['sort_value']; // Значение сортировки, полученное из формы
 $sql_check = "SELECT * FROM banks WHERE sort_value = '$sort_value'";
$result_check = $conn->query($sql_check);
 if ($result_check->num_rows > 0) {
    echo "Значение сортировки уже существует. Пожалуйста, выберите другое значение.";
} else {
    // Выполнение SQL-запроса для обновления сортировки
    $id = $_POST['id']; // ID записи, полученный из формы
     $sql_update = "UPDATE banks SET sort_value = '$sort_value' WHERE id = '$id'";
    if ($conn->query($sql_update) === TRUE) {
        echo "Сортировка успешно обновлена.";
    } else {
        echo "Ошибка при обновлении сортировки: " . $conn->error;
    }
}
 $conn->close();
?>