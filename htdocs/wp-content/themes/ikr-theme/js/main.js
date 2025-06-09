jQuery(document).ready(function($) {
    // Анимация для карточек шагов
    $('.step-card').hover(
        function() {
            $(this).css('transform', 'translateY(-5px)');
        },
        function() {
            $(this).css('transform', 'translateY(0)');
        }
    );

    // Плавная прокрутка для якорных ссылок
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });

    // Адаптивное меню
    $('.menu-toggle').on('click', function() {
        $('.nav-menu').toggleClass('active');
    });

    // Инициализация видео
    var video = document.querySelector('.main-video');
    if (video) {
        video.play().catch(function(error) {
            console.log("Автовоспроизведение видео не удалось:", error);
        });
    }

    // Обработка формы обратной связи
    $('#feedback-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitButton = form.find('button[type="submit"]');
        var originalButtonText = submitButton.text();
        var messageField = form.find('#message');
        
        // Проверяем длину сообщения
        if (messageField.val().length > 2048) {
            alert('Сообщение не должно превышать 2048 символов');
            return;
        }
        
        // Блокируем кнопку и меняем текст
        submitButton.prop('disabled', true).text('Отправка...');
        
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'submit_feedback',
                nonce: ajax_object.nonce,
                name: form.find('#name').val(),
                surname: form.find('#surname').val(),
                email: form.find('#email').val(),
                message: messageField.val()
            },
            success: function(response) {
                if (response.success) {
                    alert('Сообщение успешно отправлено!');
                    form[0].reset();
                } else {
                    alert(response.data || 'Ошибка при отправке сообщения. Пожалуйста, попробуйте позже.');
                }
            },
            error: function() {
                alert('Произошла ошибка при отправке формы. Пожалуйста, попробуйте позже.');
            },
            complete: function() {
                // Возвращаем кнопку в исходное состояние
                submitButton.prop('disabled', false).text(originalButtonText);
            }
        });
    });

    // Добавляем счетчик символов для поля сообщения
    var messageField = $('#message');
    if (messageField.length) {
        var counter = $('<div class="message-counter">Осталось символов: 2048</div>');
        var errorMessage = $('<div class="message-error" style="display: none;">Сообщение слишком большое!</div>');
        messageField.after(counter);
        counter.after(errorMessage);
        
        messageField.on('input', function() {
            var remaining = 2048 - $(this).val().length;
            counter.text('Осталось символов: ' + remaining);
            
            if (remaining < 0) {
                counter.addClass('error');
                errorMessage.show();
            } else {
                counter.removeClass('error');
                errorMessage.hide();
            }
        });
    }
}); 