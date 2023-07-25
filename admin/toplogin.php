
<?
// Получаем значение параметра 'sort' из адресной строки
$url = '/admin/banks.php'; // Здесь нужно указать ваш URL
$sort = isset($_GET['sort']) && !empty($_GET['sort']) ? $_GET['sort'] : 'sort_ru';

if (!isset($_GET['sort'])) {
    $sort = 'sort_ru';
}
// Определяем переменную flag в зависимости от значения параметра 'sort'
$flag = '';
if ($sort == 'sort_ru') {
    $flag = '<img class="flag" src="../assets/img/flags/ru.png" alt="Russian Flag">';
} elseif ($sort == 'sort_kz') {
    $flag = '<img class="flag" src="../assets/img/flags/kz.png" alt="US Flag">';
} elseif ($sort == 'sort_uz') {
    $flag = '<img class="flag" src="../assets/img/flags/uz.png" alt="UK Flag">';
}

?>

<div class=" top-block-login-body">
    <div class=" col-md-2 top-hello">
        <p>Добрый день, Арсен</p>
    </div>
    <div class="col-md-4 search">

            <form class="search-form" method="POST" action="app/search.php">
                <input type="text" name="searchInput" placeholder="Введите значение для поиска">
                <button class="search-icon" type="sumbit"><img src="../assets/img/search.png" alt=""></button>
            </form>
    </div>


<script>
$(document).ready(function(){
    $('input[name="searchInput"]').on('input', function(){
        var searchValue = $(this).val();
        $.ajax({
            url: 'app/search.php',
            type: 'POST',
            data: {searchInput: searchValue},
            success: function(response){
                // Обновляем блок с информацией из базы данных
                // Предполагается, что этот блок имеет id="searchResults"
                $('#searchResults').html(response);
            }
        });
    });
});

</script>
    <div class="col-md-2 add-banks">
        <div class=" bank-button-row-two">
            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#newbanks">
                Добавить
            </a>
        </div>
    </div>
    <div class="col-md-1 flex">
        <div class="region">
            <div class="dropdown">
                <!-- Кнопка, открывающая список -->
                <? echo $flag; ?>
                <div class="dropdown-content">
                    <!-- Элементы списка -->
                    <a href="?sort=sort_ru"><img class="flag" src="../assets/img/flags/ru.png" alt="Изображение 2"></a>
                    <a href="?sort=sort_kz"><img class="flag" src="../assets/img/flags/kz.png" alt="Изображение 3"></a>
                    <a href="?sort=sort_uz"><img class="flag" src="../assets/img/flags/uz.png" alt="Изображение 4"></a>
                </div>
            </div>

        </div>
        <div class="btn-mini">
            <a href="/"><img src="../assets/img/ico/close.png" alt=""></a>
        </div>
    </div>
    <div class="col-md-2 top-log-in-body">


        <div class="akka-body">

            <img src="../assets/img/Ellips9.png" alt="">

            <div class="akka-name">
                <p>Арсен Иванов</p>
                <p>Администратор</p>
            </div>
        </div>
    </div>


</div>

<script src="assets/js/main.js"></script>