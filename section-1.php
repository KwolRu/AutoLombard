<section class="header-lider">
    <div class="container ">
        <div class="row ">
            <div class="col-sm-6 col-lg-6 col-sm-12 fon-one ">
                <div class="h1-lider">
                    <h1>Рейтинг банков, МФО, <br> финансовых компаний <br>(Автоломбард)</h1>
                </div>
                <div class="title">
                    <p class="title-p">Оставляйте заявку и получите <br> подробную консультацию от наших экспертов <br> быстро и качественно! </p>
                </div>
            </div>
            <div class="col-sm-6 header-two none "> <img class="img-header" src="assets/img/img-header.png" alt=""> </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-sm-6 col-lg-6 col-sm-12  col-xl-12 form-header ">
                <form id="feedback-form" action="app/send.php" method="post">
                    <div class="form-group field wrap">
                        <div class="fw">
                            <label for="name" class="form-label">Ваше имя:</label>
                            <input type="text" name="name" id="name" maxlength="50" class=" form-sect-1" placeholder="Иван Иванов Иванович" required>
                        </div>
                        <div class="fw">
                            <label for="phone" class="form-label">Номер телефона:</label>
                            <input type="phone" id="phone" class="maskphone form-sect-1" placeholder="8 900 800 90 80" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary button-sect-1">Подать заявку</button>
                    </div>
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
                                    url: 'app/send.php',
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
</section>