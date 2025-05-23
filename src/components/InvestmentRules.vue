<template>
  <div class="home-page">
    <h2>Свод инвестиционных правил</h2>
    <div class="image-container">
      <img src="../assets/sobaka.jpg" alt="Свод инвестиционных правил" class="main-image">
    </div>
    
    <div class="content">
      <p class="intro-text">
        Свод инвестиционных правил представляет собой комплексный документ, регулирующий инвестиционную деятельность
        в регионе и определяющий основные принципы взаимодействия с инвесторами.
      </p>

      <div class="step">
        <h3>Правовые основы</h3>
        <div class="step-content">
          <p>
            Документ содержит полную информацию о законодательной базе, нормативных актах и правовых гарантиях
            для инвесторов, обеспечивая прозрачность и стабильность инвестиционного процесса.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Правовые основы" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Меры поддержки</h3>
        <div class="step-content">
          <p>
            В своде правил подробно описаны все доступные меры поддержки инвесторов, включая налоговые льготы,
            субсидии и гарантийную поддержку, а также условия их получения.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Меры поддержки" class="step-img">
          </div>
        </div>
      </div>

      <div class="step">
        <h3>Процедуры и документы</h3>
        <div class="step-content">
          <p>
            Документ содержит подробное описание процедур получения поддержки, сроков рассмотрения заявок
            и перечень необходимых документов для участия в инвестиционных проектах.
          </p>
          <div class="step-image">
            <img src="../assets/sobaka.jpg" alt="Процедуры и документы" class="step-img">
          </div>
        </div>
      </div>

      <div class="additional-info">
        <h3>Документы для скачивания</h3>
        <div class="links-container">
          <a href="#" class="info-link">Полный текст правил (PDF)</a>
          <a href="#" class="info-link">Приложения к правилам (ZIP)</a>
          <a href="#" class="info-link">Формы заявлений (DOC)</a>
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