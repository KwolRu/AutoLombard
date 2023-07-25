<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="modal-calc">

                    <form action="app/max-send.php" method="get"></form>

                    <div class="calc">
                        <div class="block-list-calc">
                            <input type="radio" id="all" checked="checked" name="type" value="" />
                            <label class="block-list-calc-a active" for="all" onclick="toggleActiveClass(this)">Все</label>

                            <input type="radio" id="bank" name="type" value="bank" />
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
                                <input class="" type="number" id="bet" name="bet" value="0" min="0" max="50" />
                                <input class="range-style" type="range" id="room2" value="0" min="0" max="50" />
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


                            <button type="submit" name="submit" class="mr-btn ttt rn-btn button-2"><span>Подать заявку </span></button>


                        </div>


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-mini" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-two-w">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
            <form id="feedback-form" action="app/send.php" method="post">
            <div class="form-group field field2">
                            <label for="name" class="form-label">Ваше имя:</label>
                            <input type="text" name="name" id="name" maxlength="50" class=" form-sect-1" placeholder="Иван Иванов Иванович" required>
                        </div>
                        <div class="form-group field field2">
                            <label for="phone" class="form-label">Номер телефона:</label>
                            <input type="phone" id="phone" class="maskphone form-sect-1" placeholder="8 900 800 90 80" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary button-sect-1">Подать заявку</button>
                </form>
                <div id="notification"></div>
                <script>
                    // Обработка отправки формы через AJAX  
                    $(document).ready(function() {
                        var isFormSubmitted = false; // Переменная для проверки повторной отправки заявки 

                        $('#feedback-form').submit(function(event) {
                            event.preventDefault();

                            if (!isFormSubmitted) { // Проверяем, была ли уже отправлена заявка 
                                isFormSubmitted = true; // Устанавливаем флаг, что заявка отправлена 

                                var formData = $('#feedback-form').serialize(); // Получаем данные формы 
                                formData += '&date=' + new Date().toISOString(); // Добавляем дату заявки 

                                $.ajax({
                                    type: 'POST',
                                    url: '/app/send.php',
                                    data: formData,
                                    success: function(response) {
                                        $('#notification').html('<div class="alert alert-success">' + response + '</div>');
                                    },
                                    error: function(response) {
                                        $('#notification').html('<div class="alert alert-danger">Ошибка отправки заявки</div>');
                                    }
                                });
                            } else {
                                $('#notification').html('<div class="alert alert-warning">Заявка уже отправлена</div>');
                            }
                        });
                    });
                </script>
            </div>

        </div>
    </div>
</div>