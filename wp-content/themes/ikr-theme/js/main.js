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
}); 