<? // Здесь подключение к вашей базе данных
// ...
require 'bd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка данных формы
    $id = $_POST['id'];
    $logo = $_POST['logo'];
    $name = $_POST['name'];
    $main_name = $_POST['main_name'];
    $time = $_POST['time'];
    $bet = $_POST['bet'];
    $amount = $_POST['amount'];
    $int_credit_portfel = $_POST['int_credit_portfel'];
    $int_clear_profit = $_POST['int_clear_profit'];
    $int_summa_active = $_POST['int_summa_active'];
    $int_profit_active = $_POST['int_profit_active'];
    $int_summa_capital = $_POST['int_summa_capital'];
    $int_renta = $_POST['int_renta'];
    $int_deposit_portfel = $_POST['int_deposit_portfel'];
    $profit_active = $_POST['profit_active'];
    $position = $_POST['position'];
    $gov_predsed = $_POST['gov_predsed'];
    $gov_member = $_POST['gov_member'];
    $dir_predsed = $_POST['dir_predsed'];
    $dir_member = $_POST['dir_member'];
    $active = $_POST['active'];
    $credit_portfel = $_POST['credit_portfel'];
    $deposit_portfel = $_POST['deposit_portfel'];
    $profit = $_POST['profit'];
    $fraction_all_active = $_POST['fraction_all_active'];
    $fraction_all_credit_portfel = $_POST['fraction_all_credit_portfel'];
    $fraction_all_deposit_portfel = $_POST['fraction_all_deposit_portfel'];
    $profit_invalut = $_POST['profit_invalut'];
    $filials = $_POST['filials'];
    $data_create = $_POST['data_create'];
    $about = $_POST['about'];
    $contacts = $_POST['contacts'];
    $naming = $_POST['naming'];
    $description = $_POST['description'];

    // Запрос на обновление данных
    $sql = "UPDATE banks SET logo='$logo', name='$name', main_name='$main_name', time='$time', bet='$bet', amount='$amount', int_credit_portfel='$int_credit_portfel', int_clear_profit='$int_clear_profit', int_summa_active='$int_summa_active', int_profit_active='$int_profit_active', int_summa_capital='$int_summa_capital', int_renta='$int_renta', int_deposit_portfel='$int_deposit_portfel', profit_active='$profit_active', position='$position', gov_predsed='$gov_predsed', gov_member='$gov_member', dir_predsed='$dir_predsed', dir_member='$dir_member', active='$active', credit_portfel='$credit_portfel', deposit_portfel='$deposit_portfel', profit='$profit', fraction_all_active='$fraction_all_active', fraction_all_credit_portfel='$fraction_all_credit_portfel', fraction_all_deposit_portfel='$fraction_all_deposit_portfel', profit_invalut='$profit_invalut', filials='$filials', data_create='$data_create', about='$about', contacts='$contacts', naming='$naming', `description`='$description' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно обновлены";
    } else {
        echo "Ошибка при обновлении данных: " . $conn->error;
    }
}
