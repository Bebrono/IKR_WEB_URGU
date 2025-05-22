<template>
  <div class="home-page">
    <h2>Привет, я главная страница!</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Главная картинка" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>

      <div class="step">
        <h3>Шаг 1: Подготовка</h3>
        <div class="step-content">
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Шаг 1" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Шаг 2: Основной процесс</h3>
        <div class="step-content">
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Шаг 2" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Шаг 3: Завершение</h3>
        <div class="step-content">
          <p>
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Шаг 3" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Дополнительная информация</h3>
        <div class="links-container">
          <router-link to="/info" class="info-link">Перейти на страницу с информацией</router-link>
          <router-link to="/info2" class="info-link">Перейти на страницу с информацией2</router-link>
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