<template>
  <div class="home-page">
    <h2>Инвестиционный комитет</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Инвестиционный комитет" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Инвестиционный комитет - это коллегиальный орган, созданный для координации инвестиционной политики региона
        и принятия стратегических решений в сфере инвестиций.
      </p>

      <div class="step">
        <h3>Состав комитета</h3>
        <div class="step-content">
          <p>
            В состав комитета входят представители органов власти, бизнес-сообщества и эксперты в области инвестиций.
            Возглавляет комитет глава региона, что подчеркивает важность инвестиционной политики для развития области.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Состав комитета" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Основные задачи</h3>
        <div class="step-content">
          <p>
            Комитет занимается разработкой и реализацией инвестиционной стратегии, координацией инвестиционных проектов,
            принятием решений о мерах поддержки инвесторов и мониторингом инвестиционного климата в регионе.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Основные задачи" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Результаты работы</h3>
        <div class="step-content">
          <p>
            За время работы комитета было реализовано множество успешных инвестиционных проектов,
            созданы новые рабочие места и улучшен инвестиционный климат региона.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Результаты работы" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Дополнительная информация</h3>
        <div class="links-container">
          <router-link to="/investment-declaration" class="info-link">Инвестиционная декларация</router-link>
          <router-link to="/investment-rules" class="info-link">Свод инвестиционных правил</router-link>
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