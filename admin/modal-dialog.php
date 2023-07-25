<div>
    <script>
        $(document).ready(function() {
            $('#exampleModal2').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataAttributes = ['id', 'logo', 'name', 'main_name', 'time', 'bet', 'amount', 'description', 'int_credit_portfel', 'int_clear_profit', 'int_summa_active', 'int_profit_active', 'int_summa_capital', 'int_renta', 'int_deposit_portfel', 'profit_active', 'position', 'gov_predsed', 'gov_member', 'dir_predsed', 'dir_member', 'active', 'credit_portfel', 'deposit_portfel', 'profit', 'fraction_all_active', 'fraction_all_credit_portfel', 'fraction_all_deposit_portfel', 'profit_invalut', 'filials', 'data_create', 'about', 'contacts', 'naming'];
                var modal = $(this)
                dataAttributes.forEach(function(attribute) {
                    modal.find('#' + attribute).val(button.data(attribute))
                });
            })
        });
    </script>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-two-w">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактировать</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                            require 'app/bd.php';

                            if (isset($_POST['submit'])) {
                                $fields = ['id', 'logo', 'name', 'main_name', 'time', 'bet', 'amount', 'int_credit_portfel', 'int_clear_profit', 'int_summa_active', 'int_profit_active', 'int_summa_capital', 'int_renta', 'int_deposit_portfel', 'profit_active', 'position', 'gov_predsed', 'gov_member', 'dir_predsed', 'dir_member', 'active', 'credit_portfel', 'deposit_portfel', 'profit', 'fraction_all_active', 'fraction_all_credit_portfel', 'fraction_all_deposit_portfel', 'profit_invalut', 'filials', 'data_create', 'about', 'contacts', 'naming', 'description'];

                                $sql = "UPDATE banks SET ";

                                foreach ($fields as $field) {
                                    if (isset($_POST[$field])) { // Проверяем, присутствует ли поле в массиве $_POST
                                        $sql .= $conn->real_escape_string($field) . " = '" . $conn->real_escape_string($_POST[$field]) . "', ";
                                    }
                                }

                                $sql = rtrim($sql, ', ');
                                $sql .= " WHERE ID = " . $conn->real_escape_string($_POST['id']);

                                if ($conn->query($sql) === TRUE) {
                                    echo "Данные успешно обновлены";
                                } else {
                                    echo "Ошибка при обновлении данных: " . $conn->error;
                                }
                            }

                            $conn->close();

                            ?>

                            <!-- Форма для редактирования данных -->

                            <form id="editForm" method="POST">
                                <div class="main-block-input">
                                    <div class="block-input">
                                        <p>Логотип</p>
                                        <input type="text" id="logo" name="logo">
                                        <img id="logo-preview" src="" alt="Логотип">
                                        <input type="file" name="image" id="image">
                                    </div>

                                    <div class="block-input">
                                        <p>Адрес банка</p>
                                        <input type="text" id="naming" name="naming" placeholder="banks/newbank">
                                    </div>


                                    <div class="block-input">
                                        <p>Название</p>
                                        <input type="text" id="name" name="name">
                                    </div>



                                    <div class="block-input">
                                        <p>Форма организации</p>
                                        <input type="text" id="main_name" name="main_name">
                                    </div>
                                    <div class="block-input">
                                        <p>Срок кредита</p>
                                        <input type="text" id="time" name="time">
                                    </div>
                                    <div class="block-input">
                                        <p>Ставка</p>
                                        <input type="text" id="bet" name="bet">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма</p>
                                        <input type="text" id="amount" name="amount">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма кредитного портфеля</p>
                                        <input type="text" id="int_credit_portfel" name="int_credit_portfel">
                                    </div>
                                    
                                    <div class="block-input max">
    <p>Описание</p>
    <textarea id="description" name="description" rows="5"><?echo "$description" ?></textarea>
</div>
                                    <div class="block-input">
                                        <p>Сумма чистой прибыли</p>
                                        <input type="text" id="int_clear_profit" name="int_clear_profit">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма активов</p>
                                        <input type="text" id="int_summa_active" name="int_summa_active">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма прибыли от активов</p>
                                        <input type="text" id="int_profit_active" name="int_profit_active">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма капитала</p>
                                        <input type="text" id="int_summa_capital" name="int_summa_capital">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма ренты</p>
                                        <input type="text" id="int_renta" name="int_renta">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма депозитного портфеля</p>
                                        <input type="text" id="int_deposit_portfel" name="int_deposit_portfel">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма активной прибыли</p>
                                        <input type="text" id="profit_active" name="profit_active">
                                    </div>
                                    <div class="block-input">
                                        <p>Должность</p>
                                        <input type="text" id="position" name="position">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма председателя правления</p>
                                        <input type="text" id="gov_predsed" name="gov_predsed">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма члена правления</p>
                                        <input type="text" id="gov_member" name="gov_member">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма председателя директората</p>
                                        <input type="text" id="dir_predsed" name="dir_predsed">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма члена директората</p>
                                        <input type="text" id="dir_member" name="dir_member">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма активов</p>
                                        <input type="text" id="active" name="active">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма кредитного портфеля</p>
                                        <input type="text" id="credit_portfel" name="credit_portfel">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма депозитного портфеля</p>
                                        <input type="text" id="deposit_portfel" name="deposit_portfel">
                                    </div>
                                    <div class="block-input">
                                        <p>Сумма прибыли</p>
                                        <input type="text" id="profit" name="profit">
                                    </div>
                                    <div class="block-input">
                                        <p>Доля всех активов</p>
                                        <input type="text" id="fraction_all_active" name="fraction_all_active">
                                    </div>
                                    <div class="block-input">
                                        <p>Доля всего кредитного портфеля</p>
                                        <input type="text" id="fraction_all_credit_portfel" name="fraction_all_credit_portfel">
                                    </div>
                                    <div class="block-input">
                                        <p>Доля всего депозитного портфеля</p>
                                        <input type="text" id="fraction_all_deposit_portfel" name="fraction_all_deposit_portfel">
                                    </div>
                                    <div class="block-input">
                                        <p>Прибыль в инвалюте</p>
                                        <input type="text" id="profit_invalut" name="profit_invalut">
                                    </div>
                                    <div class="block-input">
                                        <p>Филиалы</p>
                                        <input type="text" id="filials" name="filials">
                                    </div>
                                    <div class="block-input">
                                        <p>Дата создания</p>
                                        <input type="text" id="data_create" name="data_create">
                                    </div>
                                    <div class="block-input">
                                        <p>Описание</p>
                                        <input type="text" id="about" name="about">
                                    </div>
                                    <div class="block-input">
                                        <p>Контакты</p>
                                        <input type="text" id="contacts" name="contacts">
                                    </div>

                                </div>
                                <div class=" bank-button-row-two">
                                    <input type="submit" name="submit" value="Редактировать">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="modal fade" id="newbanks" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-two-w">
                <div class="modal-header">
                    <h5 class="modal-title" >Добавить банк</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                <form method="POST" id="newbank" action="app/newbank.php">
                        <input style="display: none;" id="bankId" name="id">
                        <div class="main-block-input">

                            <div class="block-input">
                                <p>Название банка</p>
                                <input require type="text" id="name" name="name">
                            </div>
                            <div class="block-input">
                                <p>Логотип</p>
                                <input type="text" id="logo" name="logo">
                                <img id="logo-preview" src="" alt="Логотип">
                            </div>
                            <div class="block-input">
                                <p>Адрес банка</p>
                                <input require type="text" id="naming" name="naming" placeholder="banks/newbank">
                            </div>

                            <div class="block-input">
                                <p>Организация</p>
                                <input require type="text" id="main_name" name="main_name" placeholder="ООО/ОАО/АО">
                            </div>
                            <div class="block-input">
                                <p>Работает с </p>
                                <input require type="text" id="time" name="time" placeholder="03.04.1998">
                            </div>
                            <div class="block-input">
                                <p>Процентаная ставка</p>
                                <input require type="text" id="bet" name="bet" placeholder="10">
                            </div>
                            <div class="block-input">
                                <p>Сумма</p>
                                <input require type="text" id="amount" name="amount" placeholder="от 1000">
                            </div>
                            <div class="block-input">
                                <p>Описание</p>
                                <input require type="text" id="description" name="description">
                            </div>
                            <div class="block-input">
                                <p>Сумма кредитного портфеля</p>
                                <input require type="text" id="int_credit_portfel" name="int_credit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Сумма чистой прибыли</p>
                                <input require type="text" id="int_clear_profit" name="int_clear_profit">
                            </div>
                            <div class="block-input">
                                <p>Сумма активов</p>
                                <input require type="text" id="int_summa_active" name="int_summa_active">
                            </div>
                            <div class="block-input">
                                <p>Сумма прибыли от активов</p>
                                <input require type="text" id="int_profit_active" name="int_profit_active">
                            </div>
                            <div class="block-input">
                                <p>Сумма капитала</p>
                                <input require type="text" id="int_summa_capital" name="int_summa_capital">
                            </div>
                            <div class="block-input">
                                <p>Сумма ренты</p>
                                <input require type="text" id="int_renta" name="int_renta">
                            </div>
                            <div class="block-input">
                                <p>Сумма депозитного портфеля</p>
                                <input require type="text" id="int_deposit_portfel" name="int_deposit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Сумма активной прибыли</p>
                                <input require type="text" id="profit_active" name="profit_active">
                            </div>
                            <div class="block-input">
                                <p>Должность</p>
                                <input require type="text" id="position" name="position">
                            </div>
                            <div class="block-input">
                                <p>Сумма председателя правления</p>
                                <input require type="text" id="gov_predsed" name="gov_predsed">
                            </div>
                            <div class="block-input">
                                <p>Сумма члена правления</p>
                                <input require type="text" id="gov_member" name="gov_member">
                            </div>
                            <div class="block-input">
                                <p>Сумма председателя директората</p>
                                <input require type="text" id="dir_predsed" name="dir_predsed">
                            </div>
                            <div class="block-input">
                                <p>Сумма члена директората</p>
                                <input require type="text" id="dir_member" name="dir_member">
                            </div>
                            <div class="block-input">
                                <p>Сумма активов</p>
                                <input require type="text" id="active" name="active">
                            </div>
                            <div class="block-input">
                                <p>Сумма кредитного портфеля</p>
                                <input require type="text" id="credit_portfel" name="credit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Сумма депозитного портфеля</p>
                                <input require type="text" id="deposit_portfel" name="deposit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Сумма прибыли</p>
                                <input require type="text" id="profit" name="profit">
                            </div>
                            <div class="block-input">
                                <p>Доля всех активов</p>
                                <input require type="text" id="fraction_all_active" name="fraction_all_active">
                            </div>
                            <div class="block-input">
                                <p>Доля всего кредитного портфеля</p>
                                <input require type="text" id="fraction_all_credit_portfel" name="fraction_all_credit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Доля всего депозитного портфеля</p>
                                <input require type="text" id="fraction_all_deposit_portfel" name="fraction_all_deposit_portfel">
                            </div>
                            <div class="block-input">
                                <p>Прибыль в инвалюте</p>
                                <input require type="text" id="profit_invalut" name="profit_invalut">
                            </div>
                            <div class="block-input">
                                <p>Филиалы</p>
                                <input require type="text" id="filials" name="filials">
                            </div>
                            <div class="block-input">
                                <p>Дата создания</p>
                                <input require type="text" id="data_create" name="data_create">
                            </div>
                            <div class="block-input">
                                <p>Описание</p>
                                <input require type="text" id="about" name="about">
                            </div>
                            <div class="block-input">
                                <p>Контакты</p>
                                <input require type="text" id="contacts" name="contacts">
                            </div>

                            <div class="block-input">
                                <p>Место в России</p>
                                <input require type="text" id="sort_ru" name="sort_ru">
                            </div>
                            <div class="block-input">
                                <p>Место в Казахстане</p>
                                <input require type="text" id="sort_kz" name="sort_kz">
                            </div>
                            <div class="block-input">
                                <p>Место в Узбекистане</p>
                                <input value="" require type="text" id="sort_uz" name="sort_uz">
                            </div>

                            <input type="submit" name="submit" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>