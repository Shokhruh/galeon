<?php get_template_part( 'template-parts/header/header' )?>

		<!-- hero -->
        <section class="hero">
            <div class="container">
                <div class="main_title">
                    <?= get_field('hero_section')['title']; ?>
                </div>

                <div class="sub_title">
                    <?= get_field('hero_section')['info']; ?>
                </div>

                <a href="<?= get_field('hero_section')['button_link']; ?>" class="button">
                    <?= get_field('hero_section')['button_text']; ?>
                </a>

                <div class="information">
                    <!-- info item -->
                    <div class="info_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero_info1.svg" alt="">
                        <div class="text">Класс защиты IP65 и выше</div>
                    </div>

                    <!-- info item -->
                    <div class="info_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero_info2.svg" alt="">
                        <div class="text">Мягкий поропласт</div>
                    </div>

                    <!-- info item -->
                    <div class="info_item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero_info3.svg" alt="">
                        <div class="text">Производятся в России</div>
                    </div>
                </div>

                <a class="hero_link" href="#">
                    
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/straight_arrow.svg" alt="">
                    <span><?= get_field('hero_section')['slider_text']; ?></span>
                </a>
                

                <!-- Dots with tooltips -->
                <div class="dot first">
                    <div class="tooltip"><?= get_field('hero_section')['case_info_1']; ?></div>
                </div>

                <div class="dot second" >
                    <div class="tooltip"><?= get_field('hero_section')['case_info_2']; ?></div>
                </div>

                <div class="dot third" >
                    <div class="tooltip"><?= get_field('hero_section')['case_info_3']; ?></div>
                </div>

                <div class="dot fourth" >
                    <div class="tooltip"><?= get_field('hero_section')['case_info_4']; ?></div>
                </div>
            </div>
        </section>

		<!-- production -->
        <section class="production">
            <div class="container">
                <!-- Swiper Container -->
                <div class="swiper preproduction">
                    <div class="section_title">
                        <?= get_field('production_section')['title'];?>
                    </div>
                    <div class="swiper-wrapper">
                        <!-- slide -->
                        <a href="tool.html" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production1.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Производство кейсов и контейнеров
                                </div>
                                <div class="info">Разрабатываем и производим ударопрочные кейсы и контейнеры по индивидуальным техническим требованиям для любых отраслей и условий эксплуатации</div>
                            </div>
                        </a>
                        
                        <!-- slide -->
                        <a href="tool.html#tool2" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production2.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Производство ложементов любой сложности
                                </div>
                                <div class="info">Гарантируем идеальную фиксацию и защиту каждого элемента. Проектируем и изготавливаем ложементы из различных материалов, точно повторяющие контуры вашего оборудования</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool3" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production3.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Кастомные MOLLE-панели
                                </div>
                                <div class="info">Обеспечиваем гибкость и функциональность внутреннего пространства. Разрабатываем и интегрируем MOLLE-панели для удобного и надежного крепления снаряжения</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool4" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production4.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Интерфейсные (I/O) панели
                                </div>
                                <div class="info">Интегрируем оборудование во внешнюю среду. Проектируем и монтируем интерфейсные панели с любым набором разъемов, обеспечивая герметичность и удобство подключения.</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool5" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production5.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Приборные панели, Конструктивные элементы из металла
                                </div>
                                <div class="info">Создаем готовые к работе изделия. Изготавливаем и монтируем приборные панели и конструктивные элементы из металла, превращая кейс в полноценный функциональный комплекс.</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool6" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production6.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Пульты управления
                                </div>
                                <div class="info">Предоставляем полный контроль над вашими системами. Разрабатываем и интегрируем в защитные кейсы и шкафы эргономичные и надежные пульты управления для стационарного и мобильного использования.</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool7" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production7.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Системы охлаждения и системы нагрева
                                </div>
                                <div class="info">Проектируем и устанавливаем активные и пассивные системы термостатирования для поддержания заданного режима.</div>
                            </div>
                        </a>

                        <!-- slide -->
                        <a href="tool.html#tool8" class="swiper-slide">
                            <div class="top">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/production8.png" alt="">
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Шкафы металлические и аксессуары для кейсов и панелей
                                </div>
                                <div class="info">Предлагаем решения для размещения и защиты аппаратуры. Производим телекоммуникационные и промышленные шкафы, а также необходимые аксессуары для их оснащения.</div>
                            </div>
                        </a>
                    </div>

                    <div class="navigation">
                        <!-- Navigation buttons -->
                        <div class=" swiper-button-prev navigation_item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                        </div>
                        <div class=" swiper-button-next navigation_item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/navigation_item_arrow.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- products -->
        <section class="products" id="products">
            <div class="container">
                <div class="top">
                    <div class="section_title"><?= get_field('product_section')['title'] ?></div>
                    <a href="catalog.html" class="download">
                        Смотреть каталог
                    </a>
                </div>

                <div class="product_row">
                    <!-- product item -->
                    <a href="catalog.html" class="product_item">
                        <div class="title">Мини кейсы</div>
                        <div class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></div>
                    </a>

                     <!-- product item -->
                    <a href="catalog.html" class="product_item">
                        <div class="title">Средние кейсы</div>
                        <div class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></div>
                    </a>

                     <!-- product item -->
                    <a href="catalog.html" class="product_item">
                        <div class="title">Большие кейсы</div>
                        <div  class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></div>
                    </a>

                     <!-- product item -->
                    <a href="catalog.html" class="product_item">
                        <div class="title">Длинные кейсы</div>
                        <div class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></div>
                    </a>

                     <!-- product item -->
                    <a href="catalog.html" class="product_item">
                        <div class="title">Кейсы для ноутбуков</div>
                        <div  class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></div>
                    </a>

                     <!-- product item -->
                    <div class="product_item">
                        <div>
                            <div class="title">Контейнеры</div>
                            <div class="info_row">
                                <a href="#" class="info_item">Контейнеры СМС</a>
                                <a href="#" class="info_item">Контейнеры ПСС</a>
                                <a href="#" class="info_item">Рабочие мобильные места</a>
                                <a href="#" class="info_item">Контейнеры RACK</a>
                                <a href="#" class="info_item">Контейнеры СТС</a>
                                <a href="#" class="info_item">Мобильный госпиталь</a>
                            </div>
                        </div>
                        <a href="catalog.html"  class="link"><img src="<?= get_template_directory_uri(); ?>/assets/images/link_arrow.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </section>

        <!-- advantages -->
        <div class="advantages" id="information">
            <div class="container">
                <a href="production.html" class="section_title">
                    <?= get_field('advantages_section')['title']; ?>
                </a>
                <div class="sub_title">
                    <?= get_field('advantages_section')['info']; ?> 
                </div>

                <div class="button open-modal-btn">
                    <?= get_field('advantages_section')['modal_text']; ?>
                </div>

                <div class="advantages_row">
                    <?php 
						global $post;

						$query = new WP_Query( array(
							'post_type' => 'advantage',
							'posts_per_page' => 4,
							'order' => 'ASC',
						) );

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								?>
									<!-- advantage item -->
                                    <a href="/production" class="advantage_item">
                                        <img src="<?php the_post_thumbnail_url()?>" alt="">
                                        <div class="info_row">
                                            <div class="title"><?php the_title(); ?></div>
                                            <div class="info"><?php the_content(); ?></div>
                                        </div>
                                    </a>
								<?php
							}
						} else {
							echo '<p class="text-danger">No Advantages found.</p>';
						}
					?>
                </div>

              
            </div>
        </div>

        <!-- application -->
        <section class="application" >
            <div class="container">
                <div class="application_row">
                    <div class="left">
                        
                    </div>
                    <div class="right">
                    
                        <div class="section_title"><?= get_custom_field('field_68fd44facd8cb') ?></div>
                        <div class="sub_title">
                            <?= get_custom_field('field_68fd4508cd8cc'); ?>
                        </div>
                        <?= do_shortcode( '[contact-form-7 id="e10ddee" title="homepage contact form"]' )?>
                    </div>
                </div>
            </div>
        </section>

<?php get_template_part('template-parts/footer/footer'); ?>
