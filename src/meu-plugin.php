<?php
/**
 * Plugin Name: Meu Plugin criado
 */

function my_content_footer( $content ) {
    if ( is_single( )) {
        return $content . '<p>MUITO OBRIGADO PELA SUA VISITA!</p>';
    }
}
add_filter('the_content', 'my_content_footer');