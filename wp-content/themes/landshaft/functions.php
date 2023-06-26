<?php 
add_action('wp_enqueue_scripts', function(){
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-core' );
    wp_register_style('fonts', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), false);
    wp_register_style('fonts-2', 'https://fonts.gstatic.com', array(), false);
    wp_register_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), false);
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array('fonts', 'fonts-2', 'swiper'), 'null', false);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), true);
    wp_register_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/scripts/script.js', array('jquery', 'swiper'), 'null', true);
});
function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
 
	/* В подвале - второй сайдбар */
	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => 'Футер',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>