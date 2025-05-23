<template>
  <div class="investment-map-page">
    <h2>Инвестиционная карта Челябинской области</h2>

    <div class="content">
      <div class="map-section">
        <h3>Инвестиционная карта Российской Федерации</h3>
        <div class="map-container">
          <div id="map" class="interactive-map"></div>
        </div>
      </div>

      <div class="info-section">
        <p class="intro-text">
          Инвестиционная карта Челябинской области размещена на информационном ресурсе 
          «Инвестиционная карта Российской Федерации».
        </p>

        <div class="features-section">
          <p class="features-intro">
            Карта сформирована для развития инвестиционной активности и обеспечения 
            свободного доступа инвесторов к информации:
          </p>
          
          <ul class="features-list">
            <li>об инвестиционных площадках (свободных земельных участках, зданиях и помещениях), 
                их обеспеченности инженерной инфраструктурой</li>
            <li>о преференциальных территориях</li>
            <li>о мерах государственной поддержки инвестиционной деятельности</li>
            <li>о тарифах ресурсоснабжающих организаций</li>
            <li>о природных ресурсах и полезных ископаемых</li>
            <li>о транспортной инфраструктуре</li>
          </ul>
        </div>

        <div class="authority-section">
          <p>
            Полномочиями по формированию и ведению инвестиционной карты Челябинской области 
            наделено Министерство экономического развития Челябинской области 
            (распоряжение Губернатора Челябинской области от 21.11.2023 г. № 1346-р 
            «Об уполномоченном органе»).
          </p>
        </div>

        <div class="regulation-section">
          <p>
            Формирование и ведение инвестиционной карты Челябинской области ведется в 
            соответствии с Регламентом, утверждённым приказом Министерства экономического 
            развития Челябинской области от 23.11.2023 г. №181 «Об утверждении регламента 
            формирования и ведения инвестиционной карты Челябинской области».
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'InvestmentMap',
  data() {
    return {
      map: null,
      // Координаты Челябинской области
      center: [55.154, 61.4291],
      zoom: 7
    }
  },
  mounted() {
    // Загружаем API Яндекс Карт
    const script = document.createElement('script')
    script.src = `https://api-maps.yandex.ru/2.1/?apikey=ваш_API_ключ&lang=ru_RU`
    script.async = true
    script.onload = () => {
      this.initMap()
    }
    document.head.appendChild(script)
  },
  methods: {
    initMap() {
      // Инициализация карты
      ymaps.ready(() => {
        this.map = new ymaps.Map('map', {
          center: this.center,
          zoom: this.zoom,
          controls: ['zoomControl', 'fullscreenControl']
        })

        // Добавляем границы Челябинской области
        ymaps.regions.load('RU', {
          lang: 'ru',
          quality: 2
        }).then(result => {
          result.geoObjects.each(geoObject => {
            if (geoObject.properties.get('osmId') === '77687') { // ID Челябинской области
              geoObject.options.set({
                fillColor: '#3498db20',
                strokeColor: '#3498db',
                strokeWidth: 2
              })
              this.map.geoObjects.add(geoObject)
              this.map.setBounds(geoObject.geometry.getBounds(), {
                checkZoomRange: true,
                duration: 500
              })
            }
          })
        })
      })
    }
  },
  beforeDestroy() {
    if (this.map) {
      this.map.destroy()
    }
  }
}
</script>

<style scoped>
.investment-map-page {
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  text-align: center;
  color: #2c3e50;
  margin-bottom: 30px;
}

h3 {
  color: #34495e;
  margin-bottom: 20px;
}

.content {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.map-section {
  width: 100%;
  margin-bottom: 40px;
}

.map-container {
  width: 100%;
  height: 600px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  background-color: #f8f9fa;
}

.interactive-map {
  width: 100%;
  height: 100%;
}

.info-section {
  background-color: #f8f9fa;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.intro-text {
  font-size: 1.1em;
  line-height: 1.6;
  color: #2c3e50;
  margin-bottom: 25px;
}

.features-section {
  margin: 25px 0;
}

.features-intro {
  margin-bottom: 15px;
  color: #34495e;
}

.features-list {
  list-style-type: none;
  padding-left: 0;
}

.features-list li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px;
  line-height: 1.5;
  color: #444;
}

.features-list li:before {
  content: "•";
  position: absolute;
  left: 8px;
  color: #3498db;
}

.authority-section,
.regulation-section {
  margin-top: 25px;
  padding-top: 25px;
  border-top: 1px solid #e9ecef;
}

.authority-section p,
.regulation-section p {
  line-height: 1.6;
  color: #444;
}

@media (max-width: 768px) {
  .map-container {
    height: 400px;
  }

  .info-section {
    padding: 20px;
  }
}
</style> 