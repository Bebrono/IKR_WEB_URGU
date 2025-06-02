<?php
/**
 * Template part for displaying investment rules content
 */
?>

<div class="rules-page">
    <h2>Краткое содержание алгоритмов для инвесторов в Челябинской области</h2>

    <div class="main-image-container">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('large', array('class' => 'main-image'));
        } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/svod.jpg" alt="Свод инвестиционных правил" class="main-image">';
        }
        ?>
    </div>

    <div class="content">
        <section class="algorithm-section">
            <h3>1. Подключение к газораспределительным сетям</h3>
            <div class="algorithm-content">
                <div class="steps">
                    <h4>Шаги:</h4>
                    <ul>
                        <li>Подача заявки на подключение (3 рабочих дня)</li>
                        <li>Заключение договора с техническими условиями (до 30 рабочих дней)</li>
                        <li>Выполнение условий договора (проектные и строительные работы)</li>
                        <li>Получение акта о готовности и заключение договоров на ТО и поставку газа</li>
                        <li>Подписание акта о подключении</li>
                    </ul>
                </div>
                <div class="info-block">
                    <div class="timeline">
                        <h4>Сроки:</h4>
                        <p>От 135 дней до 2 лет</p>
                    </div>
                    <div class="documents">
                        <h4>Документы:</h4>
                        <ul>
                            <li>Ситуационный план</li>
                            <li>Топографическая карта</li>
                            <li>Правоустанавливающие документы</li>
                            <li>Расчет расхода газа</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>2. Подключение к теплоснабжению</h3>
            <div class="algorithm-content">
                <div class="steps">
                    <h4>Шаги:</h4>
                    <ul>
                        <li>Запрос информации о возможности подключения (5 рабочих дней)</li>
                        <li>Получение технических условий (7 рабочих дней)</li>
                        <li>Заключение договора (20 рабочих дней)</li>
                        <li>Выполнение работ и подписание акта о подключении (до 18 месяцев)</li>
                    </ul>
                </div>
                <div class="info-block">
                    <div class="timeline">
                        <h4>Сроки:</h4>
                        <p>До 3 лет для крупных проектов</p>
                    </div>
                    <div class="documents">
                        <h4>Документы:</h4>
                        <ul>
                            <li>Правоустанавливающие документы</li>
                            <li>Ситуационный план</li>
                            <li>Топографическая карта</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>3. Подключение к электросетям</h3>
            <div class="algorithm-content">
                <div class="business-types">
                    <div class="business-type">
                        <h4>Для малого и среднего бизнеса (до 150 кВт):</h4>
                        <ul>
                            <li>Подача заявки (3 рабочих дня)</li>
                            <li>Заключение договора (17 рабочих дней)</li>
                            <li>Выполнение работ (до 1 года)</li>
                        </ul>
                    </div>
                    <div class="business-type">
                        <h4>Для крупного бизнеса (свыше 150 кВт):</h4>
                        <p>Сроки увеличены (до 2 лет), требуется согласование с системным оператором</p>
                    </div>
                </div>
                <div class="documents">
                    <h4>Документы:</h4>
                    <ul>
                        <li>План расположения энергопринимающих устройств</li>
                        <li>Правоустанавливающие документы</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>4. Получение земельного участка</h3>
            <div class="algorithm-content">
                <div class="options">
                    <div class="option">
                        <h4>Без торгов:</h4>
                        <ul>
                            <li>Подача заявления (1 рабочий день)</li>
                            <li>Принятие решения (20 календарных дней)</li>
                            <li>Кадастровые работы и регистрация (до 7 рабочих дней)</li>
                        </ul>
                    </div>
                    <div class="option">
                        <h4>На торгах:</h4>
                        <ul>
                            <li>Проведение аукциона (30 календарных дней)</li>
                            <li>Заключение договора аренды (40 календарных дней)</li>
                        </ul>
                    </div>
                </div>
                <div class="documents">
                    <h4>Документы:</h4>
                    <ul>
                        <li>Схема расположения участка</li>
                        <li>Правоустанавливающие документы</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>5. Разрешение на строительство</h3>
            <div class="algorithm-content">
                <div class="steps">
                    <h4>Шаги:</h4>
                    <ul>
                        <li>Получение градостроительного плана (14 дней)</li>
                        <li>Подготовка документации по планировке территории (15 рабочих дней)</li>
                        <li>Прохождение экспертизы (42 рабочих дня)</li>
                        <li>Получение разрешения (5 рабочих дней)</li>
                    </ul>
                </div>
                <div class="documents">
                    <h4>Документы:</h4>
                    <ul>
                        <li>Проектная документация</li>
                        <li>Правоустанавливающие документы</li>
                        <li>Заключения экспертиз</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>6. Разрешение на ввод объекта в эксплуатацию</h3>
            <div class="algorithm-content">
                <div class="steps">
                    <h4>Шаги:</h4>
                    <ul>
                        <li>Подготовка актов и заключений (сроки по договору)</li>
                        <li>Подача заявления (1 рабочий день)</li>
                        <li>Получение разрешения (5 рабочих дней)</li>
                    </ul>
                </div>
                <div class="documents">
                    <h4>Документы:</h4>
                    <ul>
                        <li>Акт приемки</li>
                        <li>Технический план</li>
                        <li>Заключения надзорных органов</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="algorithm-section">
            <h3>7. Оформление прав собственности</h3>
            <div class="algorithm-content">
                <div class="steps">
                    <h4>Шаги:</h4>
                    <ul>
                        <li>Кадастровый учет (5 рабочих дней)</li>
                        <li>Регистрация прав (7 рабочих дней)</li>
                    </ul>
                </div>
                <div class="documents">
                    <h4>Документы:</h4>
                    <ul>
                        <li>Разрешение на ввод</li>
                        <li>Правоустанавливающие документы</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="conclusion">
            <div class="conclusion-content">
                <h3>Итог</h3>
                <div class="conclusion-text">
                    <p>
                        Все алгоритмы направлены на упрощение процедур для инвесторов, с четкими сроками и перечнем документов. 
                        Для ускорения процессов рекомендуется использовать электронные сервисы и заранее готовить необходимые документы.
                    </p>
                </div>
                <div class="highlight">
                    <div class="highlight-inner">
                        <strong>Челябинская область создает комфортные условия для реализации инвестиционных проектов!</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="downloads">
            <h3>Документы для скачивания</h3>
            <div class="downloads-container">
                <a href="#" class="download-link">
                    <span class="download-text">Полный текст правил (PDF)</span>
                </a>
                <a href="#" class="download-link">
                    <span class="download-text">Приложения к правилам (ZIP)</span>
                </a>
                <a href="#" class="download-link">
                    <span class="download-text">Формы заявлений (DOC)</span>
                </a>
            </div>
        </section>
    </div>
</div> 