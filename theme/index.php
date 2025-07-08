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
                        <h2 class="prepare__name"><?php echo $winter_cart['winter_cart_name']; ?></h2>
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
                    <?php
                     $poluv_slides = CFS()->get('poluv_slider');
                     foreach($poluv_slides as $poluv_slide){?>
                        <img src="<?php echo $poluv_slide['poluv_image']; ?>" alt="" class="swiper-slide work-slide">
                    <?php }?>
                </div>
                <div class="swiper-pagination work-pagination"></div>
                <div class="swiper-button-prev work-button-prev"></div>
                <div class="swiper-button-next work-button-next" ></div>
              </div>
              <div class="poluv_inner inner">
                  <ul class="poluv_list">
                  <?php
                     $poluv_works = CFS()->get('poluv_works');
                     foreach($poluv_works as $poluv_work){?>
                        <li class="poluv_text text"><?php echo $poluv_work['poluv_work']; ?></li>
                    <?php }?>
                  </ul>
              </div>
        </section>
        <section class="section work">
            <div class="inner work_inner">
                <div class="work_image">
                    <div class="swiper gallery-container">
                <div class="swiper-wrapper gallery-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/1.jpg" alt="" 
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/2.jpg" alt=""
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/3.jpg" alt=""
                         class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/4.jpg" alt=""
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/5.jpg" alt=""
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/6.jpg" alt=""
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/7.jpg" alt=""
                        class="swiper-slide gallery-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/responds/8.jpg" alt=""
                        class="swiper-slide gallery-slide">
                </div>
                <div class="gallery-pagination swiper-pagination"></div>
                <div class="swiper-button-prev gallery-button-prev"></div>
                <div class="swiper-button-next gallery-button-next"></div>
                    </div>
                </div>
                <div class="work_description">
                    <p class="work_title title"><?php echo CFS()->get('flowers_titles'); ?></p>
                    <ul class="work_list">
                    <?php
                     $flowers_items = CFS()->get('flowers_items');
                     foreach($flowers_items as $flowers_item){?>
                        <li class="work_text text"><?php echo $flowers_item['flowers_item']; ?></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
        </section>
        <section style='margin-top: 30px;' class="gallery section" id="gallery">
            <div class="swiper gallery-container">
                <div class="swiper-wrapper gallery-wrapper">
                <?php
                     $gallery_slider = CFS()->get('gallery_slider');
                     foreach($gallery_slider as $gallery_slide){?>
                        <img src="<?php echo $gallery_slide['gallery_image']; ?>" alt="" class="swiper-slide gallery-slide">
                    <?php }?>
                </div>
                <div class="gallery-pagination swiper-pagination"></div>
                <div class="swiper-button-prev gallery-button-prev"></div>
                <div class="swiper-button-next gallery-button-next"></div>
              </div>
        </section>
        <?php
        $video_items = CFS()->get('video_items');
        foreach($video_items as $video_item){?>
            <section class="section video">
            <div class="inner video_inner">
                <?php if($video_item['video_name'] !== ''){?>
                    <p class="title"><?php echo $video_item['video_name']; ?></p>
                <?php } ?>
                <video class="vid" controls width="250">
                    <source src="<?php echo $video_item['video_file']; ?>" type="video/mp4">
                </video>
            </div>
        </section>
        <?php }?>
<?php get_footer(); ?>