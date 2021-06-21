<?php
add_action( 'after_setup_theme', 'initMenus' );
function initMenus() {
    register_nav_menu( 'primary', 'Header Menu' );
}

if( !function_exists('show_header_menu') ) {
    function show_header_menu( string $location = 'primary' ) {
        $locations = get_nav_menu_locations();
        if( $locations && $locations[ $location  ] ) {
            $menuLinkArray = wp_get_nav_menu_items( $locations[ $location  ] );

            $outputMarkup = '<nav class="header__nav">';

            foreach( (array) $menuLinkArray as $key => $menuItem ) {
                $current_from_id = ( $menuItem->object_id == get_queried_object_id() ) ? 'current' : '';
                $current_from_url = ( $_SERVER['REQUEST_URI'] == parse_url( $menuItem->url, PHP_URL_PATH ) ) ? 'current' : '';
                $menuItemClasses = join(' ',$menuItem->classes);
                $outputMarkup .= '<a class="'. $menuItemClasses .' header__nav--link '. $current_from_id .' '. $current_from_url . $menuItemClasses .'" href="'. $menuItem->url .'">'. $menuItem->title .'</a>';
            }

            $outputMarkup .= '<button class="mobileBurger"></button>';

            $outputMarkup .= '</nav>';

            echo $outputMarkup;
        } else {
            return false;
        }
    }
}
