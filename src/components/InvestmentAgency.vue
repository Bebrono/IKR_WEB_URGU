<template>
  <div class="home-page">
    <h2>Агентство инвестиционного развития</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Агентство инвестиционного развития" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Агентство инвестиционного развития - это организация, созданная для привлечения инвестиций в регион и поддержки инвесторов.
        Мы помогаем бизнесу развиваться и создаем благоприятные условия для инвестиций.
      </p>

      <div class="step">
        <h3>Наши услуги</h3>
        <div class="step-content">
          <p>
            Мы предоставляем полный спектр услуг для инвесторов: от консультаций по инвестиционным проектам до поддержки
            в получении мер государственной поддержки и содействия в поиске инвесторов.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Наши услуги" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Поддержка проектов</h3>
        <div class="step-content">
          <p>
            Наша команда специалистов помогает в реализации инвестиционных проектов, предоставляя консультации,
            организационную и информационную поддержку на всех этапах.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Поддержка проектов" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Контакты</h3>
        <div class="step-content">
          <p>
            Адрес: г. Челябинск, ул. Примерная, д. 123<br>
            Телефон: +7 (351) 123-45-67<br>
            Email: info@invest-agency.ru
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Контакты" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Дополнительная информация</h3>
        <div class="links-container">
          <router-link to="/investment-declaration" class="info-link">Инвестиционная декларация</router-link>
          <router-link to="/investment-map" class="info-link">Инвестиционная карта</router-link>
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