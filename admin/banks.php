<!DOCTYPE html>
<html lang="ru">

<?
if (!isset($_GET['sort'])) {
    header("Location: banks.php?sort=sort_ru");
    exit;
}
?>

<body class="body-admin"></body>
<?php

require 'app/check_admin.php';
require 'app/update.php';
require 'app/bd.php';
require '../scripts.php';
require 'check_admin.php';
require 'app/head.php';
?>


<?php include 'leftblock.php'; ?>

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
<div class="col-sm-10 adminbanks">
    <div class="flex-admin">
        <div class="col-md-12">
            <div class="block-admin">

                <div class="block-adm">

                    <div class="body-tabble parent-container">

                        <div class="col-12 tabble-lider">
                            <div class="col-md-1">
                                <p class=" block-tabble">№</p>
                            </div>
                            <div class="col-md-1">
                                <p class=" none2 block-tabble">Логотип</p>
                            </div>
                            <div class="col-md-2">
                                <p class="  block-tabble">Наименование</p>
                            </div>
                            <div class="col-md-2">
                                <p class="  block-tabble">Срок</p>
                            </div>
                            <div class="col-md-2">
                                <p class="  block-tabble">Ставка</p>
                            </div>
                            <div class="col-md-2">
                                <p class="  block-tabble">Сумма</p>
                            </div>
                            <div class="col-md-2">
                                <p class="  block-tabble">Управление</p>
                            </div>
                            <p class=" block-tabble"></p>
                        </div>
                        <div id="searchResults"></div>
                        <?php

                        $sort = isset($_GET['sort'])  && !empty($_GET['sort']) ? $_GET['sort'] : 'sort_ru';

                        if (!isset($_GET['sort'])) {
                            $sort = 'sort_ru';
                        }

                        require 'app/bd.php';
                        $sql = "SELECT * FROM banks ORDER BY $sort";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                echo '                <div class="col-12 tabble-block" data-id="' . $row['ID'] . '">';
                                echo '<div class="col-md-1"><p class=" block-tabble">' . $row["$sort"] . '</p></div>';
                                echo '<img class="none2" src="' . $row["logo"] . '" alt="">';
                                echo '<div class="col-md-2"><p class="block-tabble">' . $row["name"] . '</p></div>';
                                echo '<div class="col-md-2"><p class="block-tabble">' . $row["time"] . '</p></div>';
                                echo '<div class="col-md-2"><p class="block-tabble">' . $row["bet"] . '%</p></div>';
                                echo '<div class="col-md-2"><p class="block-tabble">' . $row["amount"] . '₽</p></div>';
                                echo '
                                <div class="btn-mini">
                                    <a href="../banks/' . $row['naming'] . '.php"><img src="../assets/img/ico/eye.png" alt=""></a>
                                </div>
                                <div class="btn-mini">
                                    <a type="button" class="" data-id="' . $row["ID"] . '" data-logo="' . $row["logo"] . '" data-name="' . $row["name"] . '" data-main_name="' . $row["main_name"] . '" data-time="' . $row["time"] . '" data-bet="' . $row["bet"] . '" data-amount="' . $row["amount"] . '" data-description="' . $row["description"] . '" data-int_credit_portfel="' . $row["int_credit_portfel"] . '" data-int_clear_profit="' . $row["int_clear_profit"] . '" data-int_summa_active="' . $row["int_summa_active"] . '" data-int_profit_active="' . $row["int_profit_active"] . '" data-int_summa_capital="' . $row["int_summa_capital"] . '" data-int_renta="' . $row["int_renta"] . '" data-int_deposit_portfel="' . $row["int_deposit_portfel"] . '" data-profit_active="' . $row["profit_active"] . '" data-position="' . $row["position"] . '" data-gov_predsed="' . $row["gov_predsed"] . '" data-gov_member="' . $row["gov_member"] . '" data-dir_predsed="' . $row["dir_predsed"] . '" data-dir_member="' . $row["dir_member"] . '" data-active="' . $row["active"] . '" data-credit_portfel="' . $row["credit_portfel"] . '" data-deposit_portfel="' . $row["deposit_portfel"] . '" data-profit="' . $row["profit"] . '" data-fraction_all_active="' . $row["fraction_all_active"] . '" data-fraction_all_credit_portfel="' . $row["fraction_all_credit_portfel"] . '" data-fraction_all_deposit_portfel="' . $row["fraction_all_deposit_portfel"] . '" data-profit_invalut="' . $row["profit_invalut"] . '" data-filials="' . $row["filials"] . '" data-data_create="' . $row["data_create"] . '" data-about="' . $row["about"] . '" data-contacts="' . $row["contacts"] . '" data-naming="' . $row["naming"] . '" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <img src="../assets/img/ico/pen.png" alt="">
                                    </a>
                                </div>
                                
                                <div class="btn-mini">
                                <a href="#" onclick="deleteRecord(' . $row['ID'] . ', this)">
                                    <img src="../assets/img/ico/close.png" alt="">
                                </a>
                            </div>
                                                            ';
                                echo '</div>';
                            }
                        } else {
                            echo "No data found.";
                        }
                        ?>
                        <div class="alarm">
                            <div id="message">

                            </div>
                        </div>

                    </div>

                    <? require "modal-dialog.php" ?>
                    <? require "assets/js/main.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>