<!DOCTYPE html>
<html lang="ru">
<!-- include -->
<?php require '../scripts.php'; ?>
<!-- include -->
<?php require '../headadmin.php'; ?>

<body class="body-admin">





    <div class="container-fluid">
        <div class="row">

            <?php include 'leftblock.php'; ?>

            <div class="col-sm-10 adminlider">
                <?php include 'toplogin.php'; ?>

                <?php include 'search.php'; ?>

                <div class="flex-admin">
                    <div class="col-md-6">
                        <div class="block-admin">
                            <div class="block-adm">
                                <p class="left-zz">Заявки</p>
                                <div class="block-admin-img">
                                    <img src="../assets/img/chart.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-admin">
                            <div class="block-adm">
                                <p class="left-zz">Банк наиболее пользующийся спросом </p>
                                <div class="block-admin-img">
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>

                            </div>
                            <div class="block-adm center-ad">
                                <p class="left-zz">Заявок за всё время:</p>
                                <p class="left-vv">220</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-admin">
                            <div class="block-adm">

                                <p class="left-zz">Рейтинг</p>

                                <div class="block-top-adm">
                                    <div class="number-adm-top">
                                        <p>1</p>
                                    </div>
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>
                                <div class="block-top-adm">
                                    <div class="number-adm-top">
                                        <p>2</p>
                                    </div>
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>
                                <div class="block-top-adm">
                                    <div class="number-adm-top">
                                        <p>3</p>
                                    </div>
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>
                                <div class="block-top-adm">
                                    <div class="number-adm-top">
                                        <p>4</p>
                                    </div>
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>
                                <div class="block-top-adm">
                                    <div class="number-adm-top">
                                        <p>5</p>
                                    </div>
                                    <img src="../assets/img/bank/btb.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=" flex-admin">
                    <div class="col-md-6">
                        <div class="block-admin">
                            <div class="block-adm">----------</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-admin">
                            <div class="block-adm">
                                <div class="setind">
                                    <p class="left-zz">Настройки</p>
                                    <ul class="">
                                        <li class="left-zz"><a href="">Настройки сайта</a></li>
                                        <li class="left-zz"><a href="">Описание</a></li>
                                        <li class="left-zz"><a href="">Конфигурация</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>




            </div>

        </div>
        <div class="row"></div>
    </div>








    <!-- include -->
    <?php require 'modal.php'; ?>
</body>


</html>