<?php

// =============================================================================
// VC_TEMPLATES/VC_COLUMN.PHP
// -----------------------------------------------------------------------------
// Make [vc_column_inner] behave like the [column] shortcode.
// =============================================================================

?>

<?php

extract( shortcode_atts( array(
  'id'                    => '',
  'class'                 => '',
  'style'                 => '',
  'width'                 => '',
  'last'                  => '',
  'fade'                  => '',
  'fade_animation'        => '',
  'fade_animation_offset' => ''
), $atts ) );

$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class = ( $class != '' ) ? 'x-column x-sm vc ' . esc_attr( $class ) : 'x-column x-sm vc';
$style = ( $style != '' ) ? $style : '';
$fade_duration         = ( $fade_duration         != ''     ) ? $fade_duration : '750';

switch ( $width ) {
  case '1/1' :
    $width = ' x-1-1';
    break;
  case '1/2' :
    $width = ' x-1-2';
    break;
  case '1/3' :
    $width = ' x-1-3';
    break;
  case '2/3' :
    $width = ' x-2-3';
    break;
  case '1/4' :
    $width = ' x-1-4';
    break;
  case '3/4' :
    $width = ' x-3-4';
    break;
  case '1/6' :
    $width = ' x-1-6';
    break;
  case '5/6' :
    $width = ' x-5-6';
    break;
}

if ( $fade == 'true' ) {
  
  $fade = 'data-fade="true"';

  $data = ( function_exists( 'cs_generate_data_attributes' ) ) ? cs_generate_data_attributes( 'column', array( 'fade' => true ) ) : '';

  switch ( $fade_animation ) {
      case 'in' :
        $fade_animation_offset = '';
        break;
      case 'in-from-top' :
        $fade_animation_offset = ' transform: translate(0, -' . $fade_animation_offset . '); ';
        break;
      case 'in-from-left' :
        $fade_animation_offset = ' transform: translate(-' . $fade_animation_offset . ', 0); ';
        break;
      case 'in-from-right' :
        $fade_animation_offset = ' transform: translate(' . $fade_animation_offset . ', 0); ';
        break;
      case 'in-from-bottom' :
        $fade_animation_offset = ' transform: translate(0, ' . $fade_animation_offset . '); ';
        break;
    }

  $fade_animation_style = 'opacity: 0;' . $fade_animation_offset . 'transition-duration: ' . $fade_duration . 'ms;';
  
} else {
  $data                 = '';
    $fade                 = '';
    $fade_animation_style = '';
}

$output = "<div {$id} class=\"{$class}{$width}{$last}\" style=\"{$style}{$fade_animation_style}{$bg_color}\" {$data}{$fade}>" . do_shortcode( $content ) . "</div>";

echo $output;