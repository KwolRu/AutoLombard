<?
$url = 'http://green.io/admin/banks.php'; // Здесь нужно указать ваш URL
$sort = isset($_GET['sort']) && !empty($_GET['sort']) ? $_GET['sort'] : 'sort_ru';
?>
<div class="left-block-body">

    <div class="left-block-logo">
        <p>AvtoLombard</p>
    </div>
    <div class="left-block-button">

        <a href="main.php?sort=<? echo $sort ?>" class="left-button">Главная</a>
        <a href="lids.php?sort=<? echo $sort ?>" class="left-button">Заявки</a>
        <a href="banks.php?sort=<? echo $sort ?>" class="left-button">Банки </a>


    </div>

</div>