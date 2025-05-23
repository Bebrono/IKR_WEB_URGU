<template>
  <div class="home-page">
    <h2>Инвестиционная карта Челябинской области</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Инвестиционная карта" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Инвестиционная карта Челябинской области представляет собой интерактивный инструмент для поиска и анализа
        инвестиционных площадок и проектов региона.
      </p>

      <div class="step">
        <h3>Инвестиционные площадки</h3>
        <div class="step-content">
          <p>
            На карте представлены все доступные инвестиционные площадки региона с подробной информацией
            о их характеристиках, инфраструктуре и возможностях для развития бизнеса.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Инвестиционные площадки" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Ключевые проекты</h3>
        <div class="step-content">
          <p>
            В разделе представлены ключевые инвестиционные проекты региона, включая промышленные парки,
            технопарки и другие объекты инфраструктуры, готовые к реализации.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Ключевые проекты" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Интерактивные возможности</h3>
        <div class="step-content">
          <p>
            Карта позволяет фильтровать объекты по различным параметрам, просматривать детальную информацию
            о каждой площадке и связываться с ответственными лицами для получения дополнительной информации.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Интерактивные возможности" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Дополнительная информация</h3>
        <div class="links-container">
          <router-link to="/investment-agency" class="info-link">Агентство инвестиционного развития</router-link>
          <router-link to="/investment-committee" class="info-link">Инвестиционный комитет</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.home-page {
  text-align: center;
  padding: 20px;
}

.image-container {
  margin: 20px 0;
}

.main-image {
  max-width: 100%;
  height: auto;
  max-height: 500px;
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content {
  max-width: 800px;
  margin: 0 auto;
  text-align: left;
}

.intro-text {
  font-size: 1.1em;
  line-height: 1.6;
  margin: 30px 0;
  color: #333;
}

.step {
  margin: 40px 0;
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 8px;
}

.step h3 {
  color: #2c3e50;
  margin-bottom: 20px;
}

.step-content {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.step-content p {
  line-height: 1.6;
  color: #444;
}

.step-image {
  width: 100%;
}

.step-img {
  width: 100%;
  height: auto;
  max-height: 300px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.additional-info {
  margin-top: 50px;
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 8px;
}

.additional-info h3 {
  color: #2c3e50;
  margin-bottom: 20px;
}

.links-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.info-link {
  display: inline-block;
  padding: 10px 20px;
  background-color: white;
  border-radius: 4px;
  color: #666;
  text-decoration: none;
  transition: all 0.3s ease;
}

.info-link:hover {
  background-color: #e9ecef;
  color: #333;
  transform: translateY(-2px);
}
</style> 