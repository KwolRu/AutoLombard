<?php 
require 'bd.php'; 
error_reporting(E_ALL); 
$sorting = $_POST['sorting']; 
$id = $_POST['id']; 
$sort = $_POST['sort']; // Получаем параметр sort из запроса

$sql = "UPDATE banks SET $sort = ? WHERE id = ?"; // Используем параметр sort в запросе
$stmt = $conn->prepare($sql); 
$stmt->bind_param("si", $sorting, $id); 
var_dump($sorting, $id); 
if ($stmt->execute()) { 
   echo "Значение $sort успешно обновлено"; 
} else { 
   echo "Ошибка при обновлении значения $sort: " . $conn->error; 
} 
$conn->close(); 
?>