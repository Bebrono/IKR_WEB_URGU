jQuery(document).ready(function($) {
    // Функция инициализации карты
    function initMap() {
        ymaps.ready(function() {
            var map = new ymaps.Map('map', {
                center: [55.154, 61.4291],
                zoom: 7,
                controls: ['zoomControl', 'fullscreenControl']
            });

            // Загрузка регионов
            ymaps.regions.load('RU', {
                lang: 'ru',
                quality: 2
            }).then(function(result) {
                result.geoObjects.each(function(geoObject) {
                    if (geoObject.properties.get('osmId') === '77687') {
                        geoObject.options.set({
                            fillColor: '#3498db20',
                            strokeColor: '#3498db',
                            strokeWidth: 2
                        });
                        map.geoObjects.add(geoObject);
                        map.setBounds(geoObject.geometry.getBounds(), {
                            checkZoomRange: true,
                            duration: 500
                        });
                    }
                });
            });
        });
    }

    // Загрузка API Яндекс.Карт
    var script = document.createElement('script');
    script.src = 'https://api-maps.yandex.ru/2.1/?apikey=ваш_API_ключ&lang=ru_RU';
    script.async = true;
    script.onload = initMap;
    document.head.appendChild(script);
}); 