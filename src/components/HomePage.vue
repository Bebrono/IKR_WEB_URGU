<template>
  <div class="home-page">
    <div class="content-container">
      <div class="video-container">
        <video class="main-video" autoplay loop muted playsinline>
          <source src="../assets/investandard-short.mp4" type="video/mp4">
          Ваш браузер не поддерживает видео.
        </video>
      </div>

      <div class="steps-container">
        <div v-for="(step, index) in steps" :key="index" class="step-card">
          <h3 class="step-title">{{ step.title }}</h3>
          
          <div class="purpose">
            <strong>Зачем:</strong> {{ step.purpose }}
          </div>
          
          <div class="what-to-do">
            <strong>Что делать:</strong>
            <ol>
              <li v-for="(action, actionIndex) in step.actions" :key="actionIndex" 
                  v-html="action"></li>
            </ol>
          </div>
        </div>
      </div>

      <div class="result-section">
        <h2>Результат</h2>
        <p>Вы знаете, как:</p>
        <ul>
          <li v-for="(result, index) in results" :key="index">{{ result }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomePage',
  data() {
    return {
      steps: [
        {
          title: 'Шаг 1. Ознакомьтесь с Инвестиционной декларацией',
          purpose: 'понять стратегию региона и гарантии от властей',
          actions: [
            'Перейти в раздел <a href="https://investregion174.ru/investstandart/declaration/">Инвестиционная декларация</a>.',
            'Изучить стратегические приоритеты региона.',
            'Ознакомиться с письмом-гарантией губернатора о стабильности условий ведения бизнеса.',
            'Убедиться, что ваш проект соответствует приоритетам региона (например, промышленность, IT, агросектор и т.д.).'
          ]
        },
        {
          title: 'Шаг 2. Свяжитесь с Агентством инвестиционного развития',
          purpose: 'получить консультации и персональное сопровождение',
          actions: [
            'Перейти на страницу <a href="https://investregion174.ru/investstandart/agency/">Агентства</a>.',
            'Заполнить форму обратной связи или позвонить.',
            'Назначить встречу или онлайн-консультацию.',
            'Подготовить краткое описание проекта (PDF/презентация).',
            'Получить:<ul><li>персонального куратора;</li><li>информацию о мерах поддержки (субсидии, налоговые льготы);</li><li>перечень нужных документов.</li></ul>'
          ]
        },
        {
          title: 'Шаг 3. Изучите Инвестиционную карту Челябинской области',
          purpose: 'выбрать участок и узнать про доступную инфраструктуру',
          actions: [
            'Перейти в раздел <a href="https://investregion174.ru/investstandart/map/">Инвестиционная карта</a>.',
            'Выбрать район и подходящий земельный участок:<ul><li>по целевому назначению;</li><li>по наличию инженерных сетей (газ, вода, электроэнергия);</li><li>по удалённости от транспортной инфраструктуры.</li></ul>',
            'Скачать информацию об участке (паспорт территории).',
            'Подготовить заявку на резервирование участка (если необходимо — через Агентство развития).'
          ]
        },
        {
          title: 'Шаг 4. При необходимости обратитесь в Инвестиционный комитет',
          purpose: 'быстро решить спорные вопросы, связанные с участками, разрешениями, подключением к сетям',
          actions: [
            'Обратиться в Агентство или через официальный сайт <a href="https://investregion174.ru/investstandart/committee/">раздел Комитета</a>.',
            'Подать заявление с описанием проблемы (например, длительное согласование, отказ в выдаче документа).',
            'Участвовать в рассмотрении вашего кейса на заседании комитета, которое проходит под председательством губернатора.',
            'Получить решение и контроль сроков его исполнения.'
          ]
        },
        {
          title: 'Шаг 5. Изучите Свод инвестиционных правил',
          purpose: 'понять точную последовательность действий от выбора участка до запуска объекта',
          actions: [
            'Перейти на страницу <a href="https://investregion174.ru/investstandart/rules/">Свод правил</a>.',
            'Ознакомиться с алгоритмами:<ul><li>как выбрать и забронировать участок;</li><li>как подать заявку на подключение к коммуникациям;</li><li>как оформить разрешения на строительство и ввод объекта в эксплуатацию.</li></ul>',
            'Скачать образцы документов (заявлений, технических условий).',
            'Подготовить комплект документов и начать оформление с поддержкой куратора из Агентства.'
          ]
        }
      ],
      results: [
        'выбрать участок',
        'получить сопровождение',
        'подключиться к инфраструктуре',
        'запустить бизнес в регионе с поддержкой властей'
      ]
    }
  }
}
</script>

<style scoped>
.home-page {
  padding: 2rem;
  background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
  min-height: 100vh;
}

.content-container {
  max-width: 1200px;
  margin: 0 auto;
}

.video-container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto 2rem;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.main-video {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

.steps-container {
  display: grid;
  gap: 2rem;
  margin-bottom: 3rem;
}

.step-card {
  background: white;
  border-radius: 12px;
  padding: 2rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease;
}

.step-card:hover {
  transform: translateY(-5px);
}

.step-title {
  color: #2c3e50;
  margin-bottom: 1.5rem;
  font-size: 1.5rem;
  border-bottom: 2px solid #3498db;
  padding-bottom: 0.5rem;
}

.purpose {
  margin-bottom: 1.5rem;
  padding: 1rem;
  background: #f8f9fa;
  border-radius: 8px;
}

.what-to-do {
  ol {
    padding-left: 1.5rem;
  }

  li {
    margin-bottom: 0.8rem;
  }

  ul {
    margin-top: 0.5rem;
    padding-left: 1.5rem;
  }
}

.result-section {
  background: white;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.result-section h2 {
  color: #2c3e50;
  margin-bottom: 1.5rem;
}

.result-section ul {
  list-style-type: none;
  padding-left: 0;
}

.result-section li {
  margin-bottom: 0.8rem;
  padding-left: 1.5rem;
  position: relative;
}

.result-section li::before {
  content: "•";
  color: #3498db;
  position: absolute;
  left: 0;
}

a {
  color: #3498db;
  text-decoration: none;
  transition: color 0.2s ease;
}

a:hover {
  color: #2980b9;
}

@media (max-width: 768px) {
  .home-page {
    padding: 1rem;
  }

  .step-card {
    padding: 1.5rem;
  }

  .step-title {
    font-size: 1.25rem;
  }
}
</style> 