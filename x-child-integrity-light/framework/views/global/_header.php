<?php

// =============================================================================
// VIEWS/GLOBAL/_HEADER.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site and include the <head>.
// =============================================================================

?>

<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(''); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TW6GQQ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TW6GQQ');</script>
  <!-- End Google Tag Manager -->

<?php if(is_page('booking-complete')): ?>
   <script type="text/javascript">
     <!--
     var mbsy_username='pureformgolf'; // Required
     var mbsy_campaign_uid='29725'; // Required
     var mbsy_email='bryans_rego2@hotmail.com'; // Required - must be replaced with your customer's email
     var mbsy_revenue='0.00'; // Optional - must be replaced with your revenue
     //-->
   </script>
   <script type="text/javascript" src="https://mbsy.co/embed/v2/tracker.js"></script>
 <?php endif; ?>
</head>

<body <?php body_class(); ?>>

  <?php do_action( 'x_before_site_begin' ); ?>

  <div id="top" class="site">

  <?php do_action( 'x_after_site_begin' ); ?>