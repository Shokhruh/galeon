<?php get_template_part('template-parts/header/header'); ?>

    <div class="container">
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <a href="index.html">Главная</a>
                <span>/</span>
                <a href="#" class="active">Профиль</a>
            </div>
       </div>

       <!-- profile -->
       <section class="profile">
            <div class="container">
                <div class="section_title">
                    Профиль
                </div>
                <div class="main">
                    <div class="title">Личная информация</div>
                    <form action=""  class="first">
                        <input type="text" placeholder="Имя">
                        <input type="email" placeholder="E-mail">
                        <div class="button_cover">
                            <button>Сохранить изменения</button>
                        </div>
                    </form>

                    <div class="title">Изменить пароль</div>
                    <form action="">
                        <!-- <input type="password" placeholder="Новый пароль">
                        <input type="password" placeholder="Повторите пароль"> -->
                         <div class="password-wrapper">
                            <input type="password" placeholder="Новый пароль" class="password-input">
                            <span class="material-icons toggle-password">visibility_off</span>
                        </div>

                        <div class="password-wrapper">
                            <input type="password" placeholder="Повторите пароль" class="password-input">
                            <span class="material-icons toggle-password">visibility_off</span>
                        </div>
                        <div class="button_cover">
                            <button>Изменить пароль</button>
                        </div>
                    </form>

                    <div class="action_links">
                        <a href="#">Выйти</a>
                        <a href="#">Удалить аккаунт</a>
                    </div>

                </div>
            </div>
       </section>

<?php get_template_part( 'template-parts/footer/footer' )?>