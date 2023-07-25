<? 
require 'bd.php'; 
// Получение данных из формы  
$answer = '<p class="answer-tittle"> Спасибо за вашу заявку!  </p> <p class="answer-desc"> Мы благодарим вас за проявленный интерес к нашим услугам/продуктам. Ваша заявка получена, и наш менеджер свяжется с вами в ближайшее время для обсуждения деталей. Если у вас возникнут какие-либо вопросы, не стесняйтесь обращаться к нам. Мы рады помочь вам!</p>'
;
$phone = $_POST['phone'];  
$name = $_POST['name'];  
$date_create = date("d-m-Y H:i"); // Получаем текущую дату и время и преобразуем в нужный формат 
  
// Вставка данных в таблицу  
$sql = "INSERT INTO lids (phone, name, data_create) VALUES ('$phone', '$name', '$date_create')"; // Добавляем дату создания заявки 
  
if (mysqli_query($conn, $sql)) {  
  echo "$answer";
} else {  
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>