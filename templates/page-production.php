<?php get_template_part('template-parts/header/header'); ?>

    <!-- hero -->
        <section class="hero page">
            <div class="container">

                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <a href="index.html">Главная</a>
                    <span>/</span>
                    <a href="production.html" class="active">Дополнительные аксессуары</a>
                </div>

                <div class="main_title">
                    Производство <br>
                    ударопрочных кейсов и контейнеров
                </div>

                <div class="sub_title">
                    Основа каждого нашего изделия - глубокое понимание физики процессов и внимание к деталям. Наши решения обеспечивают полную герметичность со степенью защиты IP67, оснащены автоматическим клапаном выравнивания давления и созданы из высокопрочных полимеров.
                </div>

                <div  class="button  open-modal-btn">
                    Обсудить проект
                </div>
            </div>
        </section>

        <!-- order -->
        <section class="order">
            <div class="container">
                <div class="section_title">
                    Производство любой сложности под заказ
                </div>
                <div class="sub_title">Мы предлагаем широкие возможности по адаптации и оснащению кейсов, позволяя создать изделие, идеально соответствующее вашим целям.</div>

                <div class="order_row">
                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order1.svg" alt="">
                        <div class="title">Выбор материала</div>
                        <div class="info">Мы подбираем марку полимера не только по ударопрочности, но и по химической стойкости и весу.</div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order2.svg" alt="">
                        <div class="title">Нанесение логотипов и маркировки</div>
                        <div class="info">Ваш бренд или техническая информация будут надежно нанесены на корпус. Мы используем методы трафаретной печати или объемных наклеек, которые обеспечивают высокую стойкость изображения к истиранию и внешним воздействиям.</div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order3.svg" alt="">
                        <div class="title">Экранирование от электромагнитных помех (ЭМП/EMI)</div>
                        <div class="info">Для защиты высокочувствительной электроники мы наносим на внутреннюю поверхность корпуса специализированное токопроводящее покрытие. Это создает клетку Фарадея, эффективно защищающую ваше оборудование </div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order4.svg" alt="">
                        <div class="title">Дополнительная фурнитура и колесные системы</div>
                        <div class="info">Кейс может быть оснащен различными типами ручек (включая телескопические), усиленными замками-защелками и надежными колесами для удобства транспортировки тяжелого оборудования.</div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order5.svg" alt="">
                        <div class="title">Интеграция панельных рамок и крепежных элементов</div>
                        <div class="info">Для легкой и надежной установки ваших приборных панелей мы можем интегрировать в корпус специальные панельные рамки. Также мы можем установить внутренние крепежные точки (боссы) в точном соответствии с вашими схемами.</div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/order6.svg" alt="">
                        <div class="title">Интеграция комплексных систем</div>
                        <div class="info">Наше конструкторское бюро и производственные мощности позволяют реализовать проекты любой сложности, где стандартного решения недостаточно. Мы не просто дорабатываем кейс — мы создаем с нуля комплексное изделие.</div>
                    </div>

                    <!-- order item -->
                    <div class="order_item">
                        <a class="button open-modal-btn">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- example -->
        <section class="example">
            <div class="container">
                <div class="section_title">
                    Примеры реализуемых <br> нами доработок:
                </div>

                <div class="example_row">
                    <!-- example item -->
                    <div class="example_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/example1.jpg" alt="">
                        <div class="bottom">
                            <div class="title">Кейсы с интегрированными приборными панелями:</div>
                            <div class="info">Превращаем защитный кейс в полноценное рабочее место оператора или мобильный измерительный комплекс.</div>
                        </div>
                    </div>

                    <!-- example item -->
                    <div class="example_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/example2.jpg" alt="">
                        <div class="bottom">
                            <div class="title">Кейсы с утопленными панелями разъемов:</div>
                            <div class="info">Обеспечиваем удобное и безопасное подключение оборудования, сохраняя герметичность и ударопрочность корпуса. Защитная крышка предотвращает повреждение интерфейсов при транспортировке.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- application -->
        <section class="application page" >
            <div class="container">
                <div class="application_row">
                    <div class="left">
                    </div>
                    <div class="right">
                        <div class="section_title">Ваша задача требует больше, чем производство кейсов?</div>
                        <div class="sub_title">
                            Обсудите технические детали с нашими инженерами. Мы предложим решение, основанное на глубоком понимании технологий и материалов.
                        </div>
                        <form action="">
                            <input type="text" placeholder="Ваше Имя*">
                            <div class="input_block">
                                <input type="tel" id="phone" placeholder="+7 999 999 99 99*">
                            </div>
                            <textarea name="" id="" placeholder="Комментарий"></textarea>
                            <button>Оставить заявку</button>

                            <!-- custom confirm -->
                            <div class="confirm">
                                <label class="custom-checkbox">
                                    <input type="checkbox" id="confirm">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="confirm" class="text">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих <a  href="assets/documents/Personal_Data_Processing_Extended.pdf" target="_blank">персональных данных</a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php get_template_part( 'template-parts/footer/footer' )?>