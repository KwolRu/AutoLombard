
<?
require 'bd.php';
// Получение значения из input
$searchValue = $_POST['searchInput'];
// Проверка, является ли запрос пустым
if(empty($searchValue)) {
   exit();
}
// Поиск и вывод значений из базы данных
$sql = "SELECT * FROM banks WHERE name LIKE '%$searchValue%' OR main_name LIKE '%$searchValue%' OR logo LIKE '%$searchValue%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // Вывод информации в отдельный блок
   echo "<div>";
   while ($row = $result->fetch_assoc()) {
    echo '<div class="col-12 tabble-block search-block" data-id="' . $row['ID'] . '">';
    echo '<div class="col-md-1"><p class="block-tabble">Найдено:</p></div>';
    echo '<img class="none2" src="' . $row["logo"] . '" alt="">';
    echo '<div class="col-md-2"><p class="block-tabble">' . $row["name"] . '</p></div>';
    echo '<div class="col-md-2"><p class="block-tabble">' . $row["time"] . '</p></div>';
    echo '<div class="col-md-2"><p class="block-tabble">' . $row["bet"] . '%</p></div>';
    echo '<div class="col-md-2"><p class="block-tabble">' . $row["amount"] . '₽</p></div>';
    echo '
    <div class="btn-mini">
        <a href="../banks/' . $row['naming'] . '.php"><img src="../assets/img/ico/close.png" alt=""></a>
    </div>
    <div class="btn-mini">
        <a type="button" class="" data-id="' . $row["ID"] . '" data-logo="' . $row["logo"] . '" data-name="' . $row["name"] . '" data-main_name="' . $row["main_name"] . '" data-time="' . $row["time"] . '" data-bet="' . $row["bet"] . '" data-amount="' . $row["amount"] . '" data-description="' . $row["description"] . '" data-int_credit_portfel="' . $row["int_credit_portfel"] . '" data-int_clear_profit="' . $row["int_clear_profit"] . '" data-int_summa_active="' . $row["int_summa_active"] . '" data-int_profit_active="' . $row["int_profit_active"] . '" data-int_summa_capital="' . $row["int_summa_capital"] . '" data-int_renta="' . $row["int_renta"] . '" data-int_deposit_portfel="' . $row["int_deposit_portfel"] . '" data-profit_active="' . $row["profit_active"] . '" data-position="' . $row["position"] . '" data-gov_predsed="' . $row["gov_predsed"] . '" data-gov_member="' . $row["gov_member"] . '" data-dir_predsed="' . $row["dir_predsed"] . '" data-dir_member="' . $row["dir_member"] . '" data-active="' . $row["active"] . '" data-credit_portfel="' . $row["credit_portfel"] . '" data-deposit_portfel="' . $row["deposit_portfel"] . '" data-profit="' . $row["profit"] . '" data-fraction_all_active="' . $row["fraction_all_active"] . '" data-fraction_all_credit_portfel="' . $row["fraction_all_credit_portfel"] . '" data-fraction_all_deposit_portfel="' . $row["fraction_all_deposit_portfel"] . '" data-profit_invalut="' . $row["profit_invalut"] . '" data-filials="' . $row["filials"] . '" data-data_create="' . $row["data_create"] . '" data-about="' . $row["about"] . '" data-contacts="' . $row["contacts"] . '" data-naming="' . $row["naming"] . '" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <img src="../assets/img/ico/close.png" alt="">
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
   echo "</div>";
} else {
   echo "Ничего не найдено.";
}
$conn->close();
?>