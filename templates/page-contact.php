<?php 
/*
Template Name: Contact | Контакты
Template Post Type: page
*/
?>
<?php get_template_part('template-parts/header/header'); ?>

    <!-- contact -->
        <section class="contact">
            <div class="container">
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <a href="index.html">Главная</a>
                    <span>/</span>
                    <a href="contact.html" class="active">Контакты</a>
                </div>

                <div class="top">
                    <div class="info">
                        <div class="section_title">Контакты компании</div>
                        <div class="sub_title">Вы можете связаться с нами любым удобным способом или заказать звонок</div>
                    </div>
                    <a class="button open-modal-btn">
                        Заказать звонок
                    </a>
                </div>

                <div class="maps">
                     <!-- Office Map -->
                    <div class="map-block">
                        <div id="map1" class="map"></div>
                        <div class="info">
                            <div class="info_title">Адрес офиса магазина</div>
                            <div class="address">г. Москва, ул. Плеханова д.7, эт1, пом. 1, ком. 25</div>
                            <a href="tel:+74950236793">+7 495 023 67 93</a>
                            <a href="mailto:zakaz@galeoncase.ru">zakaz@galeoncase.ru</a>
                        </div>
                    </div>

                    <!-- Warehouse Map -->
                    <div class="map-block">
                        <div id="map2" class="map"></div>
                        <div class="info">
                            <div class="info_title">Адрес склада</div>
                            <div class="address">г. Москва, ул. Электродная 13С2А</div>
                            <a href="tel:+74950236793">+7 495 023 67 93</a>
                            <a href="mailto:zakaz@galeoncase.ru">zakaz@galeoncase.ru</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

<?php get_template_part( 'template-parts/footer/footer' )?>