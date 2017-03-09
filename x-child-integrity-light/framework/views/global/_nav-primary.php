<?php

// =============================================================================
// VIEWS/GLOBAL/_NAV-PRIMARY.PHP
// -----------------------------------------------------------------------------
// Outputs the primary nav.
// =============================================================================

?>

<a href="#" class="x-btn-navbar collapsed" data-toggle="collapse" data-target=".x-nav-wrap.mobile">
  <i class="x-icon-bars"></i>
  <?php // BEGIN EDIT: Changing wording and showing on mobile - Kevin Kirchner ------------- // ?>
  <?php /* ?><span class="visually-hidden"><?php _e( 'Navigation', '__x__' ); ?></span><?php */ ?>
  <span><?php _e( 'Menu', '__x__' ); ?></span>
  <?php // END EDIT ------------------------------------------------------------------------ // ?>
</a>

<nav class="x-nav-wrap desktop" role="navigation">
  <?php x_output_primary_navigation( 'desktop' ); ?>
</nav>

<div class="x-nav-wrap mobile collapse">
  <?php x_output_primary_navigation( 'mobile' ); ?>
</div>