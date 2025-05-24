<template>
  <div class="declaration-page">
    <div class="content-container">
      <h1 class="main-title">Инвестиционная декларация Челябинской области</h1>

      <section class="info-section">
        <h2>Что это такое?</h2>
        <p>
          Инвестиционная декларация — это <strong>официальный документ</strong>, в котором органы власти региона берут на себя <strong>публичные обязательства</strong> по защите и поддержке инвестора. Она подписывается губернатором и является базовым элементом инвестиционного стандарта.
        </p>
      </section>

      <section class="info-section">
        <h2>Основные цели декларации:</h2>
        <ul>
          <li>Обозначить <strong>приоритетные направления развития экономики региона</strong></li>
          <li>Обеспечить <strong>стабильные и предсказуемые условия</strong> ведения бизнеса</li>
          <li>Гарантировать <strong>оперативное сопровождение</strong> инвестиционных проектов</li>
          <li>Обеспечить <strong>открытость власти и защиту прав инвесторов</strong></li>
        </ul>
      </section>

      <section class="info-section">
        <h2>Ключевые положения декларации:</h2>
        <div class="key-points">
          <div class="point">
            <h3>Обязательство на неухудшение условий</h3>
            <p>Власти региона гарантируют, что условия ведения бизнеса, существовавшие на момент начала инвестпроекта, не будут ухудшены искусственно.</p>
          </div>

          <div class="point">
            <h3>Открытость информации</h3>
            <p>Доступ к полным и достоверным данным об участках, инфраструктуре, мерах поддержки, сроках подключения и т.д.</p>
          </div>

          <div class="point">
            <h3>Поддержка на всех этапах проекта</h3>
            <p>Регион обязуется предоставлять информационное и организационное сопровождение — через Агентство развития и профильные министерства.</p>
          </div>

          <div class="point">
            <h3>Прозрачность согласований</h3>
            <p>Все административные процедуры проходят по заранее установленным регламентам (из Свода инвестиционных правил).</p>
          </div>

          <div class="point">
            <h3>Решение споров — без бюрократии</h3>
            <p>При необходимости — прямой выход на Инвестиционный комитет под руководством главы региона.</p>
          </div>
        </div>
      </section>

      <section class="info-section">
        <h2>Что делать инвестору?</h2>
        
        <div class="step">
          <h3>Шаг 1. Убедитесь, что ваш проект соответствует приоритетам</h3>
          <h4>Как?</h4>
          <ul>
            <li>Ознакомьтесь с основными приоритетами региона в декларации: промышленность, логистика, IT, сельское хозяйство и т.д.</li>
            <li>Сопоставьте ваш проект с этими направлениями. Если он соответствует — у вас больше шансов получить поддержку.</li>
          </ul>
        </div>

        <div class="step">
          <h3>Шаг 2. Используйте декларацию как основу взаимодействия с властью</h3>
          <h4>Зачем?</h4>
          <p>При переговорах с чиновниками, при обращении в комитет, при подаче заявки на землю или подключение к сетям — вы можете ссылаться на положения декларации как на гарантии ваших прав.</p>
        </div>

        <div class="step">
          <h3>Шаг 3. Приложите декларацию к инвестиционной заявке (рекомендуется)</h3>
          <h4>Что это даст?</h4>
          <p>Агентство развития будет рассматривать ваш проект как соответствующий инвестиционному стандарту региона, что ускоряет процессы согласования.</p>
        </div>
      </section>

      <section class="info-section">
        <h2>Какие документы подготовить?</h2>
        <p>Для опоры на декларацию на практике, желательно иметь:</p>
        <ul>
          <li>Краткую презентацию проекта (PDF/PowerPoint, до 10 слайдов)</li>
          <li>Финансово-экономическое обоснование (если есть)</li>
          <li>Описание соответствия вашему проекту приоритетам декларации</li>
          <li>Копию декларации (скачать с <a href="https://investregion174.ru/investstandart/declaration/" target="_blank">официального сайта</a>)</li>
        </ul>
      </section>

      <section class="info-section">
        <h2>Подсказка</h2>
        <p>
          Если вы не уверены, подпадает ли ваш проект под приоритетные направления — свяжитесь с Агентством инвестиционного развития. Они помогут определить это и дадут рекомендации.
        </p>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: 'InvestmentDeclaration'
}
</script>

<style scoped>
.declaration-page {
  padding: 2rem;
  background: #F5F5F5;
  min-height: 100vh;
}

.content-container {
  max-width: 1200px;
  margin: 0 auto;
}

.main-title {
  color: #2B3467;
  margin-bottom: 2rem;
  font-size: 2rem;
  border-bottom: 2px solid #007AFF;
  padding-bottom: 0.5rem;
}

.info-section {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  margin-bottom: 1.5rem;
}

.info-section h2 {
  color: #2B3467;
  margin-bottom: 1.5rem;
  font-size: 1.5rem;
  border-bottom: 2px solid #007AFF;
  padding-bottom: 0.5rem;
}

.info-section p {
  line-height: 1.6;
  color: #333;
  margin-bottom: 1rem;
}

.purpose-block {
  background: #F8F9FA;
  padding: 1rem 1.5rem;
  border-radius: 6px;
  margin-bottom: 1.5rem;
}

.purpose-block strong {
  color: #2B3467;
}

.what-to-do {
  margin-top: 1rem;
}

.what-to-do strong {
  color: #2B3467;
  display: block;
  margin-bottom: 0.5rem;
}

.info-section ul {
  list-style-type: none;
  padding-left: 0;
  margin: 0;
}

.info-section ul li {
  margin-bottom: 0.8rem;
  padding-left: 1.5rem;
  position: relative;
}

.info-section ul li::before {
  content: "•";
  color: #007AFF;
  position: absolute;
  left: 0;
}

.key-points {
  display: grid;
  gap: 1.5rem;
}

.point {
  background: #F8F9FA;
  padding: 1.5rem;
  border-radius: 6px;
}

.point h3 {
  color: #2B3467;
  margin-bottom: 0.8rem;
  font-size: 1.2rem;
}

.step {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.step h3 {
  color: #2B3467;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  border-bottom: 2px solid #007AFF;
  padding-bottom: 0.5rem;
}

.step h4 {
  color: #007AFF;
  margin: 1rem 0 0.5rem;
  font-size: 1.1rem;
}

a {
  color: #007AFF;
  text-decoration: none;
  transition: color 0.2s ease;
}

a:hover {
  color: #0056b3;
}

strong {
  font-weight: 600;
}

@media (max-width: 768px) {
  .declaration-page {
    padding: 1rem;
  }

  .info-section, .step {
    padding: 1.5rem;
  }

  .main-title {
    font-size: 1.5rem;
  }

  .info-section h2 {
    font-size: 1.3rem;
  }
}
</style> 