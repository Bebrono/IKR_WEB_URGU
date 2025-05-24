<template>
  <div class="investment-map-page">
    <div class="section-header">
      <h2>1. Общая информация</h2>
    </div>

    <div class="content-block info-block">
      <p>
        Агентство инвестиционного развития Челябинской области функционирует в рамках Фонда развития предпринимательства – Центра «Мой бизнес». 
        Оно создано для привлечения инвестиций, устранения административных барьеров, формирования положительного инвестиционного имиджа региона 
        и улучшения инвестиционного климата.
      </p>
    </div>

    <div class="section-header">
      <h2>2. Инвестиционная карта</h2>
    </div>

    <div class="content-block map-block">
      <div class="map-container">
        <div id="map" class="interactive-map"></div>
      </div>
    </div>

    <div class="content-block info-block">
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
</template>

<script>
export default {
  name: 'InvestmentMap',
  data() {
    return {
      map: null,
      center: [55.154, 61.4291],
      zoom: 7
    }
  },
  mounted() {
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
      ymaps.ready(() => {
        this.map = new ymaps.Map('map', {
          center: this.center,
          zoom: this.zoom,
          controls: ['zoomControl', 'fullscreenControl']
        })
        ymaps.regions.load('RU', {
          lang: 'ru',
          quality: 2
        }).then(result => {
          result.geoObjects.each(geoObject => {
            if (geoObject.properties.get('osmId') === '77687') {
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
  background-color: #fff;
}

.section-header {
  position: relative;
  margin-bottom: 30px;
  padding-bottom: 10px;
  border-bottom: 2px solid #007bff;
}

h2 {
  color: #1e3c87;
  font-size: 24px;
  font-weight: 600;
  margin: 0;
}

.content-block {
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 30px;
}

.map-block {
  padding: 0;
}

.map-container {
  width: 100%;
  height: 600px;
  border-radius: 4px;
  overflow: hidden;
  border: 1px solid #e0e4e8;
}

.interactive-map {
  width: 100%;
  height: 100%;
}

.info-block {
  color: #2c3e50;
  line-height: 1.6;
}

.info-block p {
  margin: 0 0 15px 0;
  font-size: 16px;
}

.intro-text {
  margin-bottom: 20px;
  color: #2c3e50;
}

.features-section {
  margin: 20px 0;
}

.features-intro {
  margin-bottom: 20px;
  color: #2c3e50;
}

.features-list {
  list-style-type: none;
  padding-left: 0;
  margin: 0;
}

.features-list li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 15px;
  color: #2c3e50;
  border-bottom: 1px solid #e9ecef;
  padding-bottom: 15px;
}

.features-list li:last-child {
  border-bottom: none;
  margin-bottom: 0;
  padding-bottom: 0;
}

.features-list li:before {
  content: "";
  position: absolute;
  left: 0;
  top: 8px;
  width: 15px;
  height: 2px;
  background-color: #007bff;
}

.authority-section,
.regulation-section {
  margin-top: 20px;
  padding-top: 20px;
  border-top: 1px solid #e9ecef;
}

@media (max-width: 768px) {
  .investment-map-page {
    padding: 15px;
  }

  h2 {
    font-size: 20px;
  }

  .map-container {
    height: 400px;
  }

  .content-block {
    padding: 15px;
  }
}
</style> 