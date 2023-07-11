<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="modal-calc">
                    <div class="block-list-calc">

                        <a class="block-list-calc-a" href="">Банки</a>
                        <a class="block-list-calc-a" href="">МКК</a>
                        <br>
                        <a class="block-list-calc-a" href="">Лизинговые компании</a>
                        <a class="block-list-calc-a" href="">МФО</a>


                    </div>


                    <div class="calc">
                        <label for="room">Сроки:</label>
                        <div class="input-range">
                            <Input class="" type="number" id="numroom" value="0" min="0" max="10" oninput="numroom.value=room.value"></Input>
                            <Input class="range-style" type="range" id="room" value="0" min="0" max="10" oninput="numroom.value=room.value" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                        </div>
                        <label for="room">Максимальная ставка:</label>
                        <div class="input-range">
                            <Input class="" type="number" id="numroom" value="0" min="0" max="10" oninput="numroom.value=room.value"></Input>
                            <Input class="range-style" type="range" id="room" value="0" min="0" max="10" oninput="numroom.value=room.value" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                        </div>
                        <label for="room">Сумма:</label>
                        <div class="input-range">
                            <Input class="" type="number" id="numroom" value="0" min="0" max="10" oninput="numroom.value=room.value"></Input>
                            <Input class="range-style" type="range" id="room" value="0" min="0" max="10" oninput="numroom.value=room.value" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                        </div>


                        <script type="text/javascript">
                            function rangeSlide(value) {
                                document.getElementById('rangeValue').innerHTML = value;
                            }
                        </script>


                        <button type="submit" name="submit" class="mr-btn ttt rn-btn button-2"><span>Подать заявку </span></button>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-two-w">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form id="feedback-form" action="form.php" method="POST">

                    <div class="form-group field field2">

                        <input type="input" class="maskphone-2 form-field" placeholder="Ваш номер" name="phone" id="phone" required="">

                    </div>
                    <div class="form-group field field2">

                        <input type="input" class="form-field" placeholder="Ваше имя" name="name" id="name" required="">

                    </div>
                    <div class="form-group field field2">

                        <input type="input" class="maskphone-2 form-field" placeholder="Ваша почта" name="email" id="email" required="">

                    </div>
                    <div class="form-group p-20-flex flex-two">
                        <div class="flex-free">
                            <div class="banner-btn generic-btn wid ">
                                <button type="submit" name="submit" class="mr-btn ttt rn-btn button-2 fool-will"><span>Отправить</span></button>
                            </div>

                            <div class="modal-p"> <input class="flex-two" type="checkbox" id="okey" name="okey" required="" oninvalid="setCustomValidity('Для продолжения необходимо подтвердить 🐤')" oninput="setCustomValidity('')">
                                <label name="" for="okey">
                                    <div class="div-check">Отправляя форму отправки вы соглашаетесь с <a class="underline" href="politic.html"> политикой <br> конфиденциальности обработки персональных данных </a> </div>
                                </label>
                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>




