<?php get_template_part('template-parts/header/header'); ?>

    <!-- product card -->
        <section class="product_card">

            <div class="container">
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <a href="index.html">Главная</a>
                    <span>/</span>
                    <a href="favourite.html" class="active">Избранное</a>
                </div>

                <div class="top">
                    <div class="info">
                        <div class="section_title">Избранное</div>
                    </div>
                    <!-- <a href="#" class="download">
                        Очистить корзину
                    </a> -->
                </div>

                <div class="product_card_row">
                    <!-- product card -->
                    <div class="product_card_item">

                        <div class="top_buttons">
                            <div class="like_icon active"></div>
                        </div>

                        <a href="product.html" class="left">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt="">
                        </a>

                        

                        <div class="right">
                            <div class="info_row">
                                <a href="product.html" class="title">Галеон  7520 пустой</a>

                                <div class="characteristics">
                                    <!-- item -->
                                    <div class="item">
                                        <div class="name">Артикул</div>
                                        <div class="value">ГАЛ7520.Ч.П</div>
                                    </div>
                                    
                                    <!-- item -->
                                    <div class="item">
                                        <div class="name">Цвет</div>
                                        <div class="value">Черный</div>
                                    </div>

                                    <!-- item -->
                                    <div class="item">
                                        <div class="name">Кол-во:</div>
                                       <div class="cart_controls">
                                            <div class="qty_btn minus" id="minus">-</div>
                                            <input type="number" max="1000" min="1" value="1" id="qty" class="qty">
                                            <div class="qty_btn plus" id="plus">+</div>
                                        </div>
                                    </div>

                                    <!-- item -->
                                    <div class="item">
                                        <div class="name">Стоимость:</div>
                                        <div class="value">По запросу</div>
                                    </div>
                                </div>
                            </div>

                            <div class="button">
                                <a class="cart_btn">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                    <span>В корзину</span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

<?php get_template_part( 'template-parts/footer/footer' )?>