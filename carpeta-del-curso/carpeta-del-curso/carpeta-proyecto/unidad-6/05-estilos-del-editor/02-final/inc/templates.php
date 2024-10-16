<?php

/**
 * Cambia el contenido del extracto por un botón
 *
 * @param $more
 *
 * @return string
 */
function domestika_excerpt_more( $more ) {
	return $more . ' <p class="read-more"><a class="button" href="' . get_permalink() . '">' . __( 'Read more', 'domestika' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'domestika_excerpt_more' );


/**
 * Muestra  un extracto más corto para el CPT Proyecto
 *
 * @param $length
 *
 * @return int
 */
function domestika_excerpt_length( $length ) {
	if ( get_post_type() === 'proyecto' ) {
		return 10;
	}
	return $length;
}
add_filter( 'excerpt_length', 'domestika_excerpt_length' );
