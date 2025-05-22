<template>
  <div class="info-page">
    <h2>Привет, я страница с информацией!</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Информационная картинка" class="main-image">
    </div>
    <router-link to="/" class="back-link">Вернуться на главную</router-link>
  </div>
</template>

<style scoped>
.info-page {
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

.back-link {
  display: inline-block;
  margin-top: 20px;
  color: #666;
  text-decoration: none;
}

.back-link:hover {
  color: #333;
}
</style> 