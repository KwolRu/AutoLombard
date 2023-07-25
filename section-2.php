<section class="header-lider">
    <div class="container ">
        <div class="row ">



            <div class="col-md-12 col-lg-6 col-sm-12">

                <form action="banks.php" method="get">
                    <div class="block">
                        <div class="block-list-calc">
                            <input type="radio" id="all" checked="checked" name="type" value="" />
                            <label class="block-list-calc-a active" for="all" onclick="toggleActiveClass(this)">Все</label>

                            <input type="radio" id="bank"  name="type" value="bank" />
                            <label class="block-list-calc-a " for="bank" onclick="toggleActiveClass(this)">Банки</label>

                            <input type="radio" id="mkk" name="type" value="mkk" />
                            <label class="block-list-calc-a" for="mkk" onclick="toggleActiveClass(this)">МКК</label>

                            <input type="radio" id="leasing" name="type" value="leasing" />
                            <label class="block-list-calc-a" for="leasing" onclick="toggleActiveClass(this)">Лизинговые компании</label>

                            <input type="radio" id="mfo" name="type" value="mfo" />
                            <label class="block-list-calc-a" for="mfo" onclick="toggleActiveClass(this)">МФО</label>
                        </div>



                        <div class="calc">
                            <label for="room">Сроки:</label>
                            <div class="input-range">
                                <input class="" type="number" id="time" name="time" value="0" min="0" max="20" />
                                <input class="range-style" type="range" id="room1" value="0" min="0" max="20" />
                            </div>
                            <label for="room1">Максимальная ставка:</label>
                            <div class="input-range">
                                <input class="" type="number" id="bet" name="bet" value="0" min="0" max="5022" />
                                <input class="range-style" type="range" id="room2" value="0" min="0" max="5022" />
                            </div>
                            <label for="room2">Сумма:</label>
                            <div class="input-range">
                                <input class="" type="number" id="sum" name="sum" value="0" min="0" max="5000000" />
                                <input class="range-style" type="range" step="5000" id="room3" value="0" min="0" max="5000000" />
                            </div>

                            <script>
                                const timeInput = document.getElementById("time");
                                const room1Input = document.getElementById("room1");
                                const betInput = document.getElementById("bet");
                                const room2Input = document.getElementById("room2");
                                const sumInput = document.getElementById("sum");
                                const room3Input = document.getElementById("room3");

                                // Обработчики событий для первого div
                                timeInput.addEventListener("input", function() {
                                    room1Input.value = timeInput.value;
                                });
                                room1Input.addEventListener("input", function() {
                                    timeInput.value = room1Input.value;
                                });

                                // Обработчики событий для второго div
                                betInput.addEventListener("input", function() {
                                    room2Input.value = betInput.value;
                                });
                                room2Input.addEventListener("input", function() {
                                    betInput.value = room2Input.value;
                                });

                                // Обработчики событий для третьего div
                                sumInput.addEventListener("input", function() {
                                    room3Input.value = sumInput.value;
                                });
                                room3Input.addEventListener("input", function() {
                                    sumInput.value = room3Input.value;
                                });

                                // Получаем все радио-инпуты и их соответствующие label
                                const radioInputs = document.querySelectorAll('.block-list-calc input[type="radio"]');
                                const labels = document.querySelectorAll('.block-list-calc label');

                                // Добавляем обработчик события для каждого радио-инпута
                                radioInputs.forEach(function(input) {
                                    input.addEventListener('change', function() {
                                        // Проверяем, выбран ли данный радио-инпут
                                        if (this.checked) {
                                            // Удаляем класс "active" у всех label
                                            labels.forEach(function(label) {
                                                label.classList.remove('active');
                                            });
                                            // Добавляем класс "active" к соответствующему label
                                            const labelForInput = document.querySelector('label[for="' + this.id + '"]');
                                            labelForInput.classList.add('active');
                                        }
                                    });
                                });
                            </script>

                            <button type="submit" class="btn-style btn btn-primary button-sect-1">Посмотреть результаты</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="block-calc-body">
                    <div class="block-calc">

                        <h3 class="h3-calc">Лид-форма для <br> подбора лучших <br> условий на основе <br> Ваших предпочтений</h3>
                        <p class="p-calc">Собирайте свои предпочтения в режиме <br> онлайн,смотрите предложения которые <br>встречаются на рынке прямо сейчас</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>