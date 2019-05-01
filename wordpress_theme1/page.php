<?php get_header(); ?>
        <div class="container-fluid photo-container">
            <img class="background-photo" src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>" class="img-fluid"/>
            <div class="container image-content">
                <h2><?php echo get_theme_mod('showcase_heading', 'Recycle your Nespresso <br/>in style!'); ?></h3>
                <p><?php echo get_theme_mod('showcase_text', 'We can recycle your coffee pods for<br/> cashback or free coffee!'); ?></p>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/app-store@2x.jpg" class="img-fluid app-store"/>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/google-play@2x.jpg" class="img-fluid android-store"/>
            </div>
        </div>

        
        <?php get_footer(); ?>
