<!-- footer -->
        <footer  id="contact">
            <div class="container">
                <div class="footer_row">
                    <div class="top">
                        <div class="logo">
                            <a href="/">
                                
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/footer_logo.svg" alt="">
                            </a>
                            <div class="logo_text">
                                <?= get_custom_field("field_68fd12ace6738"); ?>
                            </div>
                        </div>

                        <div class="nav_row">
                            <div class="nav_item">
                                <div class="title">
                                    <?= get_custom_field("field_68fd1b44cf70e"); ?>
                                </div>
                                <a href="catalog.html">Мини кейсы</a>
                                <a href="catalog.html">Средние кейсы</a>
                                <a href="catalog.html">Большие кейсы</a>
                                <a href="catalog.html">Длинные кейсы</a>
                                <a href="catalog.html">Кейсы для ноутбуков</a>
                                <a href="catalog.html">Контейнеры</a>
                            </div>


                            <div class="nav_item">
                                <div class="title">
                                    <?= get_field("field_68fd1b7acf70f", "option"); ?>
                                </div>
                                <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footer_right', // o'zingiz ro'yxatdan o'tkazgan joy
                                        'container' => false,
                                        'walker' => new Custom_Footer_Walker(),
                                    ]);
                                ?>
                            </div>


                            <div class="nav_item">
                                <div class="title">
                                    <?= get_custom_field("field_68fd1b8dcf710"); ?>
                                </div>
                                <span> <?= get_custom_field("field_68fd13ae5d592"); ?></span>
                                <div class="nav_item_block">
                                    <a class="link"  href="tel:<?= get_custom_field("field_68fd17734acfa"); ?>"><?= get_custom_field("field_68fd13755d58f"); ?></a>
                                </div>
                                <a class="link" href="mailto:<?= get_custom_field("field_68fd12cbe6739"); ?>"><?= get_custom_field("field_68fd12cbe6739"); ?></a>
                            </div>

                        </div>
                    </div>

                    <div class="bottom">
                        <div class="info">
                            <div class="rights text"><?= get_custom_field('field_68fd108a0136f'); ?></div>
                            <a href="<?= get_template_directory_uri(); ?>/assets/documents/Personal_Data_Processing_Extended.pdf" target="_blank" class="politics text"><?= get_custom_field('field_68fd10a801370'); ?></a>
                        </div>
                        <a href="#header" class="up_link"><?= get_custom_field('field_68fd10d401372'); ?></a>
                    </div>
                </div>
            </div>
        </footer>

            <button class="open-modal-btn-profile" data-modal="modal1">Open Modal 1</button>
            <button class="open-modal-btn-profile" data-modal="modal2">Open Modal 2</button>
            <button class="open-modal-btn-profile" data-modal="modal3">Open Modal 3</button>
            <button class="open-modal-btn-profile" data-modal="modal4">Open Modal 4</button>
            <button class="open-modal-btn-profile" data-modal="modal5">Open Modal 5</button>
            <button class="open-modal-btn-profile" data-modal="modal6">Open Modal 6</button>

    </div>

    <!-- Cookie Modal -->
    <div id="cookieModal">
        <div class="container">
            <div class="blog">
                <div class="title">Мы используем  <span>cookie-файлы</span> для улучшения работы сайта </div>
                <p>Используя этот сайт, вы даете согласие на обработку  <a href="#">персональных данных</a></p>
        
                <div class="accept_wrapper">
                    <a id="acceptCookies" class="accept_btn">Согласиться</a>
                </div>
            </div>
        </div>
    </div>

    <!-- application modal -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" id="modalBox">
            <button class="close-btn" id="closeModal"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="section_title">Оставить заявку</div>
            <div class="sub_title">
                Заполните форму, мы свяжемся и проконсультируем Вас в кратчайшие сроки
            </div>
            <form action="">
                <input required type="text" placeholder="Ваше Имя*">
                <div class="input_block">
                    <input required type="tel" id="phone1" placeholder="+7 999 999 99 99*">
                </div>
                <textarea name="" id="" placeholder="Комментарий"></textarea>
                <button>Оставить заявку</button>

                <!-- custom confirm -->
                <div class="confirm">
                    <label class="custom-checkbox">
                        <input required checked type="checkbox" id="confirm1">
                        <span class="checkmark"></span>
                    </label>
                    <label for="confirm1" class="text">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих <a  href="assets/documents/Personal_Data_Processing_Extended.pdf" target="_blank">персональных данных</a></label>
                </div>
            </form>
        </div>
    </div>

    <!-- search modal -->
    <div class="modal-overlay1" id="modalOverlay1">
        <div class="modal" id="modalBox1">
            <button class="close-btn" id="closeModal1"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

           <form class="header_search">
                <button  class="search_link"></button>
                <input type="text" name="search" placeholder="Поиск по сайту...">
            </form>
        </div>
    </div>

    <!-- login/register modal -->
    <div class="modal-overlay-profile" id="modal1">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="login_blog tab_blog active">
                <div class="section_title">Вход в личный кабинет</div>
                <div class="sub_title">
                    Введите ваш логин и пароль для входа 
                </div>
            </div>

            <div class="register_blog tab_blog">
                <div class="section_title">Регистрация</div>
                <div class="sub_title">
                    Пожалуйста, заполните необходимые поля 
                </div>
            </div>

            <div class="tab_buttons">
                <div class="tab_item login active" onclick="openTab('login',this)">Войти</div>
                <div class="tab_item register" onclick="openTab('register',this)">Регистрация</div>
            </div>

            <form action="" class="form-register form_item" id="form-register1">
                <input type="text" required placeholder="Имя">
                <input type="email" required placeholder="E-mail">

                <div class="password-wrapper">
                    <input required type="password" placeholder="Новый пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <div class="password-wrapper">
                    <input required type="password" placeholder="Повторите пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <button>Зарегистрироваться</button>

                <div class="message">Уже есть аккаунт? <span onclick="openTab('login',this)"> Войти</span></div>

                <!-- custom confirm -->
                <div class="confirm">
                    <label class="custom-checkbox">
                        <input required checked type="checkbox" id="confirmprofile1">
                        <span class="checkmark"></span>
                    </label>
                    <label for="confirmprofile1" class="text">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих <a  href="assets/documents/Personal_Data_Processing_Extended.pdf" target="_blank">персональных данных</a></label>
                </div>
            </form>

            <form action="" class="form-login form_item active" id="form-login1">
                <input required type="email" placeholder="E-mail">

                <div class="password-wrapper">
                    <input required type="password" placeholder="Пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>
        
                <button>Войти</button>

                <div class="message">Забыли пароль? <span class="open-modal-btn-profile" data-modal="modal2">Восстановить</span></div>
            </form>
        </div>
    </div>

    <!-- password reset modal -->
    <div class="modal-overlay-profile" id="modal2">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="section_title">Восстановление пароля</div>
            <div class="sub_title">
                Введите email, который вы использовали при регистрации, и мы отправим вам ссылку для сброса пароля. 
            </div>


            <form action="" class="form-register">
                <input required type="email" placeholder="E-mail">

                <button type="submit">Отправить ссылку</button>

                <div  class="back_link open-modal-btn-profile" data-modal="modal1">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                    <span>Вернуться ко входу</span>
                </div>
            </form>
        </div>
    </div>

    <!-- check the email modal -->
    <div class="modal-overlay-profile" id="modal3">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="section_title">Проверьте почту</div>

            <div class="img_container">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/modal_message_send_iocn.svg" alt="">
            </div>

            <div class="sub_title">
                Мы отправили инструкцию по восстановлению пароля на адрес <span>[email пользователя]</span>.
            </div>
        </div>
    </div>

    <!-- confirm the email modal -->
    <div class="modal-overlay-profile" id="modal4">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="section_title">Проверьте почту</div>

            <div class="img_container">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/modal_message_send_iocn.svg" alt="">
            </div>

            <div class="sub_title">
                Мы отправили инструкцию по восстановлению пароля на адрес <span>[email пользователя]</span>. <br> Пожалуйста, перейдите по ней, чтобы активировать ваш аккаунт.
            </div>

            <form action="">
                <button style="width: auto;">Подтвердить</button>
            </form>

            <div class="message" style="margin-bottom: 0;">
                Не пришло письмо? Проверьте папку «спам»
            </div>
        </div>
    </div>

    <!-- setting a new password modal -->
    <div class="modal-overlay-profile" id="modal5">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="section_title">Создайте новый пароль</div>

            <form action="" class="form-register ">
                <div class="password-wrapper">
                    <input required type="password" placeholder="Пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <div class="password-wrapper">
                    <input required type="password" placeholder="Повторите пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <button>Сохранить пароль</button>

                <div class="message">Уже есть аккаунт? <span class="open-modal-btn-profile" data-modal="modal1"> Войти</span></div>

            </form>
        </div>
    </div>

    <!-- login/register with the message:Пароль успешно изменен! modal -->
    <div class="modal-overlay-profile" id="modal6">
        <div class="modal" id="modalBox2">
            <button class="close-btn" id="profileModalClose"><img src="<?= get_template_directory_uri(); ?>/assets/images/modal_close_icon.svg" alt=""></button>

            <div class="login_blog tab_blog active">
                <div class="section_title">Вход в личный кабинет</div>
                <div class="sub_title">
                    Введите ваш логин и пароль для входа 
                </div>
            </div>

            <div class="register_blog tab_blog">
                <div class="section_title">Регистрация</div>
                <div class="sub_title">
                    Пожалуйста, заполните необходимые поля 
                </div>
            </div>

            <div class="tab_buttons">
                <div class="tab_item login active" onclick="openTab('login',this)">Войти</div>
                <div class="tab_item register" onclick="openTab('register',this)">Регистрация</div>
            </div>

            <div class="message second">Пароль успешно изменен!</div>

            <form action="" class="form-register form_item" id="form-register">
                <input type="text" required placeholder="Имя">
                <input type="email" required placeholder="E-mail">

                <div class="password-wrapper">
                    <input required type="password" placeholder="Новый пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <div class="password-wrapper">
                    <input required type="password" placeholder="Повторите пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>

                <button>Зарегистрироваться</button>

                <div class="message">Уже есть аккаунт? <span onclick="openTab('login',this)"> Войти</span></div>

                <!-- custom confirm -->
                <div class="confirm">
                    <label class="custom-checkbox">
                        <input required checked type="checkbox" id="confirmprofile">
                        <span class="checkmark"></span>
                    </label>
                    <label for="confirmprofile" class="text">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих <a  href="assets/documents/Personal_Data_Processing_Extended.pdf" target="_blank">персональных данных</a></label>
                </div>
            </form>

            <form action="" class="form-login form_item active" id="form-login">
                <input required type="email" placeholder="E-mail">

                <div class="password-wrapper">
                    <input required type="password" placeholder="Пароль" class="password-input">
                    <span class="material-icons toggle-password">visibility_off</span>
                </div>
        
                <button>Войти</button>

                <div class="message">Забыли пароль? <span class="open-modal-btn-profile" data-modal="modal2">Восстановить</span></div>
            </form>
        </div>
    </div>

	<?php wp_footer(); ?>

    
</body>

</html>