<?php get_template_part('template-parts/header/header'); ?>

   <div class="container">
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <a href="index.html">Главная</a>
                <span>/</span>
                <a href="cart.html">Корзина</a> 
                <span>/</span>
                <a href="#" class="active">Оформление заказа</a>
            </div>
       </div>

       <!-- buy -->
       <section class="buy">
            <div class="container">
                <div class="section_title">
                    Оформление заказа
                </div>
                <div class="sub_title">Пожалуйста, заполните простую форму и мы свяжемся с вами в ближайшее время</div>

                <form action="">
                    <div class="input_row">
                        <input required type="text" placeholder="Имя*">
                        <input required type="tel" id="phone" placeholder="Телефон*">

                        <select id="delivery_method">
                            <option value="manager" selected>По согласованию с менеджером</option>
                            <option value="courier">Доставка курьером</option>
                            <option value="pickup">Самовывоз</option>
                        </select>
                    </div>

                    <!-- Поля для доставки -->
                    <div id="courier_fields" class="courier_fields">
                        <input type="text"  id="city" placeholder="Город*">
                        <input type="text"  id="street" placeholder="Улица и дом*">
                        <input type="text" placeholder="Корпус">
                        <input type="text" placeholder="Квартира">
                        <input type="text" placeholder="Подъезд">
                        <input type="text" placeholder="Этаж">
                        <textarea placeholder="Комментарий к доставке"></textarea>
                    </div>

                    <!-- Инфо о самовывозе -->
                    <div id="pickup_info" class="pickup_info">
                        <p>
                            Адрес склада: <b>Электродная улица, 13с2А</b>.<br>
                            Перед самовывозом необходимо согласовать получение с менеджером.
                        </p>
                    </div>

                    <div class="bottom">
                        <button class="button">
                            Оставить заявку
                        </button>

                        <div class="text">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих персональных данных</div>
                    </div>
                </form>
            </div>
       </section>

        <!-- product card -->
        <section class="product_card cart">

            <div class="container">
                
                <div class="top">
                    <div class="info">
                        <div class="section_title">Состав заказа</div>
                    </div>
                </div>

                <div class="product_card_row">
                    <!-- product card -->
                    <div class="product_card_item">

                        <div class="top_buttons">
                            <div class="like_icon"></div>
                            <div class="delete_icon"></div>
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
                                <!-- <a class="cart_btn">
                                    <img src="/assets/images/cart_icon.svg" alt="">
                                    <span>В корзину</span>
                                </a> -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section> 

<?php get_template_part( 'template-parts/footer/footer' )?>