<?php get_template_part('template-parts/header/header'); ?>

    <!-- product -->
        <section class="product">
            <div class="container">
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <a href="index.html">Главная</a>
                    <span>/</span>
                    <a href="catalog.html">Каталог</a>
                    <span>/</span>
                    <a href="product.html" class="active">Галеон  7520 пустой</a>
                </div>

                <div class="product_view">
                    <div class="gallery">
                        <!-- Left thumbnails -->
                        <div class="swiper thumbs-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                            </div>
                        </div>

                        <!-- Main image -->
                        <div class="swiper main-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                                <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/product_view.svg" alt=""></div>
                            </div>
                            <!-- Arrows -->
                            <div class="swiper-button-next "></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <a href="catalog.html" class="back_link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                            <span>Назад</span>
                        </a>
                    </div>

                    <div class="information">
                        <div class="main_title">Галеон  7520 пустой</div>
                        <div class="code">Артикул: ГАЛ7520.Ч.П</div>

                        <div class="characteristics">
                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Цвет:</div>
                                <div class="value">Черный</div>
                            </div>

                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Внутренняя длина:</div>
                                <div class="value">241 мм</div>
                            </div>

                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Внутренняя ширина:</div>
                                <div class="value">191 мм</div>
                            </div>

                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Внутренняя высота:</div>
                                <div class="value">184 мм</div>
                            </div>

                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Вес:</div>
                                <div class="value">1.5кг</div>
                            </div>

                            <!-- character item -->
                            <div class="character_item">
                                <div class="name">Вариант::</div>
                                <div class="value">Пустой</div>
                            </div>
                        </div>

                        <div class="price">
                            Цена:
                            <span>по запросу</span>
                        </div>

                        <div class="cart_controls">
                            <div class="quantity">
                                <div class="qty_btn minus" id="minus">-</div>
                                <input type="number" max="1000" min="1" value="1" id="qty" class="qty">
                                <div class="qty_btn plus" id="plus">+</div>
                            </div>

                            <div class="button_container">
                                <a class="cart_btn">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                    <span>В корзину</span>
                                </a>
                            </div>

                            <div class="button_container">
                                <a class="favourite like_icon">
                                    <span>В избранное</span>
                                </a>
                            </div>

                        </div>
                        
                    </div>
                </div>

            </div>
        </section>

        <!-- recommended products -->
        <section class="production recomend_products">
            <div class="container">
                <!-- Swiper Container -->
                <div class="swiper envy">
                    <div class="section_title">
                        Смотрите так же:
                    </div>
                    <div class="swiper-wrapper">
                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_1.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_1.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_1.png" alt="case img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_2.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_2.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_2.png" alt="case img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_3.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_3.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_3.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_4.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_4.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_4.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_5.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_5.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_5.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_6.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_6.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_6.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_7.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_7.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_7.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_8.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_8.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_8.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- slide -->
                        <div class="swiper-slide">
                            <!-- catalog item -->
                            <div class="catalog_item">
                                <div class="top_block">
                                    <div class="like_icon"></div>

                                    <div class="swiper catalogSwiper">
                                        <a href="product.html" class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_9.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_9.png" alt="case img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product_item_9.png" alt="case img">
                                            </div>
                                        </a>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                                <div class="info_block">
                                    <a href="product.html" class="title">Галеон 0021 пустой</a>
                                    <a href="product.html" class="dimensions">
                                        <span>Внутренние габариты:</span><br>
                                        330 мм/234 мм/152 мм
                                    </a>

                                    <a href="product.html" class="dimensions">
                                    <span>Цена:</span> <br>
                                        24 000₽
                                    </a>

                                    <div class="cart_controls">
                                        <div class="qty_btn minus">-</div>
                                        <input type="number" max="1000" min="1" value="1" class="qty">
                                        <div class="qty_btn plus">+</div>

                                        <div class="cart_btn">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="navigation">
                        <!-- Navigation buttons -->
                        <div class=" swiper-button-prev navigation_item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                        </div>
                        <div class=" swiper-button-next navigation_item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                        </div>
                    </div>
                    
                     <!-- Pagination -->
                    <div class="swiper-pagination pagination_block"></div>
                </div>
            </div>
        </section>

<?php get_template_part( 'template-parts/footer/footer' )?>