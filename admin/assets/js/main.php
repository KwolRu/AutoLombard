<!-- Добавление банка -->
<script>
    function hideMessage() {
        var message = document.getElementById('message');
        message.innerHTML = '';

        // Удаляем класс 'on' у элемента 'alarm'
        var alarm = document.querySelector('.alarm');
        alarm.classList.remove('on');
    }


    function deleteRecord(id) {
        // Выводим сообщение с предложением отменить удаление
        var message = document.getElementById('message');
        message.innerHTML = '<p>Запись будет удалена через 5 секунд.</p><button onclick="cancelDeletion()">Отмена</button>';

        // Добавляем класс 'on' к элементу 'alarm'
        var alarm = document.querySelector('.alarm');
        alarm.classList.add('on');
        // Устанавливаем таймер на 5 секунд
        var deletionTimeout = setTimeout(function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'app/delete.php?id=' + id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Удаление строки таблицы
                        var row = document.querySelector('.tabble-block[data-id="' + id + '"]');
                        row.parentNode.removeChild(row);

                        // Вывод сообщения об успехе
                        message.innerHTML = 'Запись успешно удалена.';
                        setTimeout(hideMessage, 5000);
                    } else {
                        // Вывод сообщения об ошибке
                        var errorMessage = document.getElementById('message');
                        errorMessage.style.display = 'block';

                        // Таймер для скрытия сообщения об ошибке
                        setTimeout(function() {
                            errorMessage.style.display = 'none';
                        }, 5000);
                    }
                }
            };
            xhr.send();
        }, 5000);

        // Функция для отмены удаления
        window.cancelDeletion = function() {
            clearTimeout(deletionTimeout);
            message.innerHTML = 'Удаление отменено.';
            setTimeout(hideMessage, 5000);
        }
    }
</script>
<!-- Добавление банка -->

<!-- Реадкторирование банка -->
<script>
    $(document).ready(function() {
        $('#editForm').on('submit', function(e) {
            e.preventDefault();

            // Создаем объект FormData 
            var formData = new FormData(this);

            // Отправляем данные формы 
            $.ajax({
                url: 'app/update.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Выводим сообщение об успешном обновлении 
                    $('#message').html(response);
                    // Добавляем класс 'on' к элементу 'alarm' 
                    var alarm = document.querySelector('.alarm');
                    alarm.classList.add('on');
                    // Устанавливаем таймер на 5 секунд 
                    var messageTimeout = setTimeout(function() {
                        $('#message').html('');
                        // Удаляем класс 'on' у элемента 'alarm' 
                        alarm.classList.remove('on');
                    }, 5000);
                },
                error: function() {
                    // Выводим сообщение об ошибке 
                    $('#message').html('An error occurred while updating data');
                    // Добавляем класс 'on' к элементу 'alarm' 
                    var alarm = document.querySelector('.alarm');
                    alarm.classList.add('on');
                    // Устанавливаем таймер на 5 секунд 
                    var messageTimeout = setTimeout(function() {
                        $('#message').html('');
                        // Удаляем класс 'on' у элемента 'alarm' 
                        alarm.classList.remove('on');
                    }, 5000);
                }
            });

        });
    });
</script>
<!-- Реадкторирование банка -->

<!-- Сортировка -->
<script>
    $(function() {
        $(".parent-container").sortable({
            items: ".tabble-block",
            cursor: "move",
            containment: ".parent-container",
            tolerance: "pointer",
            update: function(event, ui) {
                updateSorting();
            }
        });

        function updateSorting() {
            var sort = window.location.search.split('=')[1]; // Получаем параметр sort из URL
            $(".tabble-block").each(function(index) {
                $(this).attr("sorting", index + 1);
                var id = $(this).data("id");
                var sorting = $(this).attr("sorting");
                console.log("id:", id);
                console.log("sorting:", sorting);
                $.ajax({
                    type: "POST",
                    url: "app/update-sort.php",
                    data: {
                        id: id,
                        sorting: sorting,
                        sort: sort // Отправляем параметр sort на сервер
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        }
    });
</script>
<!-- Сортировка -->