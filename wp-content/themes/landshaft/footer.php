</main>
    <footer class="section contacts" id="contacts">
        <div class="contacts_inner inner">
            <div class="contacts_avatar">
                <img src="<?php echo CFS()->get('avatar'); ?>" alt="" class="contacts_img">
            </div>
            <div class="contacts_description">
                <div class="contacts_social">
                    <a href="<?php echo CFS()->get('facebook'); ?>" class="contacts_link" target="_blank">f</a>
                    <a href="<?php echo CFS()->get('instagram'); ?>" class="contacts_link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="" class="social_img"></a>
                </div>
                <?php
                $phones = CFS()->get('phones');
                foreach($phones as $phone){?>
                <a href="tel:<?php echo str_replace(" ", "", $phone['phone']); ?>" class="contacts_tel">Тел: <?php echo $phone['phone']; ?></a>
                <?php }?>
                <?php
                $emails = CFS()->get('emails');
                foreach($emails as $email){?>
                <a href="mailto:<?php echo $email['email']; ?>" class="contacts_tel">E: <?php echo $email['email']; ?></a>
                <?php }?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>