<?php get_header(); ?>
        <section class="section first_section">
            <div class="swiper first-container">
                <div class="swiper-wrapper">
                    <?php
                    $first_slider = CFS()->get('first_slider');
                    foreach($first_slider as $first_slide){?>
                    <img src="<?php echo $first_slide['image'];?>" alt="" class="swiper-slide first-slide">
                    <?php }?>
                </div>
                <div class="swiper-pagination first-pagination"></div>
                <div class="swiper-button-prev first-button-prev"></div>
                <div class="swiper-button-next first-button-next"></div>
              </div>
              <?php
                $first_titles = CFS()->get('first_titles');
                foreach($first_titles as $first_title){?>
                    <h2 class="first-title title"><?php echo $first_title['first_title']; ?></h2>
                <?php }?>
        </section>
        <section class="section spring">
            <div class="spring__inner inner">
            <?php
                $second_titles = CFS()->get('second_titles');
                foreach($second_titles as $second_title){?>
                    <h2 class="spring__title title"><?php echo $second_title['second_title']; ?></h2>
                <?php }?>
                <div class="spring__block">
                    <div class="spring__image">
                        <img src="<?php echo CFS()->get('spring_image'); ?>" class="spring__img">
                    </div>
                    <div class="spring__desc">
                        <p class="spring__text"><?php echo CFS()->get('spring_desc'); ?>
                            <br/><strong style="margin: 20px 0; display: inline-block;"><?php echo CFS()->get('spring_title'); ?></strong></p>
                            <ul class="spring__list">
                            <?php
                            $spring_items = CFS()->get('spring_items');
                            foreach($spring_items as $spring_item){?>
                                <li class="spring__item"><?php echo $spring_item['spring_item']; ?></li>
                      <?php }?>
                            </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="ground section">
            <h2 class="title ground__title"><?php echo CFS()->get('ground_title'); ?></h2>
                <div class="swiper ground-container">
                    <div class="swiper-wrapper">
                    <?php
                        $ground_images = CFS()->get('ground_images');
                        foreach($ground_images as $ground_image){?>
                            <img src="<?php echo $ground_image['ground_image']; ?>" alt="" class="swiper-slide ground-slide">
                    <?php }?>
                    </div>
                    <div class="swiper-pagination ground-pagination"></div>
                    <div class="swiper-button-prev ground-button-prev"></div>
                    <div class="swiper-button-next ground-button-prev"></div>
                  </div>
                  <?php
                        $winter_titles = CFS()->get('winter_titles');
                        foreach($winter_titles as $winter_title){?>
                            <h2 class="first-title title"><?php echo $winter_title['winter_title']; ?></h2>
                    <?php }?>
        </section>
        <section class="prepare section">
            <div class="inner prepare__inner">
                <div class="prepare__block">
                <?php
                    $winter_carts = CFS()->get('winter_cart');
                    foreach($winter_carts as $winter_cart){?>
                <div class="prepare__plate">
                <div class="prepare__image">
                    <img src="<?php echo $winter_cart['winter_image']; ?>" alt="" class="prepare__img">
                </div>
                    <div class="prepare__desc">
                        <h2 class="prepare__name"><?php echo $winter_cart['winter_cart_name'] ?></h2>
                        <?php
                        $winter_texts = $winter_cart['winter_cart_desc'];
                        foreach($winter_texts as $winter_text){?>
                             <p class="prepare__text"><?php echo $winter_text['winter_cart_text']; ?></p>
                    <?php }?>
                    <?php
                        if(key_exists('winter_lists', $winter_cart)){
                        $winter_lists = $winter_cart['winter_lists'];
                        foreach($winter_lists as $winter_list){?>
                             <h3 class="prepare__ti"><?php echo $winter_list['winter_name']; ?></h3>
                             <ul class="prepare__list">
                             <?php
                                if(isset($winter_lists)){
                                $winter_items = $winter_list['winter_items'];
                                foreach($winter_items as $winter_item){?>
                                <li class="prepare__item"><?php echo $winter_item['winter_item']; ?></li>
                            <?php }}?>
                        </ul>
                    <?php }}?>
                    </div>
                    </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section poluv" id="work">
            <div class="swiper work-container">
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv8.jpg" alt="" class="swiper-slide work-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv9.jpg" alt="" class="swiper-slide work-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv.jpg" alt="" class="swiper-slide work-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv2.jpg" alt="" class="swiper-slide work-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv3.jpg" alt="" class="swiper-slide work-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poluv6.jpg" alt="" class="swiper-slide work-slide">
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination work-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev work-button-prev"></div>
                <div class="swiper-button-next work-button-next" ></div>

                <!-- If we need scrollbar -->
              </div>
              <div class="poluv_inner inner">
                  <ul class="poluv_list">
                      <li class="poluv_text text">Ландшафтне проектування</li>
                      <li class="poluv_text text">Створення газонів</li>
                      <li class="poluv_text text">Декоративні водойми</li>
                      <li class="poluv_text text">Системи поливу</li>
                      <li class="poluv_text text">Альпінарії, квітники, рокарії</li>
                      <li class="poluv_text text">Обслуговування</li>
                  </ul>
              </div>
        </section>
        <section class="section work">
            <div class="inner work_inner">
                <div class="work_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work.jpg" alt="" class="work_img">
                </div>
                <div class="work_description">
                    <p class="work_title title">Послуги з догляду за кімнатними рослинами</p>
                    <ul class="work_list">
                        <li class="work_text text">Абонентське обслуговування та комплексний догляд за кімнатними рослинами</li>
                        <li class="work_text text">Обрізка та формування крони кімнатних рослин</li>
                        <li class="work_text text">Пересадка та підживлювання</li>
                        <li class="work_text text">Діагностика та лікування кімнатних рослин</li>
                        <li class="work_text text">Консультація спеціаліста</li>
                    </ul>
                </div>
            </div>
        </section>
        <section style='margin-top: 30px;' class="gallery section" id="gallery">
            <div class="swiper gallery-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper gallery-wrapper">
                  <!-- Slides -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider45.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider46.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider47.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider48.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider49.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider46.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider47.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider48.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider49.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide33.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide34.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide35.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide36.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide37.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide38.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide39.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide40.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide41.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide42.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide43.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide2.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide3.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide4.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide5.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide6.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide7.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide8.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide9.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide10.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide11.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide12.jpg" alt="" class="swiper-slide gallery-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide13.jpg" alt="" class="swiper-slide gallery-slide">
                </div>
                <!-- If we need pagination -->
                <div class="gallery-pagination swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev gallery-button-prev"></div>
                <div class="swiper-button-next gallery-button-next"></div>
              </div>
        </section>
        <section class="section video">
            <div class="inner video_inner">
                <video class="vid" controls width="250">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video3.mp4"
                            type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
                </video>

            </div>
        </section>
        <section class="section video">
            <div class="inner video_inner">
                <p class="title">Скарифікація і аерація газону</p>
                <video class="vid" controls width="250">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video.mp4"
                            type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
                </video>

            </div>
        </section>
        <section class="section video">
            <div class="inner video_inner">
                <p class="title">Декоративна обрізка самшиту</p>
                <video class="vid" controls width="250">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video2.mp4"
                            type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
                </video>

            </div>
        </section>
<?php get_footer(); ?>