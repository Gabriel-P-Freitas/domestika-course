<?php

// Todas essas ações são renderizadas através do wp_head.

function domestika_setup_theme(){
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ];
    add_theme_support('html5', $supports); //Suporte para HTML5 tendo em vista o XML
    
    add_theme_support('title-tag'); // Coloca automaticamente: '<title>$title</title>
    
    add_theme_support('automatic-feed-links'); // Adiciona automaticamente links de feeds

    $GLOBALS['content_width'] = 1130; // Define a largura máxima do conteúdo
    
	load_theme_textdomain('domestika', get_template_directory() . '/languages');

    // Tudo isso são funções principais que em todo bom tema deve ter.
}

add_action('after_setup_theme', 'domestika_setup_theme');

function domestika_enqueue_scripts(){
    wp_enqueue_style('domestika-style', get_stylesheet_uri());

    // Essa função substitui o link rel stylesheet do css, e também pode linkar a do JS
    // Faz com que seja de forma automática recebendo o link xD
}

add_action('wp_enqueue_scripts', 'domestika_enqueue_scripts');

function domestika_setup_widgets(){
    register_sidebar(
        [
            'id' => 'sidebar-widgets',
            'name' => __('Sidebar Widgets'),
            'description' => __('Drag widgets to this sidebar container'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section id="" class="">',
            'before_title' => '<h4 class="widget-title h5">',
            'after_title' => '</h4>',

        ]
    );

    register_sidebar(
        [
            'id' => 'footer-widgets',
            'name' => __('Footer Widgets'),
            'description' => __('Drag widgets to this footer container'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title h5">',
            'after_title' => '</h4>',
        ]
    );
};

add_action('widgets_init', 'domestika_setup_widgets');