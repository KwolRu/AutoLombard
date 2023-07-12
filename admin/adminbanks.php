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

            <div class="col-sm-10 adminbanks">


                <?php include 'toplogin.php'; ?>

                <?php include 'search.php'; ?>

                <div class="body-tabble">

                    <div class="col-12 tabble-lider">
                        <p class=" block-tabble">№</p>
                        <p class="col-md-1 none2 block-tabble">Логотип</p>
                        <p class="col-md-2  block-tabble">Наименование</p>
                        <p class="col-md-2  block-tabble">Срок</p>
                        <p class="col-md-1  block-tabble">Ставка</p>
                        <p class="col-md-2  block-tabble">Сумма</p>
                        <p class=" block-tabble"></p>
                    </div>

                    <div class="col-12 tabble-block">
                        <p class=" block-tabble">1</p>
                        <img class="none2" src="../assets/img/bank/gaz.png" alt="">
                        <p class="col-md-2 block-tabble">ГазпромБанк</p>
                        <p class="col-md-2 block-tabble">от 1 - до 5 лет</p>
                        <p class="col-md-1 block-tabble">7%</p>
                        <p class="col-md-2 block-tabble">30 000₽ - 130 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>


                    <div class="col-12 tabble-block color">
                        <p class=" block-tabble">2</p>
                        <img class="none2" src="../assets/img/bank/btb.png" alt="">
                        <p class="col-md-2 block-tabble">ВТБ</p>
                        <p class="col-md-2 block-tabble">от 4 - до 8 лет</p>
                        <p class="col-md-1 block-tabble">2%</p>
                        <p class="col-md-2 block-tabble">90 000₽ - 260 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>


                    </div>


                    <div class="col-12 tabble-block">
                        <p class="  block-tabble">3</p>
                        <img class="none2" src="../assets/img/bank/sber.png" alt="">
                        <p class="col-md-2 block-tabble">СберБанк</p>
                        <p class="col-md-2 block-tabble">от 2 - до 11 лет</p>
                        <p class="col-md-1 block-tabble">11%</p>
                        <p class="col-md-2 block-tabble">320 000₽ - 590 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>


                    <div class="col-12 tabble-block color">
                        <p class=" block-tabble">4</p>
                        <img class="none2" src="../assets/img/bank/moskow.png" alt="">
                        <p class="col-md-2 block-tabble">Банк Москвы</p>
                        <p class="col-md-2 block-tabble">от 3 - до 12 лет</p>
                        <p class="col-md-1 block-tabble">12%</p>
                        <p class="col-md-2 block-tabble">100 000₽ - 210 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>

                    <div class="col-12 tabble-block">
                        <p class=" block-tabble">5</p>
                        <img class="none2" src="../assets/img/bank/tkb.png" alt="">
                        <p class="col-md-2 block-tabble">ТКБ</p>
                        <p class="col-md-2 block-tabble">от 3 - до 12 лет</p>
                        <p class="col-md-1 block-tabble">12%</p>
                        <p class="col-md-2 block-tabble">170 000₽ - 850 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>


                    <div class="col-12 tabble-block color">
                        <p class=" block-tabble">6</p>
                        <img class="none2" src="../assets/img/bank/bank.png" alt="">
                        <p class="col-md-2 block-tabble">Райфайзен Банк</p>
                        <p class="col-md-2 block-tabble">от 1 - до 7 лет</p>
                        <p class="col-md-1 block-tabble">4%</p>
                        <p class="col-md-2 block-tabble">50 000₽ - 420 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>


                    <div class="col-12 tabble-block">
                        <p class=" block-tabble">7</p>
                        <img class="none2" src="../assets/img/bank/ghjmsviya.png" alt="">
                        <p class="col-md-2 block-tabble">Промсвязьбанк</p>
                        <p class="col-md-2 block-tabble">от 5 - до 12 лет</p>
                        <p class="col-md-1 block-tabble">10%</p>
                        <p class="col-md-2 block-tabble">130 000₽ - 270 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>


                    <div class="col-12 tabble-block color">
                        <p class=" block-tabble">8</p>
                        <img class="none2" src="../assets/img/bank/sovkom.png" alt="">
                        <p class="col-md-2 block-tabble">СовкомБанк</p>
                        <p class="col-md-2 block-tabble">от 7 - до 11 лет</p>
                        <p class="col-md-1 block-tabble">9%</p>
                        <p class="col-md-2 block-tabble">140 000₽ - 330 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>

                    <div class="col-12 tabble-block">
                        <p class="  block-tabble">9</p>
                        <img class="none2" src="../assets/img/bank/tkb.png" alt="">
                        <p class="col-md-2 block-tabble">ТКБ Банк</p>
                        <p class="col-md-2 block-tabble">от 5 - до 7 лет</p>
                        <p class="col-md-1 block-tabble">5%</p>
                        <p class="col-md-2 block-tabble">230 000₽ - 750 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>

                    <div class="col-12 tabble-block color">
                        <p class="  block-tabble">10</p>
                        <img class="none2" src="../assets/img/bank/btb.png" alt="">
                        <p class="col-md-2 block-tabble">ВТБ</p>
                        <p class="col-md-2 block-tabble">от 4 - до 8 лет</p>
                        <p class="col-md-1 block-tabble">2%</p>
                        <p class="col-md-2 block-tabble">90 000₽ - 260 000₽</p>
                        <div class="col-md-2 bank-button-row-two none">
                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Редактировать
                            </a>
                        </div>

                    </div>
                </div>




            </div>

        </div>









        <!-- include -->
        <?php require '../modal.php'; ?>
</body>


</html>