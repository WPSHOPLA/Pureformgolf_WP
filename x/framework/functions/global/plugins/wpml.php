<?php

// =============================================================================
// FUNCTIONS/GLOBAL/PLUGINS/WPML.PHP
// -----------------------------------------------------------------------------
// Plugin setup for theme compatibility.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Add Missing Navigation Class
// =============================================================================

// Add Missing Navigation Class
// =============================================================================

function x_wpml_add_classes_for_language_switcher( $menu_items ) {

  $menu_items = preg_replace( '/(menu-item-language )(?=.*?<a href="#" onclick="return false">)/', 'menu-item-has-children menu-item-language ', $menu_items );

  return $menu_items;

}

add_filter( 'wp_nav_menu_items', 'x_wpml_add_classes_for_language_switcher' );