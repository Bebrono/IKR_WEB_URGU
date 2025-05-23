<template>
  <div class="home-page">
    <h2>Инвестиционная декларация</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Инвестиционная декларация" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Инвестиционная декларация - это официальный документ, определяющий основные принципы и направления инвестиционной политики региона.
      </p>

      <div class="step">
        <h3>Цели и задачи</h3>
        <div class="step-content">
          <p>
            Основной целью инвестиционной декларации является создание благоприятного инвестиционного климата и привлечение инвестиций в регион.
            Документ определяет ключевые направления развития и меры поддержки инвесторов.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Цели и задачи" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Основные принципы</h3>
        <div class="step-content">
          <p>
            Инвестиционная декларация базируется на принципах открытости, прозрачности и равных условий для всех инвесторов.
            Мы гарантируем стабильность условий ведения бизнеса и защиту инвестиций.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Основные принципы" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Меры поддержки</h3>
        <div class="step-content">
          <p>
            В рамках инвестиционной декларации предусмотрены различные меры поддержки инвесторов, включая налоговые льготы,
            субсидии, предоставление земельных участков и инфраструктуры.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Меры поддержки" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Дополнительная информация</h3>
        <div class="links-container">
          <router-link to="/investment-agency" class="info-link">Агентство инвестиционного развития</router-link>
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