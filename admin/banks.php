

<!DOCTYPE html>
<html lang="ru">
<!-- include -->
<?php require '../scripts.php'; ?>
<?php require 'check_admin.php'; ?>
<!-- include -->

<?php require '../headadmin.php'; ?>


<? session_start();

// Проверяем, установлена ли переменная сессии "admin_logged_in" и равна ли она true
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Если пользователь не вошел в аккаунт, перенаправляем его на страницу входа
    header("Location: index.php");
    exit();
}
?>



<body class="body-admin">

    <?php include 'toplogin.php'; ?>
    <div class="admin-flex">
        <?php include 'leftblock.php'; ?>
        <div class=" adminbanks">

            <div class="body-tabble">
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
                        <p class="  block-tabble">Сумма</p>
                    </div>
                    <p class=" block-tabble"></p>
                </div>
                <?php
                // Query to fetch all data from the "banks" table
                $sql = "SELECT * FROM banks";
                $result = $conn->query($sql);
                // Check if any rows are returned
                if ($result->num_rows > 0) {
                    // Loop through each row and display the data
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-12 tabble-block">';
                        echo '<div class="col-md-1"><p class=" block-tabble">' . $row["ID"] . '</p></div>';
                        echo '<img class="none2" src="' . $row["logo"] . '" alt="">';
                        echo '<div class="col-md-2"><p class="block-tabble">' . $row["name"] . '</p></div>';
                        echo '<div class="col-md-2"><p class="block-tabble">' . $row["main_name"] . '</p></div>';
                        echo '<div class="col-md-2"><p class="block-tabble">' . $row["bet"] . '%</p></div>';
                        echo '<div class="col-md-2"><p class="block-tabble">' . $row["amount"] . '₽</p></div>';
                        echo '<div class="col-md-2 bank-button-row-two none">
                      <a type="button" class="" data-id="' . $row["ID"] . '" data-logo="' . $row["logo"] . '" data-name="' . $row["name"] . '" data-main_name="' . $row["main_name"] . '" data-time="' . $row["time"] . '" data-bet="' . $row["bet"] . '" data-amount="' . $row["amount"] . '" data-desc="' . $row["desc"] . '" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                         Редактировать
                 </a>
            </div>';
                        echo '</div>';
                    }
                } else {
                    echo "No data found.";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal2').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var logo = button.data('logo')
                var name = button.data('name')
                var main_name = button.data('main_name')
                var time = button.data('time')
                var bet = button.data('bet')
                var amount = button.data('amount')
                var desc = button.data('desc')
                 
                var int_credit_portfel = button.data('int_credit_portfel')
                var int_clear_profit = button.data('int_clear_profit')
                var int_summa_active = button.data('int_summa_active')
                var int_profit_active = button.data('int_profit_active')
                var int_summa_capital = button.data('int_summa_capital')
                var int_renta = button.data('int_renta')
                var int_deposit_portfel = button.data('int_deposit_portfel')
                var profit_active = button.data('profit_active')
                var position = button.data('position')
                var gov_predsed = button.data('gov_predsed')
                var gov_member = button.data('gov_member')
                var dir_predsed = button.data('dir_predsed')
                var dir_member = button.data('dir_member')
                var active = button.data('active')
                var credit_portfel = button.data('credit_portfel')
                var deposit_portfel = button.data('deposit_portfel')
                var profit = button.data('profit')
                var fraction_all_active = button.data('fraction_all_active')
                var fraction_all_credit_portfel = button.data('fraction_all_credit_portfel')
                var fraction_all_deposit_portfel = button.data('fraction_all_deposit_portfel')
                var profit_invalut = button.data('profit_invalut')
                var filials = button.data('filials')
                var data_create = button.data('data_create')
                var about = button.data('about')
                var modal = $(this)
                modal.find('#bankId').val(id)
                modal.find('#int_credit_portfel').val(int_credit_portfel)
                modal.find('#int_clear_profit').val(int_clear_profit)
                modal.find('#int_summa_active').val(int_summa_active)
                modal.find('#int_profit_active').val(int_profit_active)
                modal.find('#int_summa_capital').val(int_summa_capital)
                modal.find('#int_renta').val(int_renta)
                modal.find('#int_deposit_portfel').val(int_deposit_portfel)
                modal.find('#profit_active').val(profit_active)
                modal.find('#position').val(position)
                modal.find('#gov_predsed').val(gov_predsed)
                modal.find('#gov_member').val(gov_member)
                modal.find('#dir_predsed').val(dir_predsed)
                modal.find('#dir_member').val(dir_member)
                modal.find('#active').val(active)
                modal.find('#credit_portfel').val(credit_portfel)
                modal.find('#deposit_portfel').val(deposit_portfel)
                modal.find('#profit').val(profit)
                modal.find('#fraction_all_active').val(fraction_all_active)
                modal.find('#fraction_all_credit_portfel').val(fraction_all_credit_portfel)
                modal.find('#fraction_all_deposit_portfel').val(fraction_all_deposit_portfel)
                modal.find('#profit_invalut').val(profit_invalut)
                modal.find('#filials').val(filials)
                modal.find('#data_create').val(data_create)
                modal.find('#about').val(about)
            })
        });
    </script>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-two-w">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактировать</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?
                            // Подключаемся к базе данных
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Проверяем соединение
                            if ($conn->connect_error) {
                                die("Ошибка подключения: " . $conn->connect_error);
                            }
                            // Проверяем, была ли отправлена форма с данными для редактирования
                            if (isset($_POST['submit'])) {
                                // Получаем значения из полей ввода
                                $id = $_POST['id'];
                                $logo = $_POST['logo'];
                                $name = $_POST['name'];
                                $main_name = $_POST['main_name'];
                                $time = $_POST['time'];
                                $bet = $_POST['bet'];
                                $amount = $_POST['amount'];
                                $desc = $_POST['desc'];
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
                                // Формируем SQL-запрос для обновления данных
                                $sql = "UPDATE banks SET 
                            id = '$id',
                            logo = '$logo',
                            name = '$name',
int_credit_portfel = '$int_credit_portfel',
int_clear_profit = '$int_clear_profit',
int_summa_active = '$int_summa_active',
int_profit_active = '$int_profit_active',
int_summa_capital = '$int_summa_capital',
int_renta = '$int_renta',
int_deposit_portfel = '$int_deposit_portfel',
profit_active = '$profit_active',
position = '$position',
gov_predsed = '$gov_predsed',
gov_member = '$gov_member',
dir_predsed = '$dir_predsed',
dir_member = '$dir_member',
active = '$active',
credit_portfel = '$credit_portfel',
deposit_portfel = '$deposit_portfel',
profit = '$profit',
fraction_all_active = '$fraction_all_active',
fraction_all_credit_portfel = '$fraction_all_credit_portfel',
fraction_all_deposit_portfel = '$fraction_all_deposit_portfel',
profit_invalut = '$profit_invalut',
filials = '$filials',
data_create = '$data_create',
about = '$about',
                            main_name = '$main_name',
                            time = '$time',
                            bet = '$bet',
                            amount = '$amount',
                             `desc`  = '$desc'
                            WHERE ID = $id";
                                // Выполняем запрос
                                if ($conn->query($sql) === TRUE) {
                                    echo "Данные успешно обновлены";
                                } else {
                                    echo "Ошибка при обновлении данных: " . $conn->error;
                                }
                            }
                            // Закрываем соединение с базой данных
                            $conn->close();
                            ?>
                            <!-- Форма для редактирования данных -->
                            <form method="POST" action="">
                                <input type="hidden" id="bankId" name="id">
                                <input type="text" id="logo" name="logo" placeholder="Логотип">
                                <input type="text" id="name" name="name" placeholder="Название">
                                <input type="text" id="main_name" name="main_name" placeholder="Основное название">
                                <input type="text" id="time" name="time" placeholder="Время">
                                <input type="text" id="bet" name="bet" placeholder="Ставка">
                                <input type="text" id="amount" name="amount" placeholder="Сумма">
                                <input type="text" id="desc" name="desc" placeholder="Описание">

                                <input type="text" id="desc" name="desc" placeholder="Описание">
                                <input type="text" id="int_credit_portfel" name="int_credit_portfel" placeholder="int_credit_portfel">
                                <input type="text" id="int_clear_profit" name="int_clear_profit" placeholder="int_clear_profit">
                                <input type="text" id="int_summa_active" name="int_summa_active" placeholder="int_summa_active">
                                <input type="text" id="int_profit_active" name="int_profit_active" placeholder="int_profit_active">
                                <input type="text" id="int_summa_capital" name="int_summa_capital" placeholder="int_summa_capital">
                                <input type="text" id="int_renta" name="int_renta" placeholder="int_renta">
                                <input type="text" id="int_deposit_portfel" name="int_deposit_portfel" placeholder="int_deposit_portfel">
                                <input type="text" id="profit_active" name="profit_active" placeholder="profit_active">
                                <input type="text" id="position" name="position" placeholder="position">
                                <input type="text" id="gov_predsed" name="gov_predsed" placeholder="gov_predsed">
                                <input type="text" id="gov_member" name="gov_member" placeholder="gov_member">
                                <input type="text" id="dir_predsed" name="dir_predsed" placeholder="dir_predsed">
                                <input type="text" id="dir_member" name="dir_member" placeholder="dir_member">
                                <input type="text" id="active" name="active" placeholder="active">
                                <input type="text" id="credit_portfel" name="credit_portfel" placeholder="credit_portfel">
                                <input type="text" id="deposit_portfel" name="deposit_portfel" placeholder="deposit_portfel">
                                <input type="text" id="profit" name="profit" placeholder="profit">
                                <input type="text" id="fraction_all_active" name="fraction_all_active" placeholder="fraction_all_active">
                                <input type="text" id="fraction_all_credit_portfel" name="fraction_all_credit_portfel" placeholder="fraction_all_credit_portfel">
                                <input type="text" id="fraction_all_deposit_portfel" name="fraction_all_deposit_portfel" placeholder="fraction_all_deposit_portfel">
                                <input type="text" id="profit_invalut" name="profit_invalut" placeholder="profit_invalut">
                                <input type="text" id="filials" name="filials" placeholder="filials">
                                <input type="text" id="data_create" name="data_create" placeholder="data_create">
                                <input type="text" id="about" name="about" placeholder="about">
                                <input type="submit" name="submit" value="Редактировать">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>