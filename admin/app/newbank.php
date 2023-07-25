<?php

require 'bd.php';
// Получение данных из формы 
$data = $_POST;
// SQL-запрос для добавления новой строки в таблицу banks 
$sql = "INSERT INTO banks (naming, logo, name, main_name, time, bet, amount, int_credit_portfel, int_clear_profit, int_summa_active, int_profit_active, int_summa_capital, int_renta, int_deposit_portfel, profit_active, position, gov_predsed, gov_member, dir_predsed, dir_member, active, credit_portfel, deposit_portfel, profit, fraction_all_active, fraction_all_credit_portfel, fraction_all_deposit_portfel, profit_invalut, filials, data_create, about, contacts, description, sort_ru, sort_kz, sort_uz)   
 VALUES ('{$data["naming"]}', '{$data["logo"]}', '{$data["name"]}', '{$data["main_name"]}', '{$data["time"]}', '{$data["bet"]}', '{$data["amount"]}', IFNULL('{$data["int_credit_portfel"]}', 0), '{$data["int_clear_profit"]}', '{$data["int_summa_active"]}', '{$data["int_profit_active"]}', '{$data["int_summa_capital"]}', '{$data["int_renta"]}', '{$data["int_deposit_portfel"]}', '{$data["profit_active"]}', '{$data["position"]}', '{$data["gov_predsed"]}', '{$data["gov_member"]}', '{$data["dir_predsed"]}', '{$data["dir_member"]}', '{$data["active"]}', '{$data["credit_portfel"]}', '{$data["deposit_portfel"]}', '{$data["profit"]}', '{$data["fraction_all_active"]}', '{$data["fraction_all_credit_portfel"]}', '{$data["fraction_all_deposit_portfel"]}', '{$data["profit_invalut"]}', '{$data["filials"]}', '{$data["data_create"]}', '{$data["about"]}', '{$data["contacts"]}', '{$data["description"]}', '{$data["sort_ru"]}', '{$data["sort_kz"]}', '{$data["sort_uz"]}')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $new_page = fopen("../../banks/{$data["naming"]}.php", "w");

    // Получение данных из файла aboutbank.php 
    $aboutbank_content = file_get_contents('aboutbank.php');
    $id = $last_id;

    $aboutbank_content = preg_replace("/id\s*=\s*\d+;/", "id = $id;", $aboutbank_content);
    foreach ($data as $key => $value) {
        $aboutbank_content = str_replace("{{{$key}}}", $value, $aboutbank_content);
    }

    $aboutbank_content = str_replace("{{id}}", $id, $aboutbank_content);

    fwrite($new_page, $aboutbank_content);
    fclose($new_page);
    echo "Новая строка успешно добавлена в таблицу banks и новая страница создана!";
} else {
    echo "Ошибка при добавлении строки в таблицу banks: " . $conn->error;
}

$conn->close();
?>