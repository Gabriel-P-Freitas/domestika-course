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
	
    // Tudo isso são funções principais que em todo bom tema deve ter.
}

add_action('after_setup_theme', 'domestika_setup_theme');

function domestika_enqueue_scripts(){
    wp_enqueue_style('domestika-style', get_stylesheet_uri());

    // Essa função substitui o link rel stylesheet do css, e também pode linkar a do JS
    // Faz com que seja de forma automática recebendo o link xD
}

add_action('wp_enqueue_scripts', 'domestika_enqueue_scripts');