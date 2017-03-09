<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/FONTS/DATA.PHP
// -----------------------------------------------------------------------------
// Fonts data.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Fonts Data
// =============================================================================

// Fonts Data
// =============================================================================

function x_fonts_data() {

  $data = array(

    //
    // System.
    //

    'arial' => array(
      'source'  => 'system',
      'family'  => 'Arial',
      'stack'   => 'Arial, "Helvetica Neue", Helvetica, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'arialnarrow' => array(
      'source'  => 'system',
      'family'  => 'Arial Narrow',
      'stack'   => '"Arial Narrow", Arial, "Helvetica Neue", Helvetica, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'baskerville' => array(
      'source'  => 'system',
      'family'  => 'Baskerville',
      'stack'   => 'Baskerville, "Baskerville old face", "Hoefler Text", Garamond, "Times New Roman", serif',
      'weights' => array( '400', '400italic', '600', '600italic', '700', '700italic' )
    ),
    'bodonimt' => array(
      'source'  => 'system',
      'family'  => 'Bodoni MT',
      'stack'   => '"Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'bookantiqua' => array(
      'source'  => 'system',
      'family'  => 'Book Antiqua',
      'stack'   => '"Book Antiqua", Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'calibri' => array(
      'source'  => 'system',
      'family'  => 'Calibri',
      'stack'   => 'Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'cambria' => array(
      'source'  => 'system',
      'family'  => 'Cambria',
      'stack'   => 'Cambria, Georgia, serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'candara' => array(
      'source'  => 'system',
      'family'  => 'Candara',
      'stack'   => 'Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'consolas' => array(
      'source'  => 'system',
      'family'  => 'Consolas',
      'stack'   => 'Consolas, monaco, monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'couriernew' => array(
      'source'  => 'system',
      'family'  => 'Courier New',
      'stack'   => '"Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'didot' => array(
      'source'  => 'system',
      'family'  => 'Didot',
      'stack'   => 'Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'futura' => array(
      'source'  => 'system',
      'family'  => 'Futura',
      'stack'   => 'Futura, "Trebuchet MS", Arial, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'garamond' => array(
      'source'  => 'system',
      'family'  => 'Garamond',
      'stack'   => 'Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'geneva' => array(
      'source'  => 'system',
      'family'  => 'Geneva',
      'stack'   => 'Geneva, Tahoma, Verdana, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'georgia' => array(
      'source'  => 'system',
      'family'  => 'Georgia',
      'stack'   => 'Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'gillsans' => array(
      'source'  => 'system',
      'family'  => 'Gill Sans',
      'stack'   => '"Gill Sans", "Gill Sans MT", Calibri, sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic' )
    ),
    'goudyoldstyle' => array(
      'source'  => 'system',
      'family'  => 'Goudy Old Style',
      'stack'   => '"Goudy Old Style", Garamond, "Big Caslon", "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'helvetica' => array(
      'source'  => 'system',
      'family'  => 'Helvetica',
      'stack'   => 'Helvetica, Arial, sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic' )
    ),
    'helveticaneue' => array(
      'source'  => 'system',
      'family'  => 'Helvetica Neue',
      'stack'   => '"Helvetica Neue", Helvetica, Arial, sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic' )
    ),
    'hoeflertext' => array(
      'source'  => 'system',
      'family'  => 'Hoefler Text',
      'stack'   => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'lucidabright' => array(
      'source'  => 'system',
      'family'  => 'Lucida Bright',
      'stack'   => '"Lucida Bright", Georgia, serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'lucidagrande' => array(
      'source'  => 'system',
      'family'  => 'Lucida Grande',
      'stack'   => '"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'lucidasanstypewriter' => array(
      'source'  => 'system',
      'family'  => 'Lucida Sans Typewriter',
      'stack'   => '"Lucida Sans Typewriter", "Lucida Console", monaco, "Bitstream Vera Sans Mono", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'monaco' => array(
      'source'  => 'system',
      'family'  => 'Monaco',
      'stack'   => 'Monaco, Consolas, "Lucida Console", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'optima' => array(
      'source'  => 'system',
      'family'  => 'Optima',
      'stack'   => 'Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'palatino' => array(
      'source'  => 'system',
      'family'  => 'Palatino',
      'stack'   => 'Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'tahoma' => array(
      'source'  => 'system',
      'family'  => 'Tahoma',
      'stack'   => 'Tahoma, Geneva, Verdana, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'timesnewroman' => array(
      'source'  => 'system',
      'family'  => 'Times New Roman',
      'stack'   => '"Times New Roman", Georgia, serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'trebuchetms' => array(
      'source'  => 'system',
      'family'  => 'Trebuchet MS',
      'stack'   => '"Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'verdana' => array(
      'source'  => 'system',
      'family'  => 'Verdana',
      'stack'   => 'Verdana, Geneva, sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),


    //
    // Google.
    //

    'abeezee' => array(
      'source'  => 'google',
      'family'  => 'ABeeZee',
      'stack'   => '"ABeeZee", sans-serif',
      'weights' => array( '400', '400italic' )
    ),
    'abel' => array(
      'source'  => 'google',
      'family'  => 'Abel',
      'stack'   => '"Abel", sans-serif',
      'weights' => array( '400' )
    ),
    'abrilfatface' => array(
      'source'  => 'google',
      'family'  => 'Abril Fatface',
      'stack'   => '"Abril Fatface", cursive',
      'weights' => array( '400' )
    ),
    'aclonica' => array(
      'source'  => 'google',
      'family'  => 'Aclonica',
      'stack'   => '"Aclonica", sans-serif',
      'weights' => array( '400' )
    ),
    'acme' => array(
      'source'  => 'google',
      'family'  => 'Acme',
      'stack'   => '"Acme", sans-serif',
      'weights' => array( '400' )
    ),
    'actor' => array(
      'source'  => 'google',
      'family'  => 'Actor',
      'stack'   => '"Actor", sans-serif',
      'weights' => array( '400' )
    ),
    'adamina' => array(
      'source'  => 'google',
      'family'  => 'Adamina',
      'stack'   => '"Adamina", serif',
      'weights' => array( '400' )
    ),
    'adventpro' => array(
      'source'  => 'google',
      'family'  => 'Advent Pro',
      'stack'   => '"Advent Pro", sans-serif',
      'weights' => array( '100', '200', '300', '400', '500', '600', '700' )
    ),
    'aguafinascript' => array(
      'source'  => 'google',
      'family'  => 'Aguafina Script',
      'stack'   => '"Aguafina Script", cursive',
      'weights' => array( '400' )
    ),
    'akronim' => array(
      'source'  => 'google',
      'family'  => 'Akronim',
      'stack'   => '"Akronim", cursive',
      'weights' => array( '400' )
    ),
    'aladin' => array(
      'source'  => 'google',
      'family'  => 'Aladin',
      'stack'   => '"Aladin", cursive',
      'weights' => array( '400' )
    ),
    'aldrich' => array(
      'source'  => 'google',
      'family'  => 'Aldrich',
      'stack'   => '"Aldrich", sans-serif',
      'weights' => array( '400' )
    ),
    'alef' => array(
      'source'  => 'google',
      'family'  => 'Alef',
      'stack'   => '"Alef", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'alegreya' => array(
      'source'  => 'google',
      'family'  => 'Alegreya',
      'stack'   => '"Alegreya", serif',
      'weights' => array( '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'alegreyasc' => array(
      'source'  => 'google',
      'family'  => 'Alegreya SC',
      'stack'   => '"Alegreya SC", serif',
      'weights' => array( '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'alegreyasans' => array(
      'source'  => 'google',
      'family'  => 'Alegreya Sans',
      'stack'   => '"Alegreya Sans", sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic', '800', '800italic', '900', '900italic' )
    ),
    'alegreyasanssc' => array(
      'source'  => 'google',
      'family'  => 'Alegreya Sans SC',
      'stack'   => '"Alegreya Sans SC", sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic', '800', '800italic', '900', '900italic' )
    ),
    'alexbrush' => array(
      'source'  => 'google',
      'family'  => 'Alex Brush',
      'stack'   => '"Alex Brush", cursive',
      'weights' => array( '400' )
    ),
    'alfaslabone' => array(
      'source'  => 'google',
      'family'  => 'Alfa Slab One',
      'stack'   => '"Alfa Slab One", cursive',
      'weights' => array( '400' )
    ),
    'alice' => array(
      'source'  => 'google',
      'family'  => 'Alice',
      'stack'   => '"Alice", serif',
      'weights' => array( '400' )
    ),
    'alike' => array(
      'source'  => 'google',
      'family'  => 'Alike',
      'stack'   => '"Alike", serif',
      'weights' => array( '400' )
    ),
    'alikeangular' => array(
      'source'  => 'google',
      'family'  => 'Alike Angular',
      'stack'   => '"Alike Angular", serif',
      'weights' => array( '400' )
    ),
    'allan' => array(
      'source'  => 'google',
      'family'  => 'Allan',
      'stack'   => '"Allan", cursive',
      'weights' => array( '400', '700' )
    ),
    'allerta' => array(
      'source'  => 'google',
      'family'  => 'Allerta',
      'stack'   => '"Allerta", sans-serif',
      'weights' => array( '400' )
    ),
    'allertastencil' => array(
      'source'  => 'google',
      'family'  => 'Allerta Stencil',
      'stack'   => '"Allerta Stencil", sans-serif',
      'weights' => array( '400' )
    ),
    'allura' => array(
      'source'  => 'google',
      'family'  => 'Allura',
      'stack'   => '"Allura", cursive',
      'weights' => array( '400' )
    ),
    'almendra' => array(
      'source'  => 'google',
      'family'  => 'Almendra',
      'stack'   => '"Almendra", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'almendradisplay' => array(
      'source'  => 'google',
      'family'  => 'Almendra Display',
      'stack'   => '"Almendra Display", cursive',
      'weights' => array( '400' )
    ),
    'almendrasc' => array(
      'source'  => 'google',
      'family'  => 'Almendra SC',
      'stack'   => '"Almendra SC", serif',
      'weights' => array( '400' )
    ),
    'amarante' => array(
      'source'  => 'google',
      'family'  => 'Amarante',
      'stack'   => '"Amarante", cursive',
      'weights' => array( '400' )
    ),
    'amaranth' => array(
      'source'  => 'google',
      'family'  => 'Amaranth',
      'stack'   => '"Amaranth", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'amaticsc' => array(
      'source'  => 'google',
      'family'  => 'Amatic SC',
      'stack'   => '"Amatic SC", cursive',
      'weights' => array( '400', '700' )
    ),
    'amethysta' => array(
      'source'  => 'google',
      'family'  => 'Amethysta',
      'stack'   => '"Amethysta", serif',
      'weights' => array( '400' )
    ),
    'amiri' => array(
      'source'  => 'google',
      'family'  => 'Amiri',
      'stack'   => '"Amiri", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'amita' => array(
      'source'  => 'google',
      'family'  => 'Amita',
      'stack'   => '"Amita", cursive',
      'weights' => array( '400', '700' )
    ),
    'anaheim' => array(
      'source'  => 'google',
      'family'  => 'Anaheim',
      'stack'   => '"Anaheim", sans-serif',
      'weights' => array( '400' )
    ),
    'andada' => array(
      'source'  => 'google',
      'family'  => 'Andada',
      'stack'   => '"Andada", serif',
      'weights' => array( '400' )
    ),
    'andika' => array(
      'source'  => 'google',
      'family'  => 'Andika',
      'stack'   => '"Andika", sans-serif',
      'weights' => array( '400' )
    ),
    'angkor' => array(
      'source'  => 'google',
      'family'  => 'Angkor',
      'stack'   => '"Angkor", cursive',
      'weights' => array( '400' )
    ),
    'annieuseyourtelescope' => array(
      'source'  => 'google',
      'family'  => 'Annie Use Your Telescope',
      'stack'   => '"Annie Use Your Telescope", cursive',
      'weights' => array( '400' )
    ),
    'anonymouspro' => array(
      'source'  => 'google',
      'family'  => 'Anonymous Pro',
      'stack'   => '"Anonymous Pro", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'antic' => array(
      'source'  => 'google',
      'family'  => 'Antic',
      'stack'   => '"Antic", sans-serif',
      'weights' => array( '400' )
    ),
    'anticdidone' => array(
      'source'  => 'google',
      'family'  => 'Antic Didone',
      'stack'   => '"Antic Didone", serif',
      'weights' => array( '400' )
    ),
    'anticslab' => array(
      'source'  => 'google',
      'family'  => 'Antic Slab',
      'stack'   => '"Antic Slab", serif',
      'weights' => array( '400' )
    ),
    'anton' => array(
      'source'  => 'google',
      'family'  => 'Anton',
      'stack'   => '"Anton", sans-serif',
      'weights' => array( '400' )
    ),
    'arapey' => array(
      'source'  => 'google',
      'family'  => 'Arapey',
      'stack'   => '"Arapey", serif',
      'weights' => array( '400', '400italic' )
    ),
    'arbutus' => array(
      'source'  => 'google',
      'family'  => 'Arbutus',
      'stack'   => '"Arbutus", cursive',
      'weights' => array( '400' )
    ),
    'arbutusslab' => array(
      'source'  => 'google',
      'family'  => 'Arbutus Slab',
      'stack'   => '"Arbutus Slab", serif',
      'weights' => array( '400' )
    ),
    'architectsdaughter' => array(
      'source'  => 'google',
      'family'  => 'Architects Daughter',
      'stack'   => '"Architects Daughter", cursive',
      'weights' => array( '400' )
    ),
    'archivoblack' => array(
      'source'  => 'google',
      'family'  => 'Archivo Black',
      'stack'   => '"Archivo Black", sans-serif',
      'weights' => array( '400' )
    ),
    'archivonarrow' => array(
      'source'  => 'google',
      'family'  => 'Archivo Narrow',
      'stack'   => '"Archivo Narrow", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'arimo' => array(
      'source'  => 'google',
      'family'  => 'Arimo',
      'stack'   => '"Arimo", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'arizonia' => array(
      'source'  => 'google',
      'family'  => 'Arizonia',
      'stack'   => '"Arizonia", cursive',
      'weights' => array( '400' )
    ),
    'armata' => array(
      'source'  => 'google',
      'family'  => 'Armata',
      'stack'   => '"Armata", sans-serif',
      'weights' => array( '400' )
    ),
    'artifika' => array(
      'source'  => 'google',
      'family'  => 'Artifika',
      'stack'   => '"Artifika", serif',
      'weights' => array( '400' )
    ),
    'arvo' => array(
      'source'  => 'google',
      'family'  => 'Arvo',
      'stack'   => '"Arvo", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'arya' => array(
      'source'  => 'google',
      'family'  => 'Arya',
      'stack'   => '"Arya", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'asap' => array(
      'source'  => 'google',
      'family'  => 'Asap',
      'stack'   => '"Asap", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'asar' => array(
      'source'  => 'google',
      'family'  => 'Asar',
      'stack'   => '"Asar", serif',
      'weights' => array( '400' )
    ),
    'asset' => array(
      'source'  => 'google',
      'family'  => 'Asset',
      'stack'   => '"Asset", cursive',
      'weights' => array( '400' )
    ),
    'astloch' => array(
      'source'  => 'google',
      'family'  => 'Astloch',
      'stack'   => '"Astloch", cursive',
      'weights' => array( '400', '700' )
    ),
    'asul' => array(
      'source'  => 'google',
      'family'  => 'Asul',
      'stack'   => '"Asul", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'atomicage' => array(
      'source'  => 'google',
      'family'  => 'Atomic Age',
      'stack'   => '"Atomic Age", cursive',
      'weights' => array( '400' )
    ),
    'aubrey' => array(
      'source'  => 'google',
      'family'  => 'Aubrey',
      'stack'   => '"Aubrey", cursive',
      'weights' => array( '400' )
    ),
    'audiowide' => array(
      'source'  => 'google',
      'family'  => 'Audiowide',
      'stack'   => '"Audiowide", cursive',
      'weights' => array( '400' )
    ),
    'autourone' => array(
      'source'  => 'google',
      'family'  => 'Autour One',
      'stack'   => '"Autour One", cursive',
      'weights' => array( '400' )
    ),
    'average' => array(
      'source'  => 'google',
      'family'  => 'Average',
      'stack'   => '"Average", serif',
      'weights' => array( '400' )
    ),
    'averagesans' => array(
      'source'  => 'google',
      'family'  => 'Average Sans',
      'stack'   => '"Average Sans", sans-serif',
      'weights' => array( '400' )
    ),
    'averiagruesalibre' => array(
      'source'  => 'google',
      'family'  => 'Averia Gruesa Libre',
      'stack'   => '"Averia Gruesa Libre", cursive',
      'weights' => array( '400' )
    ),
    'averialibre' => array(
      'source'  => 'google',
      'family'  => 'Averia Libre',
      'stack'   => '"Averia Libre", cursive',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic' )
    ),
    'averiasanslibre' => array(
      'source'  => 'google',
      'family'  => 'Averia Sans Libre',
      'stack'   => '"Averia Sans Libre", cursive',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic' )
    ),
    'averiaseriflibre' => array(
      'source'  => 'google',
      'family'  => 'Averia Serif Libre',
      'stack'   => '"Averia Serif Libre", cursive',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic' )
    ),
    'badscript' => array(
      'source'  => 'google',
      'family'  => 'Bad Script',
      'stack'   => '"Bad Script", cursive',
      'weights' => array( '400' )
    ),
    'balthazar' => array(
      'source'  => 'google',
      'family'  => 'Balthazar',
      'stack'   => '"Balthazar", serif',
      'weights' => array( '400' )
    ),
    'bangers' => array(
      'source'  => 'google',
      'family'  => 'Bangers',
      'stack'   => '"Bangers", cursive',
      'weights' => array( '400' )
    ),
    'basic' => array(
      'source'  => 'google',
      'family'  => 'Basic',
      'stack'   => '"Basic", sans-serif',
      'weights' => array( '400' )
    ),
    'battambang' => array(
      'source'  => 'google',
      'family'  => 'Battambang',
      'stack'   => '"Battambang", cursive',
      'weights' => array( '400', '700' )
    ),
    'baumans' => array(
      'source'  => 'google',
      'family'  => 'Baumans',
      'stack'   => '"Baumans", cursive',
      'weights' => array( '400' )
    ),
    'bayon' => array(
      'source'  => 'google',
      'family'  => 'Bayon',
      'stack'   => '"Bayon", cursive',
      'weights' => array( '400' )
    ),
    'belgrano' => array(
      'source'  => 'google',
      'family'  => 'Belgrano',
      'stack'   => '"Belgrano", serif',
      'weights' => array( '400' )
    ),
    'belleza' => array(
      'source'  => 'google',
      'family'  => 'Belleza',
      'stack'   => '"Belleza", sans-serif',
      'weights' => array( '400' )
    ),
    'benchnine' => array(
      'source'  => 'google',
      'family'  => 'BenchNine',
      'stack'   => '"BenchNine", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'bentham' => array(
      'source'  => 'google',
      'family'  => 'Bentham',
      'stack'   => '"Bentham", serif',
      'weights' => array( '400' )
    ),
    'berkshireswash' => array(
      'source'  => 'google',
      'family'  => 'Berkshire Swash',
      'stack'   => '"Berkshire Swash", cursive',
      'weights' => array( '400' )
    ),
    'bevan' => array(
      'source'  => 'google',
      'family'  => 'Bevan',
      'stack'   => '"Bevan", cursive',
      'weights' => array( '400' )
    ),
    'bigelowrules' => array(
      'source'  => 'google',
      'family'  => 'Bigelow Rules',
      'stack'   => '"Bigelow Rules", cursive',
      'weights' => array( '400' )
    ),
    'bigshotone' => array(
      'source'  => 'google',
      'family'  => 'Bigshot One',
      'stack'   => '"Bigshot One", cursive',
      'weights' => array( '400' )
    ),
    'bilbo' => array(
      'source'  => 'google',
      'family'  => 'Bilbo',
      'stack'   => '"Bilbo", cursive',
      'weights' => array( '400' )
    ),
    'bilboswashcaps' => array(
      'source'  => 'google',
      'family'  => 'Bilbo Swash Caps',
      'stack'   => '"Bilbo Swash Caps", cursive',
      'weights' => array( '400' )
    ),
    'biryani' => array(
      'source'  => 'google',
      'family'  => 'Biryani',
      'stack'   => '"Biryani", sans-serif',
      'weights' => array( '200', '300', '400', '600', '700', '800', '900' )
    ),
    'bitter' => array(
      'source'  => 'google',
      'family'  => 'Bitter',
      'stack'   => '"Bitter", serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'blackopsone' => array(
      'source'  => 'google',
      'family'  => 'Black Ops One',
      'stack'   => '"Black Ops One", cursive',
      'weights' => array( '400' )
    ),
    'bokor' => array(
      'source'  => 'google',
      'family'  => 'Bokor',
      'stack'   => '"Bokor", cursive',
      'weights' => array( '400' )
    ),
    'bonbon' => array(
      'source'  => 'google',
      'family'  => 'Bonbon',
      'stack'   => '"Bonbon", cursive',
      'weights' => array( '400' )
    ),
    'boogaloo' => array(
      'source'  => 'google',
      'family'  => 'Boogaloo',
      'stack'   => '"Boogaloo", cursive',
      'weights' => array( '400' )
    ),
    'bowlbyone' => array(
      'source'  => 'google',
      'family'  => 'Bowlby One',
      'stack'   => '"Bowlby One", cursive',
      'weights' => array( '400' )
    ),
    'bowlbyonesc' => array(
      'source'  => 'google',
      'family'  => 'Bowlby One SC',
      'stack'   => '"Bowlby One SC", cursive',
      'weights' => array( '400' )
    ),
    'brawler' => array(
      'source'  => 'google',
      'family'  => 'Brawler',
      'stack'   => '"Brawler", serif',
      'weights' => array( '400' )
    ),
    'breeserif' => array(
      'source'  => 'google',
      'family'  => 'Bree Serif',
      'stack'   => '"Bree Serif", serif',
      'weights' => array( '400' )
    ),
    'bubblegumsans' => array(
      'source'  => 'google',
      'family'  => 'Bubblegum Sans',
      'stack'   => '"Bubblegum Sans", cursive',
      'weights' => array( '400' )
    ),
    'bubblerone' => array(
      'source'  => 'google',
      'family'  => 'Bubbler One',
      'stack'   => '"Bubbler One", sans-serif',
      'weights' => array( '400' )
    ),
    'buda' => array(
      'source'  => 'google',
      'family'  => 'Buda',
      'stack'   => '"Buda", cursive',
      'weights' => array( '300' )
    ),
    'buenard' => array(
      'source'  => 'google',
      'family'  => 'Buenard',
      'stack'   => '"Buenard", serif',
      'weights' => array( '400', '700' )
    ),
    'butcherman' => array(
      'source'  => 'google',
      'family'  => 'Butcherman',
      'stack'   => '"Butcherman", cursive',
      'weights' => array( '400' )
    ),
    'butterflykids' => array(
      'source'  => 'google',
      'family'  => 'Butterfly Kids',
      'stack'   => '"Butterfly Kids", cursive',
      'weights' => array( '400' )
    ),
    'cabin' => array(
      'source'  => 'google',
      'family'  => 'Cabin',
      'stack'   => '"Cabin", sans-serif',
      'weights' => array( '400', '400italic', '500', '500italic', '600', '600italic', '700', '700italic' )
    ),
    'cabincondensed' => array(
      'source'  => 'google',
      'family'  => 'Cabin Condensed',
      'stack'   => '"Cabin Condensed", sans-serif',
      'weights' => array( '400', '500', '600', '700' )
    ),
    'cabinsketch' => array(
      'source'  => 'google',
      'family'  => 'Cabin Sketch',
      'stack'   => '"Cabin Sketch", cursive',
      'weights' => array( '400', '700' )
    ),
    'caesardressing' => array(
      'source'  => 'google',
      'family'  => 'Caesar Dressing',
      'stack'   => '"Caesar Dressing", cursive',
      'weights' => array( '400' )
    ),
    'cagliostro' => array(
      'source'  => 'google',
      'family'  => 'Cagliostro',
      'stack'   => '"Cagliostro", sans-serif',
      'weights' => array( '400' )
    ),
    'calligraffitti' => array(
      'source'  => 'google',
      'family'  => 'Calligraffitti',
      'stack'   => '"Calligraffitti", cursive',
      'weights' => array( '400' )
    ),
    'cambay' => array(
      'source'  => 'google',
      'family'  => 'Cambay',
      'stack'   => '"Cambay", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'cambo' => array(
      'source'  => 'google',
      'family'  => 'Cambo',
      'stack'   => '"Cambo", serif',
      'weights' => array( '400' )
    ),
    'candal' => array(
      'source'  => 'google',
      'family'  => 'Candal',
      'stack'   => '"Candal", sans-serif',
      'weights' => array( '400' )
    ),
    'cantarell' => array(
      'source'  => 'google',
      'family'  => 'Cantarell',
      'stack'   => '"Cantarell", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'cantataone' => array(
      'source'  => 'google',
      'family'  => 'Cantata One',
      'stack'   => '"Cantata One", serif',
      'weights' => array( '400' )
    ),
    'cantoraone' => array(
      'source'  => 'google',
      'family'  => 'Cantora One',
      'stack'   => '"Cantora One", sans-serif',
      'weights' => array( '400' )
    ),
    'capriola' => array(
      'source'  => 'google',
      'family'  => 'Capriola',
      'stack'   => '"Capriola", sans-serif',
      'weights' => array( '400' )
    ),
    'cardo' => array(
      'source'  => 'google',
      'family'  => 'Cardo',
      'stack'   => '"Cardo", serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'carme' => array(
      'source'  => 'google',
      'family'  => 'Carme',
      'stack'   => '"Carme", sans-serif',
      'weights' => array( '400' )
    ),
    'carroisgothic' => array(
      'source'  => 'google',
      'family'  => 'Carrois Gothic',
      'stack'   => '"Carrois Gothic", sans-serif',
      'weights' => array( '400' )
    ),
    'carroisgothicsc' => array(
      'source'  => 'google',
      'family'  => 'Carrois Gothic SC',
      'stack'   => '"Carrois Gothic SC", sans-serif',
      'weights' => array( '400' )
    ),
    'carterone' => array(
      'source'  => 'google',
      'family'  => 'Carter One',
      'stack'   => '"Carter One", cursive',
      'weights' => array( '400' )
    ),
    'catamaran' => array(
      'source'  => 'google',
      'family'  => 'Catamaran',
      'stack'   => '"Catamaran", sans-serif',
      'weights' => array( '100', '200', '300', '400', '500', '600', '700', '800', '900' )
    ),
    'caudex' => array(
      'source'  => 'google',
      'family'  => 'Caudex',
      'stack'   => '"Caudex", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'caveat' => array(
      'source'  => 'google',
      'family'  => 'Caveat',
      'stack'   => '"Caveat", cursive',
      'weights' => array( '400', '700' )
    ),
    'caveatbrush' => array(
      'source'  => 'google',
      'family'  => 'Caveat Brush',
      'stack'   => '"Caveat Brush", cursive',
      'weights' => array( '400' )
    ),
    'cedarvillecursive' => array(
      'source'  => 'google',
      'family'  => 'Cedarville Cursive',
      'stack'   => '"Cedarville Cursive", cursive',
      'weights' => array( '400' )
    ),
    'cevicheone' => array(
      'source'  => 'google',
      'family'  => 'Ceviche One',
      'stack'   => '"Ceviche One", cursive',
      'weights' => array( '400' )
    ),
    'changaone' => array(
      'source'  => 'google',
      'family'  => 'Changa One',
      'stack'   => '"Changa One", cursive',
      'weights' => array( '400', '400italic' )
    ),
    'chango' => array(
      'source'  => 'google',
      'family'  => 'Chango',
      'stack'   => '"Chango", cursive',
      'weights' => array( '400' )
    ),
    'chauphilomeneone' => array(
      'source'  => 'google',
      'family'  => 'Chau Philomene One',
      'stack'   => '"Chau Philomene One", sans-serif',
      'weights' => array( '400', '400italic' )
    ),
    'chelaone' => array(
      'source'  => 'google',
      'family'  => 'Chela One',
      'stack'   => '"Chela One", cursive',
      'weights' => array( '400' )
    ),
    'chelseamarket' => array(
      'source'  => 'google',
      'family'  => 'Chelsea Market',
      'stack'   => '"Chelsea Market", cursive',
      'weights' => array( '400' )
    ),
    'chenla' => array(
      'source'  => 'google',
      'family'  => 'Chenla',
      'stack'   => '"Chenla", cursive',
      'weights' => array( '400' )
    ),
    'cherrycreamsoda' => array(
      'source'  => 'google',
      'family'  => 'Cherry Cream Soda',
      'stack'   => '"Cherry Cream Soda", cursive',
      'weights' => array( '400' )
    ),
    'cherryswash' => array(
      'source'  => 'google',
      'family'  => 'Cherry Swash',
      'stack'   => '"Cherry Swash", cursive',
      'weights' => array( '400', '700' )
    ),
    'chewy' => array(
      'source'  => 'google',
      'family'  => 'Chewy',
      'stack'   => '"Chewy", cursive',
      'weights' => array( '400' )
    ),
    'chicle' => array(
      'source'  => 'google',
      'family'  => 'Chicle',
      'stack'   => '"Chicle", cursive',
      'weights' => array( '400' )
    ),
    'chivo' => array(
      'source'  => 'google',
      'family'  => 'Chivo',
      'stack'   => '"Chivo", sans-serif',
      'weights' => array( '400', '400italic', '900', '900italic' )
    ),
    'chonburi' => array(
      'source'  => 'google',
      'family'  => 'Chonburi',
      'stack'   => '"Chonburi", cursive',
      'weights' => array( '400' )
    ),
    'cinzel' => array(
      'source'  => 'google',
      'family'  => 'Cinzel',
      'stack'   => '"Cinzel", serif',
      'weights' => array( '400', '700', '900' )
    ),
    'cinzeldecorative' => array(
      'source'  => 'google',
      'family'  => 'Cinzel Decorative',
      'stack'   => '"Cinzel Decorative", cursive',
      'weights' => array( '400', '700', '900' )
    ),
    'clickerscript' => array(
      'source'  => 'google',
      'family'  => 'Clicker Script',
      'stack'   => '"Clicker Script", cursive',
      'weights' => array( '400' )
    ),
    'coda' => array(
      'source'  => 'google',
      'family'  => 'Coda',
      'stack'   => '"Coda", cursive',
      'weights' => array( '400', '800' )
    ),
    'codacaption' => array(
      'source'  => 'google',
      'family'  => 'Coda Caption',
      'stack'   => '"Coda Caption", sans-serif',
      'weights' => array( '800' )
    ),
    'codystar' => array(
      'source'  => 'google',
      'family'  => 'Codystar',
      'stack'   => '"Codystar", cursive',
      'weights' => array( '300', '400' )
    ),
    'combo' => array(
      'source'  => 'google',
      'family'  => 'Combo',
      'stack'   => '"Combo", cursive',
      'weights' => array( '400' )
    ),
    'comfortaa' => array(
      'source'  => 'google',
      'family'  => 'Comfortaa',
      'stack'   => '"Comfortaa", cursive',
      'weights' => array( '300', '400', '700' )
    ),
    'comingsoon' => array(
      'source'  => 'google',
      'family'  => 'Coming Soon',
      'stack'   => '"Coming Soon", cursive',
      'weights' => array( '400' )
    ),
    'concertone' => array(
      'source'  => 'google',
      'family'  => 'Concert One',
      'stack'   => '"Concert One", cursive',
      'weights' => array( '400' )
    ),
    'condiment' => array(
      'source'  => 'google',
      'family'  => 'Condiment',
      'stack'   => '"Condiment", cursive',
      'weights' => array( '400' )
    ),
    'content' => array(
      'source'  => 'google',
      'family'  => 'Content',
      'stack'   => '"Content", cursive',
      'weights' => array( '400', '700' )
    ),
    'contrailone' => array(
      'source'  => 'google',
      'family'  => 'Contrail One',
      'stack'   => '"Contrail One", cursive',
      'weights' => array( '400' )
    ),
    'convergence' => array(
      'source'  => 'google',
      'family'  => 'Convergence',
      'stack'   => '"Convergence", sans-serif',
      'weights' => array( '400' )
    ),
    'cookie' => array(
      'source'  => 'google',
      'family'  => 'Cookie',
      'stack'   => '"Cookie", cursive',
      'weights' => array( '400' )
    ),
    'copse' => array(
      'source'  => 'google',
      'family'  => 'Copse',
      'stack'   => '"Copse", serif',
      'weights' => array( '400' )
    ),
    'corben' => array(
      'source'  => 'google',
      'family'  => 'Corben',
      'stack'   => '"Corben", cursive',
      'weights' => array( '400', '700' )
    ),
    'courgette' => array(
      'source'  => 'google',
      'family'  => 'Courgette',
      'stack'   => '"Courgette", cursive',
      'weights' => array( '400' )
    ),
    'cousine' => array(
      'source'  => 'google',
      'family'  => 'Cousine',
      'stack'   => '"Cousine", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'coustard' => array(
      'source'  => 'google',
      'family'  => 'Coustard',
      'stack'   => '"Coustard", serif',
      'weights' => array( '400', '900' )
    ),
    'coveredbyyourgrace' => array(
      'source'  => 'google',
      'family'  => 'Covered By Your Grace',
      'stack'   => '"Covered By Your Grace", cursive',
      'weights' => array( '400' )
    ),
    'craftygirls' => array(
      'source'  => 'google',
      'family'  => 'Crafty Girls',
      'stack'   => '"Crafty Girls", cursive',
      'weights' => array( '400' )
    ),
    'creepster' => array(
      'source'  => 'google',
      'family'  => 'Creepster',
      'stack'   => '"Creepster", cursive',
      'weights' => array( '400' )
    ),
    'creteround' => array(
      'source'  => 'google',
      'family'  => 'Crete Round',
      'stack'   => '"Crete Round", serif',
      'weights' => array( '400', '400italic' )
    ),
    'crimsontext' => array(
      'source'  => 'google',
      'family'  => 'Crimson Text',
      'stack'   => '"Crimson Text", serif',
      'weights' => array( '400', '400italic', '600', '600italic', '700', '700italic' )
    ),
    'croissantone' => array(
      'source'  => 'google',
      'family'  => 'Croissant One',
      'stack'   => '"Croissant One", cursive',
      'weights' => array( '400' )
    ),
    'crushed' => array(
      'source'  => 'google',
      'family'  => 'Crushed',
      'stack'   => '"Crushed", cursive',
      'weights' => array( '400' )
    ),
    'cuprum' => array(
      'source'  => 'google',
      'family'  => 'Cuprum',
      'stack'   => '"Cuprum", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'cutive' => array(
      'source'  => 'google',
      'family'  => 'Cutive',
      'stack'   => '"Cutive", serif',
      'weights' => array( '400' )
    ),
    'cutivemono' => array(
      'source'  => 'google',
      'family'  => 'Cutive Mono',
      'stack'   => '"Cutive Mono", monospace',
      'weights' => array( '400' )
    ),
    'damion' => array(
      'source'  => 'google',
      'family'  => 'Damion',
      'stack'   => '"Damion", cursive',
      'weights' => array( '400' )
    ),
    'dancingscript' => array(
      'source'  => 'google',
      'family'  => 'Dancing Script',
      'stack'   => '"Dancing Script", cursive',
      'weights' => array( '400', '700' )
    ),
    'dangrek' => array(
      'source'  => 'google',
      'family'  => 'Dangrek',
      'stack'   => '"Dangrek", cursive',
      'weights' => array( '400' )
    ),
    'dawningofanewday' => array(
      'source'  => 'google',
      'family'  => 'Dawning of a New Day',
      'stack'   => '"Dawning of a New Day", cursive',
      'weights' => array( '400' )
    ),
    'daysone' => array(
      'source'  => 'google',
      'family'  => 'Days One',
      'stack'   => '"Days One", sans-serif',
      'weights' => array( '400' )
    ),
    'dekko' => array(
      'source'  => 'google',
      'family'  => 'Dekko',
      'stack'   => '"Dekko", cursive',
      'weights' => array( '400' )
    ),
    'delius' => array(
      'source'  => 'google',
      'family'  => 'Delius',
      'stack'   => '"Delius", cursive',
      'weights' => array( '400' )
    ),
    'deliusswashcaps' => array(
      'source'  => 'google',
      'family'  => 'Delius Swash Caps',
      'stack'   => '"Delius Swash Caps", cursive',
      'weights' => array( '400' )
    ),
    'deliusunicase' => array(
      'source'  => 'google',
      'family'  => 'Delius Unicase',
      'stack'   => '"Delius Unicase", cursive',
      'weights' => array( '400', '700' )
    ),
    'dellarespira' => array(
      'source'  => 'google',
      'family'  => 'Della Respira',
      'stack'   => '"Della Respira", serif',
      'weights' => array( '400' )
    ),
    'denkone' => array(
      'source'  => 'google',
      'family'  => 'Denk One',
      'stack'   => '"Denk One", sans-serif',
      'weights' => array( '400' )
    ),
    'devonshire' => array(
      'source'  => 'google',
      'family'  => 'Devonshire',
      'stack'   => '"Devonshire", cursive',
      'weights' => array( '400' )
    ),
    'dhurjati' => array(
      'source'  => 'google',
      'family'  => 'Dhurjati',
      'stack'   => '"Dhurjati", sans-serif',
      'weights' => array( '400' )
    ),
    'didactgothic' => array(
      'source'  => 'google',
      'family'  => 'Didact Gothic',
      'stack'   => '"Didact Gothic", sans-serif',
      'weights' => array( '400' )
    ),
    'diplomata' => array(
      'source'  => 'google',
      'family'  => 'Diplomata',
      'stack'   => '"Diplomata", cursive',
      'weights' => array( '400' )
    ),
    'diplomatasc' => array(
      'source'  => 'google',
      'family'  => 'Diplomata SC',
      'stack'   => '"Diplomata SC", cursive',
      'weights' => array( '400' )
    ),
    'domine' => array(
      'source'  => 'google',
      'family'  => 'Domine',
      'stack'   => '"Domine", serif',
      'weights' => array( '400', '700' )
    ),
    'donegalone' => array(
      'source'  => 'google',
      'family'  => 'Donegal One',
      'stack'   => '"Donegal One", serif',
      'weights' => array( '400' )
    ),
    'doppioone' => array(
      'source'  => 'google',
      'family'  => 'Doppio One',
      'stack'   => '"Doppio One", sans-serif',
      'weights' => array( '400' )
    ),
    'dorsa' => array(
      'source'  => 'google',
      'family'  => 'Dorsa',
      'stack'   => '"Dorsa", sans-serif',
      'weights' => array( '400' )
    ),
    'dosis' => array(
      'source'  => 'google',
      'family'  => 'Dosis',
      'stack'   => '"Dosis", sans-serif',
      'weights' => array( '200', '300', '400', '500', '600', '700', '800' )
    ),
    'drsugiyama' => array(
      'source'  => 'google',
      'family'  => 'Dr Sugiyama',
      'stack'   => '"Dr Sugiyama", cursive',
      'weights' => array( '400' )
    ),
    'droidsans' => array(
      'source'  => 'google',
      'family'  => 'Droid Sans',
      'stack'   => '"Droid Sans", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'droidsansmono' => array(
      'source'  => 'google',
      'family'  => 'Droid Sans Mono',
      'stack'   => '"Droid Sans Mono", monospace',
      'weights' => array( '400' )
    ),
    'droidserif' => array(
      'source'  => 'google',
      'family'  => 'Droid Serif',
      'stack'   => '"Droid Serif", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'durusans' => array(
      'source'  => 'google',
      'family'  => 'Duru Sans',
      'stack'   => '"Duru Sans", sans-serif',
      'weights' => array( '400' )
    ),
    'dynalight' => array(
      'source'  => 'google',
      'family'  => 'Dynalight',
      'stack'   => '"Dynalight", cursive',
      'weights' => array( '400' )
    ),
    'ebgaramond' => array(
      'source'  => 'google',
      'family'  => 'EB Garamond',
      'stack'   => '"EB Garamond", serif',
      'weights' => array( '400' )
    ),
    'eaglelake' => array(
      'source'  => 'google',
      'family'  => 'Eagle Lake',
      'stack'   => '"Eagle Lake", cursive',
      'weights' => array( '400' )
    ),
    'eater' => array(
      'source'  => 'google',
      'family'  => 'Eater',
      'stack'   => '"Eater", cursive',
      'weights' => array( '400' )
    ),
    'economica' => array(
      'source'  => 'google',
      'family'  => 'Economica',
      'stack'   => '"Economica", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'eczar' => array(
      'source'  => 'google',
      'family'  => 'Eczar',
      'stack'   => '"Eczar", serif',
      'weights' => array( '400', '500', '600', '700', '800' )
    ),
    'ekmukta' => array(
      'source'  => 'google',
      'family'  => 'Ek Mukta',
      'stack'   => '"Ek Mukta", sans-serif',
      'weights' => array( '200', '300', '400', '500', '600', '700', '800' )
    ),
    'electrolize' => array(
      'source'  => 'google',
      'family'  => 'Electrolize',
      'stack'   => '"Electrolize", sans-serif',
      'weights' => array( '400' )
    ),
    'elsie' => array(
      'source'  => 'google',
      'family'  => 'Elsie',
      'stack'   => '"Elsie", cursive',
      'weights' => array( '400', '900' )
    ),
    'elsieswashcaps' => array(
      'source'  => 'google',
      'family'  => 'Elsie Swash Caps',
      'stack'   => '"Elsie Swash Caps", cursive',
      'weights' => array( '400', '900' )
    ),
    'emblemaone' => array(
      'source'  => 'google',
      'family'  => 'Emblema One',
      'stack'   => '"Emblema One", cursive',
      'weights' => array( '400' )
    ),
    'emilyscandy' => array(
      'source'  => 'google',
      'family'  => 'Emilys Candy',
      'stack'   => '"Emilys Candy", cursive',
      'weights' => array( '400' )
    ),
    'engagement' => array(
      'source'  => 'google',
      'family'  => 'Engagement',
      'stack'   => '"Engagement", cursive',
      'weights' => array( '400' )
    ),
    'englebert' => array(
      'source'  => 'google',
      'family'  => 'Englebert',
      'stack'   => '"Englebert", sans-serif',
      'weights' => array( '400' )
    ),
    'enriqueta' => array(
      'source'  => 'google',
      'family'  => 'Enriqueta',
      'stack'   => '"Enriqueta", serif',
      'weights' => array( '400', '700' )
    ),
    'ericaone' => array(
      'source'  => 'google',
      'family'  => 'Erica One',
      'stack'   => '"Erica One", cursive',
      'weights' => array( '400' )
    ),
    'esteban' => array(
      'source'  => 'google',
      'family'  => 'Esteban',
      'stack'   => '"Esteban", serif',
      'weights' => array( '400' )
    ),
    'euphoriascript' => array(
      'source'  => 'google',
      'family'  => 'Euphoria Script',
      'stack'   => '"Euphoria Script", cursive',
      'weights' => array( '400' )
    ),
    'ewert' => array(
      'source'  => 'google',
      'family'  => 'Ewert',
      'stack'   => '"Ewert", cursive',
      'weights' => array( '400' )
    ),
    'exo' => array(
      'source'  => 'google',
      'family'  => 'Exo',
      'stack'   => '"Exo", sans-serif',
      'weights' => array( '100', '100italic', '200', '200italic', '300', '300italic', '400', '400italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' )
    ),
    'exo2' => array(
      'source'  => 'google',
      'family'  => 'Exo 2',
      'stack'   => '"Exo 2", sans-serif',
      'weights' => array( '100', '100italic', '200', '200italic', '300', '300italic', '400', '400italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' )
    ),
    'expletussans' => array(
      'source'  => 'google',
      'family'  => 'Expletus Sans',
      'stack'   => '"Expletus Sans", cursive',
      'weights' => array( '400', '400italic', '500', '500italic', '600', '600italic', '700', '700italic' )
    ),
    'fanwoodtext' => array(
      'source'  => 'google',
      'family'  => 'Fanwood Text',
      'stack'   => '"Fanwood Text", serif',
      'weights' => array( '400', '400italic' )
    ),
    'fascinate' => array(
      'source'  => 'google',
      'family'  => 'Fascinate',
      'stack'   => '"Fascinate", cursive',
      'weights' => array( '400' )
    ),
    'fascinateinline' => array(
      'source'  => 'google',
      'family'  => 'Fascinate Inline',
      'stack'   => '"Fascinate Inline", cursive',
      'weights' => array( '400' )
    ),
    'fasterone' => array(
      'source'  => 'google',
      'family'  => 'Faster One',
      'stack'   => '"Faster One", cursive',
      'weights' => array( '400' )
    ),
    'fasthand' => array(
      'source'  => 'google',
      'family'  => 'Fasthand',
      'stack'   => '"Fasthand", serif',
      'weights' => array( '400' )
    ),
    'faunaone' => array(
      'source'  => 'google',
      'family'  => 'Fauna One',
      'stack'   => '"Fauna One", serif',
      'weights' => array( '400' )
    ),
    'federant' => array(
      'source'  => 'google',
      'family'  => 'Federant',
      'stack'   => '"Federant", cursive',
      'weights' => array( '400' )
    ),
    'federo' => array(
      'source'  => 'google',
      'family'  => 'Federo',
      'stack'   => '"Federo", sans-serif',
      'weights' => array( '400' )
    ),
    'felipa' => array(
      'source'  => 'google',
      'family'  => 'Felipa',
      'stack'   => '"Felipa", cursive',
      'weights' => array( '400' )
    ),
    'fenix' => array(
      'source'  => 'google',
      'family'  => 'Fenix',
      'stack'   => '"Fenix", serif',
      'weights' => array( '400' )
    ),
    'fingerpaint' => array(
      'source'  => 'google',
      'family'  => 'Finger Paint',
      'stack'   => '"Finger Paint", cursive',
      'weights' => array( '400' )
    ),
    'firamono' => array(
      'source'  => 'google',
      'family'  => 'Fira Mono',
      'stack'   => '"Fira Mono", monospace',
      'weights' => array( '400', '700' )
    ),
    'firasans' => array(
      'source'  => 'google',
      'family'  => 'Fira Sans',
      'stack'   => '"Fira Sans", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic' )
    ),
    'fjallaone' => array(
      'source'  => 'google',
      'family'  => 'Fjalla One',
      'stack'   => '"Fjalla One", sans-serif',
      'weights' => array( '400' )
    ),
    'fjordone' => array(
      'source'  => 'google',
      'family'  => 'Fjord One',
      'stack'   => '"Fjord One", serif',
      'weights' => array( '400' )
    ),
    'flamenco' => array(
      'source'  => 'google',
      'family'  => 'Flamenco',
      'stack'   => '"Flamenco", cursive',
      'weights' => array( '300', '400' )
    ),
    'flavors' => array(
      'source'  => 'google',
      'family'  => 'Flavors',
      'stack'   => '"Flavors", cursive',
      'weights' => array( '400' )
    ),
    'fondamento' => array(
      'source'  => 'google',
      'family'  => 'Fondamento',
      'stack'   => '"Fondamento", cursive',
      'weights' => array( '400', '400italic' )
    ),
    'fontdinerswanky' => array(
      'source'  => 'google',
      'family'  => 'Fontdiner Swanky',
      'stack'   => '"Fontdiner Swanky", cursive',
      'weights' => array( '400' )
    ),
    'forum' => array(
      'source'  => 'google',
      'family'  => 'Forum',
      'stack'   => '"Forum", cursive',
      'weights' => array( '400' )
    ),
    'francoisone' => array(
      'source'  => 'google',
      'family'  => 'Francois One',
      'stack'   => '"Francois One", sans-serif',
      'weights' => array( '400' )
    ),
    'freckleface' => array(
      'source'  => 'google',
      'family'  => 'Freckle Face',
      'stack'   => '"Freckle Face", cursive',
      'weights' => array( '400' )
    ),
    'frederickathegreat' => array(
      'source'  => 'google',
      'family'  => 'Fredericka the Great',
      'stack'   => '"Fredericka the Great", cursive',
      'weights' => array( '400' )
    ),
    'fredokaone' => array(
      'source'  => 'google',
      'family'  => 'Fredoka One',
      'stack'   => '"Fredoka One", cursive',
      'weights' => array( '400' )
    ),
    'freehand' => array(
      'source'  => 'google',
      'family'  => 'Freehand',
      'stack'   => '"Freehand", cursive',
      'weights' => array( '400' )
    ),
    'fresca' => array(
      'source'  => 'google',
      'family'  => 'Fresca',
      'stack'   => '"Fresca", sans-serif',
      'weights' => array( '400' )
    ),
    'frijole' => array(
      'source'  => 'google',
      'family'  => 'Frijole',
      'stack'   => '"Frijole", cursive',
      'weights' => array( '400' )
    ),
    'fruktur' => array(
      'source'  => 'google',
      'family'  => 'Fruktur',
      'stack'   => '"Fruktur", cursive',
      'weights' => array( '400' )
    ),
    'fugazone' => array(
      'source'  => 'google',
      'family'  => 'Fugaz One',
      'stack'   => '"Fugaz One", cursive',
      'weights' => array( '400' )
    ),
    'gfsdidot' => array(
      'source'  => 'google',
      'family'  => 'GFS Didot',
      'stack'   => '"GFS Didot", serif',
      'weights' => array( '400' )
    ),
    'gfsneohellenic' => array(
      'source'  => 'google',
      'family'  => 'GFS Neohellenic',
      'stack'   => '"GFS Neohellenic", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'gabriela' => array(
      'source'  => 'google',
      'family'  => 'Gabriela',
      'stack'   => '"Gabriela", serif',
      'weights' => array( '400' )
    ),
    'gafata' => array(
      'source'  => 'google',
      'family'  => 'Gafata',
      'stack'   => '"Gafata", sans-serif',
      'weights' => array( '400' )
    ),
    'galdeano' => array(
      'source'  => 'google',
      'family'  => 'Galdeano',
      'stack'   => '"Galdeano", sans-serif',
      'weights' => array( '400' )
    ),
    'galindo' => array(
      'source'  => 'google',
      'family'  => 'Galindo',
      'stack'   => '"Galindo", cursive',
      'weights' => array( '400' )
    ),
    'gentiumbasic' => array(
      'source'  => 'google',
      'family'  => 'Gentium Basic',
      'stack'   => '"Gentium Basic", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'gentiumbookbasic' => array(
      'source'  => 'google',
      'family'  => 'Gentium Book Basic',
      'stack'   => '"Gentium Book Basic", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'geo' => array(
      'source'  => 'google',
      'family'  => 'Geo',
      'stack'   => '"Geo", sans-serif',
      'weights' => array( '400', '400italic' )
    ),
    'geostar' => array(
      'source'  => 'google',
      'family'  => 'Geostar',
      'stack'   => '"Geostar", cursive',
      'weights' => array( '400' )
    ),
    'geostarfill' => array(
      'source'  => 'google',
      'family'  => 'Geostar Fill',
      'stack'   => '"Geostar Fill", cursive',
      'weights' => array( '400' )
    ),
    'germaniaone' => array(
      'source'  => 'google',
      'family'  => 'Germania One',
      'stack'   => '"Germania One", cursive',
      'weights' => array( '400' )
    ),
    'gidugu' => array(
      'source'  => 'google',
      'family'  => 'Gidugu',
      'stack'   => '"Gidugu", sans-serif',
      'weights' => array( '400' )
    ),
    'gildadisplay' => array(
      'source'  => 'google',
      'family'  => 'Gilda Display',
      'stack'   => '"Gilda Display", serif',
      'weights' => array( '400' )
    ),
    'giveyouglory' => array(
      'source'  => 'google',
      'family'  => 'Give You Glory',
      'stack'   => '"Give You Glory", cursive',
      'weights' => array( '400' )
    ),
    'glassantiqua' => array(
      'source'  => 'google',
      'family'  => 'Glass Antiqua',
      'stack'   => '"Glass Antiqua", cursive',
      'weights' => array( '400' )
    ),
    'glegoo' => array(
      'source'  => 'google',
      'family'  => 'Glegoo',
      'stack'   => '"Glegoo", serif',
      'weights' => array( '400', '700' )
    ),
    'gloriahallelujah' => array(
      'source'  => 'google',
      'family'  => 'Gloria Hallelujah',
      'stack'   => '"Gloria Hallelujah", cursive',
      'weights' => array( '400' )
    ),
    'goblinone' => array(
      'source'  => 'google',
      'family'  => 'Goblin One',
      'stack'   => '"Goblin One", cursive',
      'weights' => array( '400' )
    ),
    'gochihand' => array(
      'source'  => 'google',
      'family'  => 'Gochi Hand',
      'stack'   => '"Gochi Hand", cursive',
      'weights' => array( '400' )
    ),
    'gorditas' => array(
      'source'  => 'google',
      'family'  => 'Gorditas',
      'stack'   => '"Gorditas", cursive',
      'weights' => array( '400', '700' )
    ),
    'goudybookletter1911' => array(
      'source'  => 'google',
      'family'  => 'Goudy Bookletter 1911',
      'stack'   => '"Goudy Bookletter 1911", serif',
      'weights' => array( '400' )
    ),
    'graduate' => array(
      'source'  => 'google',
      'family'  => 'Graduate',
      'stack'   => '"Graduate", cursive',
      'weights' => array( '400' )
    ),
    'grandhotel' => array(
      'source'  => 'google',
      'family'  => 'Grand Hotel',
      'stack'   => '"Grand Hotel", cursive',
      'weights' => array( '400' )
    ),
    'gravitasone' => array(
      'source'  => 'google',
      'family'  => 'Gravitas One',
      'stack'   => '"Gravitas One", cursive',
      'weights' => array( '400' )
    ),
    'greatvibes' => array(
      'source'  => 'google',
      'family'  => 'Great Vibes',
      'stack'   => '"Great Vibes", cursive',
      'weights' => array( '400' )
    ),
    'griffy' => array(
      'source'  => 'google',
      'family'  => 'Griffy',
      'stack'   => '"Griffy", cursive',
      'weights' => array( '400' )
    ),
    'gruppo' => array(
      'source'  => 'google',
      'family'  => 'Gruppo',
      'stack'   => '"Gruppo", cursive',
      'weights' => array( '400' )
    ),
    'gudea' => array(
      'source'  => 'google',
      'family'  => 'Gudea',
      'stack'   => '"Gudea", sans-serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'gurajada' => array(
      'source'  => 'google',
      'family'  => 'Gurajada',
      'stack'   => '"Gurajada", serif',
      'weights' => array( '400' )
    ),
    'habibi' => array(
      'source'  => 'google',
      'family'  => 'Habibi',
      'stack'   => '"Habibi", serif',
      'weights' => array( '400' )
    ),
    'halant' => array(
      'source'  => 'google',
      'family'  => 'Halant',
      'stack'   => '"Halant", serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'hammersmithone' => array(
      'source'  => 'google',
      'family'  => 'Hammersmith One',
      'stack'   => '"Hammersmith One", sans-serif',
      'weights' => array( '400' )
    ),
    'hanalei' => array(
      'source'  => 'google',
      'family'  => 'Hanalei',
      'stack'   => '"Hanalei", cursive',
      'weights' => array( '400' )
    ),
    'hanaleifill' => array(
      'source'  => 'google',
      'family'  => 'Hanalei Fill',
      'stack'   => '"Hanalei Fill", cursive',
      'weights' => array( '400' )
    ),
    'handlee' => array(
      'source'  => 'google',
      'family'  => 'Handlee',
      'stack'   => '"Handlee", cursive',
      'weights' => array( '400' )
    ),
    'hanuman' => array(
      'source'  => 'google',
      'family'  => 'Hanuman',
      'stack'   => '"Hanuman", serif',
      'weights' => array( '400', '700' )
    ),
    'happymonkey' => array(
      'source'  => 'google',
      'family'  => 'Happy Monkey',
      'stack'   => '"Happy Monkey", cursive',
      'weights' => array( '400' )
    ),
    'headlandone' => array(
      'source'  => 'google',
      'family'  => 'Headland One',
      'stack'   => '"Headland One", serif',
      'weights' => array( '400' )
    ),
    'hennypenny' => array(
      'source'  => 'google',
      'family'  => 'Henny Penny',
      'stack'   => '"Henny Penny", cursive',
      'weights' => array( '400' )
    ),
    'herrvonmuellerhoff' => array(
      'source'  => 'google',
      'family'  => 'Herr Von Muellerhoff',
      'stack'   => '"Herr Von Muellerhoff", cursive',
      'weights' => array( '400' )
    ),
    'hind' => array(
      'source'  => 'google',
      'family'  => 'Hind',
      'stack'   => '"Hind", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'hindsiliguri' => array(
      'source'  => 'google',
      'family'  => 'Hind Siliguri',
      'stack'   => '"Hind Siliguri", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'hindvadodara' => array(
      'source'  => 'google',
      'family'  => 'Hind Vadodara',
      'stack'   => '"Hind Vadodara", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'holtwoodonesc' => array(
      'source'  => 'google',
      'family'  => 'Holtwood One SC',
      'stack'   => '"Holtwood One SC", serif',
      'weights' => array( '400' )
    ),
    'homemadeapple' => array(
      'source'  => 'google',
      'family'  => 'Homemade Apple',
      'stack'   => '"Homemade Apple", cursive',
      'weights' => array( '400' )
    ),
    'homenaje' => array(
      'source'  => 'google',
      'family'  => 'Homenaje',
      'stack'   => '"Homenaje", sans-serif',
      'weights' => array( '400' )
    ),
    'imfelldwpica' => array(
      'source'  => 'google',
      'family'  => 'IM Fell DW Pica',
      'stack'   => '"IM Fell DW Pica", serif',
      'weights' => array( '400', '400italic' )
    ),
    'imfelldwpicasc' => array(
      'source'  => 'google',
      'family'  => 'IM Fell DW Pica SC',
      'stack'   => '"IM Fell DW Pica SC", serif',
      'weights' => array( '400' )
    ),
    'imfelldoublepica' => array(
      'source'  => 'google',
      'family'  => 'IM Fell Double Pica',
      'stack'   => '"IM Fell Double Pica", serif',
      'weights' => array( '400', '400italic' )
    ),
    'imfelldoublepicasc' => array(
      'source'  => 'google',
      'family'  => 'IM Fell Double Pica SC',
      'stack'   => '"IM Fell Double Pica SC", serif',
      'weights' => array( '400' )
    ),
    'imfellenglish' => array(
      'source'  => 'google',
      'family'  => 'IM Fell English',
      'stack'   => '"IM Fell English", serif',
      'weights' => array( '400', '400italic' )
    ),
    'imfellenglishsc' => array(
      'source'  => 'google',
      'family'  => 'IM Fell English SC',
      'stack'   => '"IM Fell English SC", serif',
      'weights' => array( '400' )
    ),
    'imfellfrenchcanon' => array(
      'source'  => 'google',
      'family'  => 'IM Fell French Canon',
      'stack'   => '"IM Fell French Canon", serif',
      'weights' => array( '400', '400italic' )
    ),
    'imfellfrenchcanonsc' => array(
      'source'  => 'google',
      'family'  => 'IM Fell French Canon SC',
      'stack'   => '"IM Fell French Canon SC", serif',
      'weights' => array( '400' )
    ),
    'imfellgreatprimer' => array(
      'source'  => 'google',
      'family'  => 'IM Fell Great Primer',
      'stack'   => '"IM Fell Great Primer", serif',
      'weights' => array( '400', '400italic' )
    ),
    'imfellgreatprimersc' => array(
      'source'  => 'google',
      'family'  => 'IM Fell Great Primer SC',
      'stack'   => '"IM Fell Great Primer SC", serif',
      'weights' => array( '400' )
    ),
    'iceberg' => array(
      'source'  => 'google',
      'family'  => 'Iceberg',
      'stack'   => '"Iceberg", cursive',
      'weights' => array( '400' )
    ),
    'iceland' => array(
      'source'  => 'google',
      'family'  => 'Iceland',
      'stack'   => '"Iceland", cursive',
      'weights' => array( '400' )
    ),
    'imprima' => array(
      'source'  => 'google',
      'family'  => 'Imprima',
      'stack'   => '"Imprima", sans-serif',
      'weights' => array( '400' )
    ),
    'inconsolata' => array(
      'source'  => 'google',
      'family'  => 'Inconsolata',
      'stack'   => '"Inconsolata", monospace',
      'weights' => array( '400', '700' )
    ),
    'inder' => array(
      'source'  => 'google',
      'family'  => 'Inder',
      'stack'   => '"Inder", sans-serif',
      'weights' => array( '400' )
    ),
    'indieflower' => array(
      'source'  => 'google',
      'family'  => 'Indie Flower',
      'stack'   => '"Indie Flower", cursive',
      'weights' => array( '400' )
    ),
    'inika' => array(
      'source'  => 'google',
      'family'  => 'Inika',
      'stack'   => '"Inika", serif',
      'weights' => array( '400', '700' )
    ),
    'inknutantiqua' => array(
      'source'  => 'google',
      'family'  => 'Inknut Antiqua',
      'stack'   => '"Inknut Antiqua", serif',
      'weights' => array( '300', '400', '500', '600', '700', '800', '900' )
    ),
    'irishgrover' => array(
      'source'  => 'google',
      'family'  => 'Irish Grover',
      'stack'   => '"Irish Grover", cursive',
      'weights' => array( '400' )
    ),
    'istokweb' => array(
      'source'  => 'google',
      'family'  => 'Istok Web',
      'stack'   => '"Istok Web", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'italiana' => array(
      'source'  => 'google',
      'family'  => 'Italiana',
      'stack'   => '"Italiana", serif',
      'weights' => array( '400' )
    ),
    'italianno' => array(
      'source'  => 'google',
      'family'  => 'Italianno',
      'stack'   => '"Italianno", cursive',
      'weights' => array( '400' )
    ),
    'itim' => array(
      'source'  => 'google',
      'family'  => 'Itim',
      'stack'   => '"Itim", cursive',
      'weights' => array( '400' )
    ),
    'jacquesfrancois' => array(
      'source'  => 'google',
      'family'  => 'Jacques Francois',
      'stack'   => '"Jacques Francois", serif',
      'weights' => array( '400' )
    ),
    'jacquesfrancoisshadow' => array(
      'source'  => 'google',
      'family'  => 'Jacques Francois Shadow',
      'stack'   => '"Jacques Francois Shadow", cursive',
      'weights' => array( '400' )
    ),
    'jaldi' => array(
      'source'  => 'google',
      'family'  => 'Jaldi',
      'stack'   => '"Jaldi", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'jimnightshade' => array(
      'source'  => 'google',
      'family'  => 'Jim Nightshade',
      'stack'   => '"Jim Nightshade", cursive',
      'weights' => array( '400' )
    ),
    'jockeyone' => array(
      'source'  => 'google',
      'family'  => 'Jockey One',
      'stack'   => '"Jockey One", sans-serif',
      'weights' => array( '400' )
    ),
    'jollylodger' => array(
      'source'  => 'google',
      'family'  => 'Jolly Lodger',
      'stack'   => '"Jolly Lodger", cursive',
      'weights' => array( '400' )
    ),
    'josefinsans' => array(
      'source'  => 'google',
      'family'  => 'Josefin Sans',
      'stack'   => '"Josefin Sans", sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic' )
    ),
    'josefinslab' => array(
      'source'  => 'google',
      'family'  => 'Josefin Slab',
      'stack'   => '"Josefin Slab", serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic' )
    ),
    'jotione' => array(
      'source'  => 'google',
      'family'  => 'Joti One',
      'stack'   => '"Joti One", cursive',
      'weights' => array( '400' )
    ),
    'judson' => array(
      'source'  => 'google',
      'family'  => 'Judson',
      'stack'   => '"Judson", serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'julee' => array(
      'source'  => 'google',
      'family'  => 'Julee',
      'stack'   => '"Julee", cursive',
      'weights' => array( '400' )
    ),
    'juliussansone' => array(
      'source'  => 'google',
      'family'  => 'Julius Sans One',
      'stack'   => '"Julius Sans One", sans-serif',
      'weights' => array( '400' )
    ),
    'junge' => array(
      'source'  => 'google',
      'family'  => 'Junge',
      'stack'   => '"Junge", serif',
      'weights' => array( '400' )
    ),
    'jura' => array(
      'source'  => 'google',
      'family'  => 'Jura',
      'stack'   => '"Jura", sans-serif',
      'weights' => array( '300', '400', '500', '600' )
    ),
    'justanotherhand' => array(
      'source'  => 'google',
      'family'  => 'Just Another Hand',
      'stack'   => '"Just Another Hand", cursive',
      'weights' => array( '400' )
    ),
    'justmeagaindownhere' => array(
      'source'  => 'google',
      'family'  => 'Just Me Again Down Here',
      'stack'   => '"Just Me Again Down Here", cursive',
      'weights' => array( '400' )
    ),
    'kadwa' => array(
      'source'  => 'google',
      'family'  => 'Kadwa',
      'stack'   => '"Kadwa", serif',
      'weights' => array( '400', '700' )
    ),
    'kalam' => array(
      'source'  => 'google',
      'family'  => 'Kalam',
      'stack'   => '"Kalam", cursive',
      'weights' => array( '300', '400', '700' )
    ),
    'kameron' => array(
      'source'  => 'google',
      'family'  => 'Kameron',
      'stack'   => '"Kameron", serif',
      'weights' => array( '400', '700' )
    ),
    'kantumruy' => array(
      'source'  => 'google',
      'family'  => 'Kantumruy',
      'stack'   => '"Kantumruy", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'karla' => array(
      'source'  => 'google',
      'family'  => 'Karla',
      'stack'   => '"Karla", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'karma' => array(
      'source'  => 'google',
      'family'  => 'Karma',
      'stack'   => '"Karma", serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'kaushanscript' => array(
      'source'  => 'google',
      'family'  => 'Kaushan Script',
      'stack'   => '"Kaushan Script", cursive',
      'weights' => array( '400' )
    ),
    'kavoon' => array(
      'source'  => 'google',
      'family'  => 'Kavoon',
      'stack'   => '"Kavoon", cursive',
      'weights' => array( '400' )
    ),
    'kdamthmor' => array(
      'source'  => 'google',
      'family'  => 'Kdam Thmor',
      'stack'   => '"Kdam Thmor", cursive',
      'weights' => array( '400' )
    ),
    'keaniaone' => array(
      'source'  => 'google',
      'family'  => 'Keania One',
      'stack'   => '"Keania One", cursive',
      'weights' => array( '400' )
    ),
    'kellyslab' => array(
      'source'  => 'google',
      'family'  => 'Kelly Slab',
      'stack'   => '"Kelly Slab", cursive',
      'weights' => array( '400' )
    ),
    'kenia' => array(
      'source'  => 'google',
      'family'  => 'Kenia',
      'stack'   => '"Kenia", cursive',
      'weights' => array( '400' )
    ),
    'khand' => array(
      'source'  => 'google',
      'family'  => 'Khand',
      'stack'   => '"Khand", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'khmer' => array(
      'source'  => 'google',
      'family'  => 'Khmer',
      'stack'   => '"Khmer", cursive',
      'weights' => array( '400' )
    ),
    'khula' => array(
      'source'  => 'google',
      'family'  => 'Khula',
      'stack'   => '"Khula", sans-serif',
      'weights' => array( '300', '400', '600', '700', '800' )
    ),
    'kiteone' => array(
      'source'  => 'google',
      'family'  => 'Kite One',
      'stack'   => '"Kite One", sans-serif',
      'weights' => array( '400' )
    ),
    'knewave' => array(
      'source'  => 'google',
      'family'  => 'Knewave',
      'stack'   => '"Knewave", cursive',
      'weights' => array( '400' )
    ),
    'kottaone' => array(
      'source'  => 'google',
      'family'  => 'Kotta One',
      'stack'   => '"Kotta One", serif',
      'weights' => array( '400' )
    ),
    'koulen' => array(
      'source'  => 'google',
      'family'  => 'Koulen',
      'stack'   => '"Koulen", cursive',
      'weights' => array( '400' )
    ),
    'kranky' => array(
      'source'  => 'google',
      'family'  => 'Kranky',
      'stack'   => '"Kranky", cursive',
      'weights' => array( '400' )
    ),
    'kreon' => array(
      'source'  => 'google',
      'family'  => 'Kreon',
      'stack'   => '"Kreon", serif',
      'weights' => array( '300', '400', '700' )
    ),
    'kristi' => array(
      'source'  => 'google',
      'family'  => 'Kristi',
      'stack'   => '"Kristi", cursive',
      'weights' => array( '400' )
    ),
    'kronaone' => array(
      'source'  => 'google',
      'family'  => 'Krona One',
      'stack'   => '"Krona One", sans-serif',
      'weights' => array( '400' )
    ),
    'kurale' => array(
      'source'  => 'google',
      'family'  => 'Kurale',
      'stack'   => '"Kurale", serif',
      'weights' => array( '400' )
    ),
    'labelleaurore' => array(
      'source'  => 'google',
      'family'  => 'La Belle Aurore',
      'stack'   => '"La Belle Aurore", cursive',
      'weights' => array( '400' )
    ),
    'laila' => array(
      'source'  => 'google',
      'family'  => 'Laila',
      'stack'   => '"Laila", serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'lakkireddy' => array(
      'source'  => 'google',
      'family'  => 'Lakki Reddy',
      'stack'   => '"Lakki Reddy", cursive',
      'weights' => array( '400' )
    ),
    'lancelot' => array(
      'source'  => 'google',
      'family'  => 'Lancelot',
      'stack'   => '"Lancelot", cursive',
      'weights' => array( '400' )
    ),
    'lateef' => array(
      'source'  => 'google',
      'family'  => 'Lateef',
      'stack'   => '"Lateef", cursive',
      'weights' => array( '400' )
    ),
    'lato' => array(
      'source'  => 'google',
      'family'  => 'Lato',
      'stack'   => '"Lato", sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'leaguescript' => array(
      'source'  => 'google',
      'family'  => 'League Script',
      'stack'   => '"League Script", cursive',
      'weights' => array( '400' )
    ),
    'leckerlione' => array(
      'source'  => 'google',
      'family'  => 'Leckerli One',
      'stack'   => '"Leckerli One", cursive',
      'weights' => array( '400' )
    ),
    'ledger' => array(
      'source'  => 'google',
      'family'  => 'Ledger',
      'stack'   => '"Ledger", serif',
      'weights' => array( '400' )
    ),
    'lekton' => array(
      'source'  => 'google',
      'family'  => 'Lekton',
      'stack'   => '"Lekton", sans-serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'lemon' => array(
      'source'  => 'google',
      'family'  => 'Lemon',
      'stack'   => '"Lemon", cursive',
      'weights' => array( '400' )
    ),
    'librebaskerville' => array(
      'source'  => 'google',
      'family'  => 'Libre Baskerville',
      'stack'   => '"Libre Baskerville", serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'lifesavers' => array(
      'source'  => 'google',
      'family'  => 'Life Savers',
      'stack'   => '"Life Savers", cursive',
      'weights' => array( '400', '700' )
    ),
    'lilitaone' => array(
      'source'  => 'google',
      'family'  => 'Lilita One',
      'stack'   => '"Lilita One", cursive',
      'weights' => array( '400' )
    ),
    'lilyscriptone' => array(
      'source'  => 'google',
      'family'  => 'Lily Script One',
      'stack'   => '"Lily Script One", cursive',
      'weights' => array( '400' )
    ),
    'limelight' => array(
      'source'  => 'google',
      'family'  => 'Limelight',
      'stack'   => '"Limelight", cursive',
      'weights' => array( '400' )
    ),
    'lindenhill' => array(
      'source'  => 'google',
      'family'  => 'Linden Hill',
      'stack'   => '"Linden Hill", serif',
      'weights' => array( '400', '400italic' )
    ),
    'lobster' => array(
      'source'  => 'google',
      'family'  => 'Lobster',
      'stack'   => '"Lobster", cursive',
      'weights' => array( '400' )
    ),
    'lobstertwo' => array(
      'source'  => 'google',
      'family'  => 'Lobster Two',
      'stack'   => '"Lobster Two", cursive',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'londrinaoutline' => array(
      'source'  => 'google',
      'family'  => 'Londrina Outline',
      'stack'   => '"Londrina Outline", cursive',
      'weights' => array( '400' )
    ),
    'londrinashadow' => array(
      'source'  => 'google',
      'family'  => 'Londrina Shadow',
      'stack'   => '"Londrina Shadow", cursive',
      'weights' => array( '400' )
    ),
    'londrinasketch' => array(
      'source'  => 'google',
      'family'  => 'Londrina Sketch',
      'stack'   => '"Londrina Sketch", cursive',
      'weights' => array( '400' )
    ),
    'londrinasolid' => array(
      'source'  => 'google',
      'family'  => 'Londrina Solid',
      'stack'   => '"Londrina Solid", cursive',
      'weights' => array( '400' )
    ),
    'lora' => array(
      'source'  => 'google',
      'family'  => 'Lora',
      'stack'   => '"Lora", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'loveyalikeasister' => array(
      'source'  => 'google',
      'family'  => 'Love Ya Like A Sister',
      'stack'   => '"Love Ya Like A Sister", cursive',
      'weights' => array( '400' )
    ),
    'lovedbytheking' => array(
      'source'  => 'google',
      'family'  => 'Loved by the King',
      'stack'   => '"Loved by the King", cursive',
      'weights' => array( '400' )
    ),
    'loversquarrel' => array(
      'source'  => 'google',
      'family'  => 'Lovers Quarrel',
      'stack'   => '"Lovers Quarrel", cursive',
      'weights' => array( '400' )
    ),
    'luckiestguy' => array(
      'source'  => 'google',
      'family'  => 'Luckiest Guy',
      'stack'   => '"Luckiest Guy", cursive',
      'weights' => array( '400' )
    ),
    'lusitana' => array(
      'source'  => 'google',
      'family'  => 'Lusitana',
      'stack'   => '"Lusitana", serif',
      'weights' => array( '400', '700' )
    ),
    'lustria' => array(
      'source'  => 'google',
      'family'  => 'Lustria',
      'stack'   => '"Lustria", serif',
      'weights' => array( '400' )
    ),
    'macondo' => array(
      'source'  => 'google',
      'family'  => 'Macondo',
      'stack'   => '"Macondo", cursive',
      'weights' => array( '400' )
    ),
    'macondoswashcaps' => array(
      'source'  => 'google',
      'family'  => 'Macondo Swash Caps',
      'stack'   => '"Macondo Swash Caps", cursive',
      'weights' => array( '400' )
    ),
    'magra' => array(
      'source'  => 'google',
      'family'  => 'Magra',
      'stack'   => '"Magra", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'maidenorange' => array(
      'source'  => 'google',
      'family'  => 'Maiden Orange',
      'stack'   => '"Maiden Orange", cursive',
      'weights' => array( '400' )
    ),
    'mako' => array(
      'source'  => 'google',
      'family'  => 'Mako',
      'stack'   => '"Mako", sans-serif',
      'weights' => array( '400' )
    ),
    'mallanna' => array(
      'source'  => 'google',
      'family'  => 'Mallanna',
      'stack'   => '"Mallanna", sans-serif',
      'weights' => array( '400' )
    ),
    'mandali' => array(
      'source'  => 'google',
      'family'  => 'Mandali',
      'stack'   => '"Mandali", sans-serif',
      'weights' => array( '400' )
    ),
    'marcellus' => array(
      'source'  => 'google',
      'family'  => 'Marcellus',
      'stack'   => '"Marcellus", serif',
      'weights' => array( '400' )
    ),
    'marcellussc' => array(
      'source'  => 'google',
      'family'  => 'Marcellus SC',
      'stack'   => '"Marcellus SC", serif',
      'weights' => array( '400' )
    ),
    'marckscript' => array(
      'source'  => 'google',
      'family'  => 'Marck Script',
      'stack'   => '"Marck Script", cursive',
      'weights' => array( '400' )
    ),
    'margarine' => array(
      'source'  => 'google',
      'family'  => 'Margarine',
      'stack'   => '"Margarine", cursive',
      'weights' => array( '400' )
    ),
    'markoone' => array(
      'source'  => 'google',
      'family'  => 'Marko One',
      'stack'   => '"Marko One", serif',
      'weights' => array( '400' )
    ),
    'marmelad' => array(
      'source'  => 'google',
      'family'  => 'Marmelad',
      'stack'   => '"Marmelad", sans-serif',
      'weights' => array( '400' )
    ),
    'martel' => array(
      'source'  => 'google',
      'family'  => 'Martel',
      'stack'   => '"Martel", serif',
      'weights' => array( '200', '300', '400', '600', '700', '800', '900' )
    ),
    'martelsans' => array(
      'source'  => 'google',
      'family'  => 'Martel Sans',
      'stack'   => '"Martel Sans", sans-serif',
      'weights' => array( '200', '300', '400', '600', '700', '800', '900' )
    ),
    'marvel' => array(
      'source'  => 'google',
      'family'  => 'Marvel',
      'stack'   => '"Marvel", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'mate' => array(
      'source'  => 'google',
      'family'  => 'Mate',
      'stack'   => '"Mate", serif',
      'weights' => array( '400', '400italic' )
    ),
    'matesc' => array(
      'source'  => 'google',
      'family'  => 'Mate SC',
      'stack'   => '"Mate SC", serif',
      'weights' => array( '400' )
    ),
    'mavenpro' => array(
      'source'  => 'google',
      'family'  => 'Maven Pro',
      'stack'   => '"Maven Pro", sans-serif',
      'weights' => array( '400', '500', '700', '900' )
    ),
    'mclaren' => array(
      'source'  => 'google',
      'family'  => 'McLaren',
      'stack'   => '"McLaren", cursive',
      'weights' => array( '400' )
    ),
    'meddon' => array(
      'source'  => 'google',
      'family'  => 'Meddon',
      'stack'   => '"Meddon", cursive',
      'weights' => array( '400' )
    ),
    'medievalsharp' => array(
      'source'  => 'google',
      'family'  => 'MedievalSharp',
      'stack'   => '"MedievalSharp", cursive',
      'weights' => array( '400' )
    ),
    'medulaone' => array(
      'source'  => 'google',
      'family'  => 'Medula One',
      'stack'   => '"Medula One", cursive',
      'weights' => array( '400' )
    ),
    'megrim' => array(
      'source'  => 'google',
      'family'  => 'Megrim',
      'stack'   => '"Megrim", cursive',
      'weights' => array( '400' )
    ),
    'meiescript' => array(
      'source'  => 'google',
      'family'  => 'Meie Script',
      'stack'   => '"Meie Script", cursive',
      'weights' => array( '400' )
    ),
    'merienda' => array(
      'source'  => 'google',
      'family'  => 'Merienda',
      'stack'   => '"Merienda", cursive',
      'weights' => array( '400', '700' )
    ),
    'meriendaone' => array(
      'source'  => 'google',
      'family'  => 'Merienda One',
      'stack'   => '"Merienda One", cursive',
      'weights' => array( '400' )
    ),
    'merriweather' => array(
      'source'  => 'google',
      'family'  => 'Merriweather',
      'stack'   => '"Merriweather", serif',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'merriweathersans' => array(
      'source'  => 'google',
      'family'  => 'Merriweather Sans',
      'stack'   => '"Merriweather Sans", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic', '800', '800italic' )
    ),
    'metal' => array(
      'source'  => 'google',
      'family'  => 'Metal',
      'stack'   => '"Metal", cursive',
      'weights' => array( '400' )
    ),
    'metalmania' => array(
      'source'  => 'google',
      'family'  => 'Metal Mania',
      'stack'   => '"Metal Mania", cursive',
      'weights' => array( '400' )
    ),
    'metamorphous' => array(
      'source'  => 'google',
      'family'  => 'Metamorphous',
      'stack'   => '"Metamorphous", cursive',
      'weights' => array( '400' )
    ),
    'metrophobic' => array(
      'source'  => 'google',
      'family'  => 'Metrophobic',
      'stack'   => '"Metrophobic", sans-serif',
      'weights' => array( '400' )
    ),
    'michroma' => array(
      'source'  => 'google',
      'family'  => 'Michroma',
      'stack'   => '"Michroma", sans-serif',
      'weights' => array( '400' )
    ),
    'milonga' => array(
      'source'  => 'google',
      'family'  => 'Milonga',
      'stack'   => '"Milonga", cursive',
      'weights' => array( '400' )
    ),
    'miltonian' => array(
      'source'  => 'google',
      'family'  => 'Miltonian',
      'stack'   => '"Miltonian", cursive',
      'weights' => array( '400' )
    ),
    'miltoniantattoo' => array(
      'source'  => 'google',
      'family'  => 'Miltonian Tattoo',
      'stack'   => '"Miltonian Tattoo", cursive',
      'weights' => array( '400' )
    ),
    'miniver' => array(
      'source'  => 'google',
      'family'  => 'Miniver',
      'stack'   => '"Miniver", cursive',
      'weights' => array( '400' )
    ),
    'missfajardose' => array(
      'source'  => 'google',
      'family'  => 'Miss Fajardose',
      'stack'   => '"Miss Fajardose", cursive',
      'weights' => array( '400' )
    ),
    'modak' => array(
      'source'  => 'google',
      'family'  => 'Modak',
      'stack'   => '"Modak", cursive',
      'weights' => array( '400' )
    ),
    'modernantiqua' => array(
      'source'  => 'google',
      'family'  => 'Modern Antiqua',
      'stack'   => '"Modern Antiqua", cursive',
      'weights' => array( '400' )
    ),
    'molengo' => array(
      'source'  => 'google',
      'family'  => 'Molengo',
      'stack'   => '"Molengo", sans-serif',
      'weights' => array( '400' )
    ),
    'molle' => array(
      'source'  => 'google',
      'family'  => 'Molle',
      'stack'   => '"Molle", cursive',
      'weights' => array( '400italic' )
    ),
    'monda' => array(
      'source'  => 'google',
      'family'  => 'Monda',
      'stack'   => '"Monda", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'monofett' => array(
      'source'  => 'google',
      'family'  => 'Monofett',
      'stack'   => '"Monofett", cursive',
      'weights' => array( '400' )
    ),
    'monoton' => array(
      'source'  => 'google',
      'family'  => 'Monoton',
      'stack'   => '"Monoton", cursive',
      'weights' => array( '400' )
    ),
    'monsieurladoulaise' => array(
      'source'  => 'google',
      'family'  => 'Monsieur La Doulaise',
      'stack'   => '"Monsieur La Doulaise", cursive',
      'weights' => array( '400' )
    ),
    'montaga' => array(
      'source'  => 'google',
      'family'  => 'Montaga',
      'stack'   => '"Montaga", serif',
      'weights' => array( '400' )
    ),
    'montez' => array(
      'source'  => 'google',
      'family'  => 'Montez',
      'stack'   => '"Montez", cursive',
      'weights' => array( '400' )
    ),
    'montserrat' => array(
      'source'  => 'google',
      'family'  => 'Montserrat',
      'stack'   => '"Montserrat", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'montserratalternates' => array(
      'source'  => 'google',
      'family'  => 'Montserrat Alternates',
      'stack'   => '"Montserrat Alternates", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'montserratsubrayada' => array(
      'source'  => 'google',
      'family'  => 'Montserrat Subrayada',
      'stack'   => '"Montserrat Subrayada", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'moul' => array(
      'source'  => 'google',
      'family'  => 'Moul',
      'stack'   => '"Moul", cursive',
      'weights' => array( '400' )
    ),
    'moulpali' => array(
      'source'  => 'google',
      'family'  => 'Moulpali',
      'stack'   => '"Moulpali", cursive',
      'weights' => array( '400' )
    ),
    'mountainsofchristmas' => array(
      'source'  => 'google',
      'family'  => 'Mountains of Christmas',
      'stack'   => '"Mountains of Christmas", cursive',
      'weights' => array( '400', '700' )
    ),
    'mousememoirs' => array(
      'source'  => 'google',
      'family'  => 'Mouse Memoirs',
      'stack'   => '"Mouse Memoirs", sans-serif',
      'weights' => array( '400' )
    ),
    'mrbedfort' => array(
      'source'  => 'google',
      'family'  => 'Mr Bedfort',
      'stack'   => '"Mr Bedfort", cursive',
      'weights' => array( '400' )
    ),
    'mrdafoe' => array(
      'source'  => 'google',
      'family'  => 'Mr Dafoe',
      'stack'   => '"Mr Dafoe", cursive',
      'weights' => array( '400' )
    ),
    'mrdehaviland' => array(
      'source'  => 'google',
      'family'  => 'Mr De Haviland',
      'stack'   => '"Mr De Haviland", cursive',
      'weights' => array( '400' )
    ),
    'mrssaintdelafield' => array(
      'source'  => 'google',
      'family'  => 'Mrs Saint Delafield',
      'stack'   => '"Mrs Saint Delafield", cursive',
      'weights' => array( '400' )
    ),
    'mrssheppards' => array(
      'source'  => 'google',
      'family'  => 'Mrs Sheppards',
      'stack'   => '"Mrs Sheppards", cursive',
      'weights' => array( '400' )
    ),
    'muli' => array(
      'source'  => 'google',
      'family'  => 'Muli',
      'stack'   => '"Muli", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic' )
    ),
    'mysteryquest' => array(
      'source'  => 'google',
      'family'  => 'Mystery Quest',
      'stack'   => '"Mystery Quest", cursive',
      'weights' => array( '400' )
    ),
    'ntr' => array(
      'source'  => 'google',
      'family'  => 'NTR',
      'stack'   => '"NTR", sans-serif',
      'weights' => array( '400' )
    ),
    'neucha' => array(
      'source'  => 'google',
      'family'  => 'Neucha',
      'stack'   => '"Neucha", cursive',
      'weights' => array( '400' )
    ),
    'neuton' => array(
      'source'  => 'google',
      'family'  => 'Neuton',
      'stack'   => '"Neuton", serif',
      'weights' => array( '200', '300', '400', '400italic', '700', '800' )
    ),
    'newrocker' => array(
      'source'  => 'google',
      'family'  => 'New Rocker',
      'stack'   => '"New Rocker", cursive',
      'weights' => array( '400' )
    ),
    'newscycle' => array(
      'source'  => 'google',
      'family'  => 'News Cycle',
      'stack'   => '"News Cycle", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'niconne' => array(
      'source'  => 'google',
      'family'  => 'Niconne',
      'stack'   => '"Niconne", cursive',
      'weights' => array( '400' )
    ),
    'nixieone' => array(
      'source'  => 'google',
      'family'  => 'Nixie One',
      'stack'   => '"Nixie One", cursive',
      'weights' => array( '400' )
    ),
    'nobile' => array(
      'source'  => 'google',
      'family'  => 'Nobile',
      'stack'   => '"Nobile", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'nokora' => array(
      'source'  => 'google',
      'family'  => 'Nokora',
      'stack'   => '"Nokora", serif',
      'weights' => array( '400', '700' )
    ),
    'norican' => array(
      'source'  => 'google',
      'family'  => 'Norican',
      'stack'   => '"Norican", cursive',
      'weights' => array( '400' )
    ),
    'nosifer' => array(
      'source'  => 'google',
      'family'  => 'Nosifer',
      'stack'   => '"Nosifer", cursive',
      'weights' => array( '400' )
    ),
    'nothingyoucoulddo' => array(
      'source'  => 'google',
      'family'  => 'Nothing You Could Do',
      'stack'   => '"Nothing You Could Do", cursive',
      'weights' => array( '400' )
    ),
    'noticiatext' => array(
      'source'  => 'google',
      'family'  => 'Noticia Text',
      'stack'   => '"Noticia Text", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'notosans' => array(
      'source'  => 'google',
      'family'  => 'Noto Sans',
      'stack'   => '"Noto Sans", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'notoserif' => array(
      'source'  => 'google',
      'family'  => 'Noto Serif',
      'stack'   => '"Noto Serif", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'novacut' => array(
      'source'  => 'google',
      'family'  => 'Nova Cut',
      'stack'   => '"Nova Cut", cursive',
      'weights' => array( '400' )
    ),
    'novaflat' => array(
      'source'  => 'google',
      'family'  => 'Nova Flat',
      'stack'   => '"Nova Flat", cursive',
      'weights' => array( '400' )
    ),
    'novamono' => array(
      'source'  => 'google',
      'family'  => 'Nova Mono',
      'stack'   => '"Nova Mono", monospace',
      'weights' => array( '400' )
    ),
    'novaoval' => array(
      'source'  => 'google',
      'family'  => 'Nova Oval',
      'stack'   => '"Nova Oval", cursive',
      'weights' => array( '400' )
    ),
    'novaround' => array(
      'source'  => 'google',
      'family'  => 'Nova Round',
      'stack'   => '"Nova Round", cursive',
      'weights' => array( '400' )
    ),
    'novascript' => array(
      'source'  => 'google',
      'family'  => 'Nova Script',
      'stack'   => '"Nova Script", cursive',
      'weights' => array( '400' )
    ),
    'novaslim' => array(
      'source'  => 'google',
      'family'  => 'Nova Slim',
      'stack'   => '"Nova Slim", cursive',
      'weights' => array( '400' )
    ),
    'novasquare' => array(
      'source'  => 'google',
      'family'  => 'Nova Square',
      'stack'   => '"Nova Square", cursive',
      'weights' => array( '400' )
    ),
    'numans' => array(
      'source'  => 'google',
      'family'  => 'Numans',
      'stack'   => '"Numans", sans-serif',
      'weights' => array( '400' )
    ),
    'nunito' => array(
      'source'  => 'google',
      'family'  => 'Nunito',
      'stack'   => '"Nunito", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'odormeanchey' => array(
      'source'  => 'google',
      'family'  => 'Odor Mean Chey',
      'stack'   => '"Odor Mean Chey", cursive',
      'weights' => array( '400' )
    ),
    'offside' => array(
      'source'  => 'google',
      'family'  => 'Offside',
      'stack'   => '"Offside", cursive',
      'weights' => array( '400' )
    ),
    'oldstandardtt' => array(
      'source'  => 'google',
      'family'  => 'Old Standard TT',
      'stack'   => '"Old Standard TT", serif',
      'weights' => array( '400', '400italic', '700' )
    ),
    'oldenburg' => array(
      'source'  => 'google',
      'family'  => 'Oldenburg',
      'stack'   => '"Oldenburg", cursive',
      'weights' => array( '400' )
    ),
    'oleoscript' => array(
      'source'  => 'google',
      'family'  => 'Oleo Script',
      'stack'   => '"Oleo Script", cursive',
      'weights' => array( '400', '700' )
    ),
    'oleoscriptswashcaps' => array(
      'source'  => 'google',
      'family'  => 'Oleo Script Swash Caps',
      'stack'   => '"Oleo Script Swash Caps", cursive',
      'weights' => array( '400', '700' )
    ),
    'opensans' => array(
      'source'  => 'google',
      'family'  => 'Open Sans',
      'stack'   => '"Open Sans", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic', '800', '800italic' )
    ),
    'opensanscondensed' => array(
      'source'  => 'google',
      'family'  => 'Open Sans Condensed',
      'stack'   => '"Open Sans Condensed", sans-serif',
      'weights' => array( '300', '300italic', '700' )
    ),
    'oranienbaum' => array(
      'source'  => 'google',
      'family'  => 'Oranienbaum',
      'stack'   => '"Oranienbaum", serif',
      'weights' => array( '400' )
    ),
    'orbitron' => array(
      'source'  => 'google',
      'family'  => 'Orbitron',
      'stack'   => '"Orbitron", sans-serif',
      'weights' => array( '400', '500', '700', '900' )
    ),
    'oregano' => array(
      'source'  => 'google',
      'family'  => 'Oregano',
      'stack'   => '"Oregano", cursive',
      'weights' => array( '400', '400italic' )
    ),
    'orienta' => array(
      'source'  => 'google',
      'family'  => 'Orienta',
      'stack'   => '"Orienta", sans-serif',
      'weights' => array( '400' )
    ),
    'originalsurfer' => array(
      'source'  => 'google',
      'family'  => 'Original Surfer',
      'stack'   => '"Original Surfer", cursive',
      'weights' => array( '400' )
    ),
    'oswald' => array(
      'source'  => 'google',
      'family'  => 'Oswald',
      'stack'   => '"Oswald", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'overtherainbow' => array(
      'source'  => 'google',
      'family'  => 'Over the Rainbow',
      'stack'   => '"Over the Rainbow", cursive',
      'weights' => array( '400' )
    ),
    'overlock' => array(
      'source'  => 'google',
      'family'  => 'Overlock',
      'stack'   => '"Overlock", cursive',
      'weights' => array( '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'overlocksc' => array(
      'source'  => 'google',
      'family'  => 'Overlock SC',
      'stack'   => '"Overlock SC", cursive',
      'weights' => array( '400' )
    ),
    'ovo' => array(
      'source'  => 'google',
      'family'  => 'Ovo',
      'stack'   => '"Ovo", serif',
      'weights' => array( '400' )
    ),
    'oxygen' => array(
      'source'  => 'google',
      'family'  => 'Oxygen',
      'stack'   => '"Oxygen", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'oxygenmono' => array(
      'source'  => 'google',
      'family'  => 'Oxygen Mono',
      'stack'   => '"Oxygen Mono", monospace',
      'weights' => array( '400' )
    ),
    'ptmono' => array(
      'source'  => 'google',
      'family'  => 'PT Mono',
      'stack'   => '"PT Mono", monospace',
      'weights' => array( '400' )
    ),
    'ptsans' => array(
      'source'  => 'google',
      'family'  => 'PT Sans',
      'stack'   => '"PT Sans", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'ptsanscaption' => array(
      'source'  => 'google',
      'family'  => 'PT Sans Caption',
      'stack'   => '"PT Sans Caption", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'ptsansnarrow' => array(
      'source'  => 'google',
      'family'  => 'PT Sans Narrow',
      'stack'   => '"PT Sans Narrow", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'ptserif' => array(
      'source'  => 'google',
      'family'  => 'PT Serif',
      'stack'   => '"PT Serif", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'ptserifcaption' => array(
      'source'  => 'google',
      'family'  => 'PT Serif Caption',
      'stack'   => '"PT Serif Caption", serif',
      'weights' => array( '400', '400italic' )
    ),
    'pacifico' => array(
      'source'  => 'google',
      'family'  => 'Pacifico',
      'stack'   => '"Pacifico", cursive',
      'weights' => array( '400' )
    ),
    'palanquin' => array(
      'source'  => 'google',
      'family'  => 'Palanquin',
      'stack'   => '"Palanquin", sans-serif',
      'weights' => array( '100', '200', '300', '400', '500', '600', '700' )
    ),
    'palanquindark' => array(
      'source'  => 'google',
      'family'  => 'Palanquin Dark',
      'stack'   => '"Palanquin Dark", sans-serif',
      'weights' => array( '400', '500', '600', '700' )
    ),
    'paprika' => array(
      'source'  => 'google',
      'family'  => 'Paprika',
      'stack'   => '"Paprika", cursive',
      'weights' => array( '400' )
    ),
    'parisienne' => array(
      'source'  => 'google',
      'family'  => 'Parisienne',
      'stack'   => '"Parisienne", cursive',
      'weights' => array( '400' )
    ),
    'passeroone' => array(
      'source'  => 'google',
      'family'  => 'Passero One',
      'stack'   => '"Passero One", cursive',
      'weights' => array( '400' )
    ),
    'passionone' => array(
      'source'  => 'google',
      'family'  => 'Passion One',
      'stack'   => '"Passion One", cursive',
      'weights' => array( '400', '700', '900' )
    ),
    'pathwaygothicone' => array(
      'source'  => 'google',
      'family'  => 'Pathway Gothic One',
      'stack'   => '"Pathway Gothic One", sans-serif',
      'weights' => array( '400' )
    ),
    'patrickhand' => array(
      'source'  => 'google',
      'family'  => 'Patrick Hand',
      'stack'   => '"Patrick Hand", cursive',
      'weights' => array( '400' )
    ),
    'patrickhandsc' => array(
      'source'  => 'google',
      'family'  => 'Patrick Hand SC',
      'stack'   => '"Patrick Hand SC", cursive',
      'weights' => array( '400' )
    ),
    'patuaone' => array(
      'source'  => 'google',
      'family'  => 'Patua One',
      'stack'   => '"Patua One", cursive',
      'weights' => array( '400' )
    ),
    'paytoneone' => array(
      'source'  => 'google',
      'family'  => 'Paytone One',
      'stack'   => '"Paytone One", sans-serif',
      'weights' => array( '400' )
    ),
    'peddana' => array(
      'source'  => 'google',
      'family'  => 'Peddana',
      'stack'   => '"Peddana", serif',
      'weights' => array( '400' )
    ),
    'peralta' => array(
      'source'  => 'google',
      'family'  => 'Peralta',
      'stack'   => '"Peralta", cursive',
      'weights' => array( '400' )
    ),
    'permanentmarker' => array(
      'source'  => 'google',
      'family'  => 'Permanent Marker',
      'stack'   => '"Permanent Marker", cursive',
      'weights' => array( '400' )
    ),
    'petitformalscript' => array(
      'source'  => 'google',
      'family'  => 'Petit Formal Script',
      'stack'   => '"Petit Formal Script", cursive',
      'weights' => array( '400' )
    ),
    'petrona' => array(
      'source'  => 'google',
      'family'  => 'Petrona',
      'stack'   => '"Petrona", serif',
      'weights' => array( '400' )
    ),
    'philosopher' => array(
      'source'  => 'google',
      'family'  => 'Philosopher',
      'stack'   => '"Philosopher", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'piedra' => array(
      'source'  => 'google',
      'family'  => 'Piedra',
      'stack'   => '"Piedra", cursive',
      'weights' => array( '400' )
    ),
    'pinyonscript' => array(
      'source'  => 'google',
      'family'  => 'Pinyon Script',
      'stack'   => '"Pinyon Script", cursive',
      'weights' => array( '400' )
    ),
    'pirataone' => array(
      'source'  => 'google',
      'family'  => 'Pirata One',
      'stack'   => '"Pirata One", cursive',
      'weights' => array( '400' )
    ),
    'plaster' => array(
      'source'  => 'google',
      'family'  => 'Plaster',
      'stack'   => '"Plaster", cursive',
      'weights' => array( '400' )
    ),
    'play' => array(
      'source'  => 'google',
      'family'  => 'Play',
      'stack'   => '"Play", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'playball' => array(
      'source'  => 'google',
      'family'  => 'Playball',
      'stack'   => '"Playball", cursive',
      'weights' => array( '400' )
    ),
    'playfairdisplay' => array(
      'source'  => 'google',
      'family'  => 'Playfair Display',
      'stack'   => '"Playfair Display", serif',
      'weights' => array( '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'playfairdisplaysc' => array(
      'source'  => 'google',
      'family'  => 'Playfair Display SC',
      'stack'   => '"Playfair Display SC", serif',
      'weights' => array( '400', '400italic', '700', '700italic', '900', '900italic' )
    ),
    'podkova' => array(
      'source'  => 'google',
      'family'  => 'Podkova',
      'stack'   => '"Podkova", serif',
      'weights' => array( '400', '700' )
    ),
    'poiretone' => array(
      'source'  => 'google',
      'family'  => 'Poiret One',
      'stack'   => '"Poiret One", cursive',
      'weights' => array( '400' )
    ),
    'pollerone' => array(
      'source'  => 'google',
      'family'  => 'Poller One',
      'stack'   => '"Poller One", cursive',
      'weights' => array( '400' )
    ),
    'poly' => array(
      'source'  => 'google',
      'family'  => 'Poly',
      'stack'   => '"Poly", serif',
      'weights' => array( '400', '400italic' )
    ),
    'pompiere' => array(
      'source'  => 'google',
      'family'  => 'Pompiere',
      'stack'   => '"Pompiere", cursive',
      'weights' => array( '400' )
    ),
    'pontanosans' => array(
      'source'  => 'google',
      'family'  => 'Pontano Sans',
      'stack'   => '"Pontano Sans", sans-serif',
      'weights' => array( '400' )
    ),
    'poppins' => array(
      'source'  => 'google',
      'family'  => 'Poppins',
      'stack'   => '"Poppins", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'portlligatsans' => array(
      'source'  => 'google',
      'family'  => 'Port Lligat Sans',
      'stack'   => '"Port Lligat Sans", sans-serif',
      'weights' => array( '400' )
    ),
    'portlligatslab' => array(
      'source'  => 'google',
      'family'  => 'Port Lligat Slab',
      'stack'   => '"Port Lligat Slab", serif',
      'weights' => array( '400' )
    ),
    'pragatinarrow' => array(
      'source'  => 'google',
      'family'  => 'Pragati Narrow',
      'stack'   => '"Pragati Narrow", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'prata' => array(
      'source'  => 'google',
      'family'  => 'Prata',
      'stack'   => '"Prata", serif',
      'weights' => array( '400' )
    ),
    'preahvihear' => array(
      'source'  => 'google',
      'family'  => 'Preahvihear',
      'stack'   => '"Preahvihear", cursive',
      'weights' => array( '400' )
    ),
    'pressstart2p' => array(
      'source'  => 'google',
      'family'  => 'Press Start 2P',
      'stack'   => '"Press Start 2P", cursive',
      'weights' => array( '400' )
    ),
    'princesssofia' => array(
      'source'  => 'google',
      'family'  => 'Princess Sofia',
      'stack'   => '"Princess Sofia", cursive',
      'weights' => array( '400' )
    ),
    'prociono' => array(
      'source'  => 'google',
      'family'  => 'Prociono',
      'stack'   => '"Prociono", serif',
      'weights' => array( '400' )
    ),
    'prostoone' => array(
      'source'  => 'google',
      'family'  => 'Prosto One',
      'stack'   => '"Prosto One", cursive',
      'weights' => array( '400' )
    ),
    'puritan' => array(
      'source'  => 'google',
      'family'  => 'Puritan',
      'stack'   => '"Puritan", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'purplepurse' => array(
      'source'  => 'google',
      'family'  => 'Purple Purse',
      'stack'   => '"Purple Purse", cursive',
      'weights' => array( '400' )
    ),
    'quando' => array(
      'source'  => 'google',
      'family'  => 'Quando',
      'stack'   => '"Quando", serif',
      'weights' => array( '400' )
    ),
    'quantico' => array(
      'source'  => 'google',
      'family'  => 'Quantico',
      'stack'   => '"Quantico", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'quattrocento' => array(
      'source'  => 'google',
      'family'  => 'Quattrocento',
      'stack'   => '"Quattrocento", serif',
      'weights' => array( '400', '700' )
    ),
    'quattrocentosans' => array(
      'source'  => 'google',
      'family'  => 'Quattrocento Sans',
      'stack'   => '"Quattrocento Sans", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'questrial' => array(
      'source'  => 'google',
      'family'  => 'Questrial',
      'stack'   => '"Questrial", sans-serif',
      'weights' => array( '400' )
    ),
    'quicksand' => array(
      'source'  => 'google',
      'family'  => 'Quicksand',
      'stack'   => '"Quicksand", sans-serif',
      'weights' => array( '300', '400', '700' )
    ),
    'quintessential' => array(
      'source'  => 'google',
      'family'  => 'Quintessential',
      'stack'   => '"Quintessential", cursive',
      'weights' => array( '400' )
    ),
    'qwigley' => array(
      'source'  => 'google',
      'family'  => 'Qwigley',
      'stack'   => '"Qwigley", cursive',
      'weights' => array( '400' )
    ),
    'racingsansone' => array(
      'source'  => 'google',
      'family'  => 'Racing Sans One',
      'stack'   => '"Racing Sans One", cursive',
      'weights' => array( '400' )
    ),
    'radley' => array(
      'source'  => 'google',
      'family'  => 'Radley',
      'stack'   => '"Radley", serif',
      'weights' => array( '400', '400italic' )
    ),
    'rajdhani' => array(
      'source'  => 'google',
      'family'  => 'Rajdhani',
      'stack'   => '"Rajdhani", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'raleway' => array(
      'source'  => 'google',
      'family'  => 'Raleway',
      'stack'   => '"Raleway", sans-serif',
      'weights' => array( '100', '200', '300', '400', '500', '600', '700', '800', '900' )
    ),
    'ralewaydots' => array(
      'source'  => 'google',
      'family'  => 'Raleway Dots',
      'stack'   => '"Raleway Dots", cursive',
      'weights' => array( '400' )
    ),
    'ramabhadra' => array(
      'source'  => 'google',
      'family'  => 'Ramabhadra',
      'stack'   => '"Ramabhadra", sans-serif',
      'weights' => array( '400' )
    ),
    'ramaraja' => array(
      'source'  => 'google',
      'family'  => 'Ramaraja',
      'stack'   => '"Ramaraja", serif',
      'weights' => array( '400' )
    ),
    'rambla' => array(
      'source'  => 'google',
      'family'  => 'Rambla',
      'stack'   => '"Rambla", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'rammettoone' => array(
      'source'  => 'google',
      'family'  => 'Rammetto One',
      'stack'   => '"Rammetto One", cursive',
      'weights' => array( '400' )
    ),
    'ranchers' => array(
      'source'  => 'google',
      'family'  => 'Ranchers',
      'stack'   => '"Ranchers", cursive',
      'weights' => array( '400' )
    ),
    'rancho' => array(
      'source'  => 'google',
      'family'  => 'Rancho',
      'stack'   => '"Rancho", cursive',
      'weights' => array( '400' )
    ),
    'ranga' => array(
      'source'  => 'google',
      'family'  => 'Ranga',
      'stack'   => '"Ranga", cursive',
      'weights' => array( '400', '700' )
    ),
    'rationale' => array(
      'source'  => 'google',
      'family'  => 'Rationale',
      'stack'   => '"Rationale", sans-serif',
      'weights' => array( '400' )
    ),
    'raviprakash' => array(
      'source'  => 'google',
      'family'  => 'Ravi Prakash',
      'stack'   => '"Ravi Prakash", cursive',
      'weights' => array( '400' )
    ),
    'redressed' => array(
      'source'  => 'google',
      'family'  => 'Redressed',
      'stack'   => '"Redressed", cursive',
      'weights' => array( '400' )
    ),
    'reeniebeanie' => array(
      'source'  => 'google',
      'family'  => 'Reenie Beanie',
      'stack'   => '"Reenie Beanie", cursive',
      'weights' => array( '400' )
    ),
    'revalia' => array(
      'source'  => 'google',
      'family'  => 'Revalia',
      'stack'   => '"Revalia", cursive',
      'weights' => array( '400' )
    ),
    'rhodiumlibre' => array(
      'source'  => 'google',
      'family'  => 'Rhodium Libre',
      'stack'   => '"Rhodium Libre", serif',
      'weights' => array( '400' )
    ),
    'ribeye' => array(
      'source'  => 'google',
      'family'  => 'Ribeye',
      'stack'   => '"Ribeye", cursive',
      'weights' => array( '400' )
    ),
    'ribeyemarrow' => array(
      'source'  => 'google',
      'family'  => 'Ribeye Marrow',
      'stack'   => '"Ribeye Marrow", cursive',
      'weights' => array( '400' )
    ),
    'righteous' => array(
      'source'  => 'google',
      'family'  => 'Righteous',
      'stack'   => '"Righteous", cursive',
      'weights' => array( '400' )
    ),
    'risque' => array(
      'source'  => 'google',
      'family'  => 'Risque',
      'stack'   => '"Risque", cursive',
      'weights' => array( '400' )
    ),
    'roboto' => array(
      'source'  => 'google',
      'family'  => 'Roboto',
      'stack'   => '"Roboto", sans-serif',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic', '900', '900italic' )
    ),
    'robotocondensed' => array(
      'source'  => 'google',
      'family'  => 'Roboto Condensed',
      'stack'   => '"Roboto Condensed", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '700', '700italic' )
    ),
    'robotomono' => array(
      'source'  => 'google',
      'family'  => 'Roboto Mono',
      'stack'   => '"Roboto Mono", monospace',
      'weights' => array( '100', '100italic', '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic' )
    ),
    'robotoslab' => array(
      'source'  => 'google',
      'family'  => 'Roboto Slab',
      'stack'   => '"Roboto Slab", serif',
      'weights' => array( '100', '300', '400', '700' )
    ),
    'rochester' => array(
      'source'  => 'google',
      'family'  => 'Rochester',
      'stack'   => '"Rochester", cursive',
      'weights' => array( '400' )
    ),
    'rocksalt' => array(
      'source'  => 'google',
      'family'  => 'Rock Salt',
      'stack'   => '"Rock Salt", cursive',
      'weights' => array( '400' )
    ),
    'rokkitt' => array(
      'source'  => 'google',
      'family'  => 'Rokkitt',
      'stack'   => '"Rokkitt", serif',
      'weights' => array( '400', '700' )
    ),
    'romanesco' => array(
      'source'  => 'google',
      'family'  => 'Romanesco',
      'stack'   => '"Romanesco", cursive',
      'weights' => array( '400' )
    ),
    'ropasans' => array(
      'source'  => 'google',
      'family'  => 'Ropa Sans',
      'stack'   => '"Ropa Sans", sans-serif',
      'weights' => array( '400', '400italic' )
    ),
    'rosario' => array(
      'source'  => 'google',
      'family'  => 'Rosario',
      'stack'   => '"Rosario", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'rosarivo' => array(
      'source'  => 'google',
      'family'  => 'Rosarivo',
      'stack'   => '"Rosarivo", serif',
      'weights' => array( '400', '400italic' )
    ),
    'rougescript' => array(
      'source'  => 'google',
      'family'  => 'Rouge Script',
      'stack'   => '"Rouge Script", cursive',
      'weights' => array( '400' )
    ),
    'rozhaone' => array(
      'source'  => 'google',
      'family'  => 'Rozha One',
      'stack'   => '"Rozha One", serif',
      'weights' => array( '400' )
    ),
    'rubik' => array(
      'source'  => 'google',
      'family'  => 'Rubik',
      'stack'   => '"Rubik", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic', '900', '900italic' )
    ),
    'rubikmonoone' => array(
      'source'  => 'google',
      'family'  => 'Rubik Mono One',
      'stack'   => '"Rubik Mono One", sans-serif',
      'weights' => array( '400' )
    ),
    'rubikone' => array(
      'source'  => 'google',
      'family'  => 'Rubik One',
      'stack'   => '"Rubik One", sans-serif',
      'weights' => array( '400' )
    ),
    'ruda' => array(
      'source'  => 'google',
      'family'  => 'Ruda',
      'stack'   => '"Ruda", sans-serif',
      'weights' => array( '400', '700', '900' )
    ),
    'rufina' => array(
      'source'  => 'google',
      'family'  => 'Rufina',
      'stack'   => '"Rufina", serif',
      'weights' => array( '400', '700' )
    ),
    'rugeboogie' => array(
      'source'  => 'google',
      'family'  => 'Ruge Boogie',
      'stack'   => '"Ruge Boogie", cursive',
      'weights' => array( '400' )
    ),
    'ruluko' => array(
      'source'  => 'google',
      'family'  => 'Ruluko',
      'stack'   => '"Ruluko", sans-serif',
      'weights' => array( '400' )
    ),
    'rumraisin' => array(
      'source'  => 'google',
      'family'  => 'Rum Raisin',
      'stack'   => '"Rum Raisin", sans-serif',
      'weights' => array( '400' )
    ),
    'ruslandisplay' => array(
      'source'  => 'google',
      'family'  => 'Ruslan Display',
      'stack'   => '"Ruslan Display", cursive',
      'weights' => array( '400' )
    ),
    'russoone' => array(
      'source'  => 'google',
      'family'  => 'Russo One',
      'stack'   => '"Russo One", sans-serif',
      'weights' => array( '400' )
    ),
    'ruthie' => array(
      'source'  => 'google',
      'family'  => 'Ruthie',
      'stack'   => '"Ruthie", cursive',
      'weights' => array( '400' )
    ),
    'rye' => array(
      'source'  => 'google',
      'family'  => 'Rye',
      'stack'   => '"Rye", cursive',
      'weights' => array( '400' )
    ),
    'sacramento' => array(
      'source'  => 'google',
      'family'  => 'Sacramento',
      'stack'   => '"Sacramento", cursive',
      'weights' => array( '400' )
    ),
    'sahitya' => array(
      'source'  => 'google',
      'family'  => 'Sahitya',
      'stack'   => '"Sahitya", serif',
      'weights' => array( '400', '700' )
    ),
    'sail' => array(
      'source'  => 'google',
      'family'  => 'Sail',
      'stack'   => '"Sail", cursive',
      'weights' => array( '400' )
    ),
    'salsa' => array(
      'source'  => 'google',
      'family'  => 'Salsa',
      'stack'   => '"Salsa", cursive',
      'weights' => array( '400' )
    ),
    'sanchez' => array(
      'source'  => 'google',
      'family'  => 'Sanchez',
      'stack'   => '"Sanchez", serif',
      'weights' => array( '400', '400italic' )
    ),
    'sancreek' => array(
      'source'  => 'google',
      'family'  => 'Sancreek',
      'stack'   => '"Sancreek", cursive',
      'weights' => array( '400' )
    ),
    'sansitaone' => array(
      'source'  => 'google',
      'family'  => 'Sansita One',
      'stack'   => '"Sansita One", cursive',
      'weights' => array( '400' )
    ),
    'sarala' => array(
      'source'  => 'google',
      'family'  => 'Sarala',
      'stack'   => '"Sarala", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'sarina' => array(
      'source'  => 'google',
      'family'  => 'Sarina',
      'stack'   => '"Sarina", cursive',
      'weights' => array( '400' )
    ),
    'sarpanch' => array(
      'source'  => 'google',
      'family'  => 'Sarpanch',
      'stack'   => '"Sarpanch", sans-serif',
      'weights' => array( '400', '500', '600', '700', '800', '900' )
    ),
    'satisfy' => array(
      'source'  => 'google',
      'family'  => 'Satisfy',
      'stack'   => '"Satisfy", cursive',
      'weights' => array( '400' )
    ),
    'scada' => array(
      'source'  => 'google',
      'family'  => 'Scada',
      'stack'   => '"Scada", sans-serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'scheherazade' => array(
      'source'  => 'google',
      'family'  => 'Scheherazade',
      'stack'   => '"Scheherazade", serif',
      'weights' => array( '400', '700' )
    ),
    'schoolbell' => array(
      'source'  => 'google',
      'family'  => 'Schoolbell',
      'stack'   => '"Schoolbell", cursive',
      'weights' => array( '400' )
    ),
    'seaweedscript' => array(
      'source'  => 'google',
      'family'  => 'Seaweed Script',
      'stack'   => '"Seaweed Script", cursive',
      'weights' => array( '400' )
    ),
    'sevillana' => array(
      'source'  => 'google',
      'family'  => 'Sevillana',
      'stack'   => '"Sevillana", cursive',
      'weights' => array( '400' )
    ),
    'seymourone' => array(
      'source'  => 'google',
      'family'  => 'Seymour One',
      'stack'   => '"Seymour One", sans-serif',
      'weights' => array( '400' )
    ),
    'shadowsintolight' => array(
      'source'  => 'google',
      'family'  => 'Shadows Into Light',
      'stack'   => '"Shadows Into Light", cursive',
      'weights' => array( '400' )
    ),
    'shadowsintolighttwo' => array(
      'source'  => 'google',
      'family'  => 'Shadows Into Light Two',
      'stack'   => '"Shadows Into Light Two", cursive',
      'weights' => array( '400' )
    ),
    'shanti' => array(
      'source'  => 'google',
      'family'  => 'Shanti',
      'stack'   => '"Shanti", sans-serif',
      'weights' => array( '400' )
    ),
    'share' => array(
      'source'  => 'google',
      'family'  => 'Share',
      'stack'   => '"Share", cursive',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'sharetech' => array(
      'source'  => 'google',
      'family'  => 'Share Tech',
      'stack'   => '"Share Tech", sans-serif',
      'weights' => array( '400' )
    ),
    'sharetechmono' => array(
      'source'  => 'google',
      'family'  => 'Share Tech Mono',
      'stack'   => '"Share Tech Mono", monospace',
      'weights' => array( '400' )
    ),
    'shojumaru' => array(
      'source'  => 'google',
      'family'  => 'Shojumaru',
      'stack'   => '"Shojumaru", cursive',
      'weights' => array( '400' )
    ),
    'shortstack' => array(
      'source'  => 'google',
      'family'  => 'Short Stack',
      'stack'   => '"Short Stack", cursive',
      'weights' => array( '400' )
    ),
    'siemreap' => array(
      'source'  => 'google',
      'family'  => 'Siemreap',
      'stack'   => '"Siemreap", cursive',
      'weights' => array( '400' )
    ),
    'sigmarone' => array(
      'source'  => 'google',
      'family'  => 'Sigmar One',
      'stack'   => '"Sigmar One", cursive',
      'weights' => array( '400' )
    ),
    'signika' => array(
      'source'  => 'google',
      'family'  => 'Signika',
      'stack'   => '"Signika", sans-serif',
      'weights' => array( '300', '400', '600', '700' )
    ),
    'signikanegative' => array(
      'source'  => 'google',
      'family'  => 'Signika Negative',
      'stack'   => '"Signika Negative", sans-serif',
      'weights' => array( '300', '400', '600', '700' )
    ),
    'simonetta' => array(
      'source'  => 'google',
      'family'  => 'Simonetta',
      'stack'   => '"Simonetta", cursive',
      'weights' => array( '400', '400italic', '900', '900italic' )
    ),
    'sintony' => array(
      'source'  => 'google',
      'family'  => 'Sintony',
      'stack'   => '"Sintony", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'sirinstencil' => array(
      'source'  => 'google',
      'family'  => 'Sirin Stencil',
      'stack'   => '"Sirin Stencil", cursive',
      'weights' => array( '400' )
    ),
    'sixcaps' => array(
      'source'  => 'google',
      'family'  => 'Six Caps',
      'stack'   => '"Six Caps", sans-serif',
      'weights' => array( '400' )
    ),
    'skranji' => array(
      'source'  => 'google',
      'family'  => 'Skranji',
      'stack'   => '"Skranji", cursive',
      'weights' => array( '400', '700' )
    ),
    'slabo13px' => array(
      'source'  => 'google',
      'family'  => 'Slabo 13px',
      'stack'   => '"Slabo 13px", serif',
      'weights' => array( '400' )
    ),
    'slabo27px' => array(
      'source'  => 'google',
      'family'  => 'Slabo 27px',
      'stack'   => '"Slabo 27px", serif',
      'weights' => array( '400' )
    ),
    'slackey' => array(
      'source'  => 'google',
      'family'  => 'Slackey',
      'stack'   => '"Slackey", cursive',
      'weights' => array( '400' )
    ),
    'smokum' => array(
      'source'  => 'google',
      'family'  => 'Smokum',
      'stack'   => '"Smokum", cursive',
      'weights' => array( '400' )
    ),
    'smythe' => array(
      'source'  => 'google',
      'family'  => 'Smythe',
      'stack'   => '"Smythe", cursive',
      'weights' => array( '400' )
    ),
    'sniglet' => array(
      'source'  => 'google',
      'family'  => 'Sniglet',
      'stack'   => '"Sniglet", cursive',
      'weights' => array( '400', '800' )
    ),
    'snippet' => array(
      'source'  => 'google',
      'family'  => 'Snippet',
      'stack'   => '"Snippet", sans-serif',
      'weights' => array( '400' )
    ),
    'snowburstone' => array(
      'source'  => 'google',
      'family'  => 'Snowburst One',
      'stack'   => '"Snowburst One", cursive',
      'weights' => array( '400' )
    ),
    'sofadione' => array(
      'source'  => 'google',
      'family'  => 'Sofadi One',
      'stack'   => '"Sofadi One", cursive',
      'weights' => array( '400' )
    ),
    'sofia' => array(
      'source'  => 'google',
      'family'  => 'Sofia',
      'stack'   => '"Sofia", cursive',
      'weights' => array( '400' )
    ),
    'sonsieone' => array(
      'source'  => 'google',
      'family'  => 'Sonsie One',
      'stack'   => '"Sonsie One", cursive',
      'weights' => array( '400' )
    ),
    'sortsmillgoudy' => array(
      'source'  => 'google',
      'family'  => 'Sorts Mill Goudy',
      'stack'   => '"Sorts Mill Goudy", serif',
      'weights' => array( '400', '400italic' )
    ),
    'sourcecodepro' => array(
      'source'  => 'google',
      'family'  => 'Source Code Pro',
      'stack'   => '"Source Code Pro", monospace',
      'weights' => array( '200', '300', '400', '500', '600', '700', '900' )
    ),
    'sourcesanspro' => array(
      'source'  => 'google',
      'family'  => 'Source Sans Pro',
      'stack'   => '"Source Sans Pro", sans-serif',
      'weights' => array( '200', '200italic', '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic', '900', '900italic' )
    ),
    'sourceserifpro' => array(
      'source'  => 'google',
      'family'  => 'Source Serif Pro',
      'stack'   => '"Source Serif Pro", serif',
      'weights' => array( '400', '600', '700' )
    ),
    'specialelite' => array(
      'source'  => 'google',
      'family'  => 'Special Elite',
      'stack'   => '"Special Elite", cursive',
      'weights' => array( '400' )
    ),
    'spicyrice' => array(
      'source'  => 'google',
      'family'  => 'Spicy Rice',
      'stack'   => '"Spicy Rice", cursive',
      'weights' => array( '400' )
    ),
    'spinnaker' => array(
      'source'  => 'google',
      'family'  => 'Spinnaker',
      'stack'   => '"Spinnaker", sans-serif',
      'weights' => array( '400' )
    ),
    'spirax' => array(
      'source'  => 'google',
      'family'  => 'Spirax',
      'stack'   => '"Spirax", cursive',
      'weights' => array( '400' )
    ),
    'squadaone' => array(
      'source'  => 'google',
      'family'  => 'Squada One',
      'stack'   => '"Squada One", cursive',
      'weights' => array( '400' )
    ),
    'sreekrushnadevaraya' => array(
      'source'  => 'google',
      'family'  => 'Sree Krushnadevaraya',
      'stack'   => '"Sree Krushnadevaraya", serif',
      'weights' => array( '400' )
    ),
    'stalemate' => array(
      'source'  => 'google',
      'family'  => 'Stalemate',
      'stack'   => '"Stalemate", cursive',
      'weights' => array( '400' )
    ),
    'stalinistone' => array(
      'source'  => 'google',
      'family'  => 'Stalinist One',
      'stack'   => '"Stalinist One", cursive',
      'weights' => array( '400' )
    ),
    'stardosstencil' => array(
      'source'  => 'google',
      'family'  => 'Stardos Stencil',
      'stack'   => '"Stardos Stencil", cursive',
      'weights' => array( '400', '700' )
    ),
    'stintultracondensed' => array(
      'source'  => 'google',
      'family'  => 'Stint Ultra Condensed',
      'stack'   => '"Stint Ultra Condensed", cursive',
      'weights' => array( '400' )
    ),
    'stintultraexpanded' => array(
      'source'  => 'google',
      'family'  => 'Stint Ultra Expanded',
      'stack'   => '"Stint Ultra Expanded", cursive',
      'weights' => array( '400' )
    ),
    'stoke' => array(
      'source'  => 'google',
      'family'  => 'Stoke',
      'stack'   => '"Stoke", serif',
      'weights' => array( '300', '400' )
    ),
    'strait' => array(
      'source'  => 'google',
      'family'  => 'Strait',
      'stack'   => '"Strait", sans-serif',
      'weights' => array( '400' )
    ),
    'sueellenfrancisco' => array(
      'source'  => 'google',
      'family'  => 'Sue Ellen Francisco',
      'stack'   => '"Sue Ellen Francisco", cursive',
      'weights' => array( '400' )
    ),
    'sumana' => array(
      'source'  => 'google',
      'family'  => 'Sumana',
      'stack'   => '"Sumana", serif',
      'weights' => array( '400', '700' )
    ),
    'sunshiney' => array(
      'source'  => 'google',
      'family'  => 'Sunshiney',
      'stack'   => '"Sunshiney", cursive',
      'weights' => array( '400' )
    ),
    'supermercadoone' => array(
      'source'  => 'google',
      'family'  => 'Supermercado One',
      'stack'   => '"Supermercado One", cursive',
      'weights' => array( '400' )
    ),
    'sura' => array(
      'source'  => 'google',
      'family'  => 'Sura',
      'stack'   => '"Sura", serif',
      'weights' => array( '400', '700' )
    ),
    'suranna' => array(
      'source'  => 'google',
      'family'  => 'Suranna',
      'stack'   => '"Suranna", serif',
      'weights' => array( '400' )
    ),
    'suravaram' => array(
      'source'  => 'google',
      'family'  => 'Suravaram',
      'stack'   => '"Suravaram", serif',
      'weights' => array( '400' )
    ),
    'suwannaphum' => array(
      'source'  => 'google',
      'family'  => 'Suwannaphum',
      'stack'   => '"Suwannaphum", cursive',
      'weights' => array( '400' )
    ),
    'swankyandmoomoo' => array(
      'source'  => 'google',
      'family'  => 'Swanky and Moo Moo',
      'stack'   => '"Swanky and Moo Moo", cursive',
      'weights' => array( '400' )
    ),
    'syncopate' => array(
      'source'  => 'google',
      'family'  => 'Syncopate',
      'stack'   => '"Syncopate", sans-serif',
      'weights' => array( '400', '700' )
    ),
    'tangerine' => array(
      'source'  => 'google',
      'family'  => 'Tangerine',
      'stack'   => '"Tangerine", cursive',
      'weights' => array( '400', '700' )
    ),
    'taprom' => array(
      'source'  => 'google',
      'family'  => 'Taprom',
      'stack'   => '"Taprom", cursive',
      'weights' => array( '400' )
    ),
    'tauri' => array(
      'source'  => 'google',
      'family'  => 'Tauri',
      'stack'   => '"Tauri", sans-serif',
      'weights' => array( '400' )
    ),
    'teko' => array(
      'source'  => 'google',
      'family'  => 'Teko',
      'stack'   => '"Teko", sans-serif',
      'weights' => array( '300', '400', '500', '600', '700' )
    ),
    'telex' => array(
      'source'  => 'google',
      'family'  => 'Telex',
      'stack'   => '"Telex", sans-serif',
      'weights' => array( '400' )
    ),
    'tenaliramakrishna' => array(
      'source'  => 'google',
      'family'  => 'Tenali Ramakrishna',
      'stack'   => '"Tenali Ramakrishna", sans-serif',
      'weights' => array( '400' )
    ),
    'tenorsans' => array(
      'source'  => 'google',
      'family'  => 'Tenor Sans',
      'stack'   => '"Tenor Sans", sans-serif',
      'weights' => array( '400' )
    ),
    'textmeone' => array(
      'source'  => 'google',
      'family'  => 'Text Me One',
      'stack'   => '"Text Me One", sans-serif',
      'weights' => array( '400' )
    ),
    'thegirlnextdoor' => array(
      'source'  => 'google',
      'family'  => 'The Girl Next Door',
      'stack'   => '"The Girl Next Door", cursive',
      'weights' => array( '400' )
    ),
    'tienne' => array(
      'source'  => 'google',
      'family'  => 'Tienne',
      'stack'   => '"Tienne", serif',
      'weights' => array( '400', '700', '900' )
    ),
    'tillana' => array(
      'source'  => 'google',
      'family'  => 'Tillana',
      'stack'   => '"Tillana", cursive',
      'weights' => array( '400', '500', '600', '700', '800' )
    ),
    'timmana' => array(
      'source'  => 'google',
      'family'  => 'Timmana',
      'stack'   => '"Timmana", sans-serif',
      'weights' => array( '400' )
    ),
    'tinos' => array(
      'source'  => 'google',
      'family'  => 'Tinos',
      'stack'   => '"Tinos", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'titanone' => array(
      'source'  => 'google',
      'family'  => 'Titan One',
      'stack'   => '"Titan One", cursive',
      'weights' => array( '400' )
    ),
    'titilliumweb' => array(
      'source'  => 'google',
      'family'  => 'Titillium Web',
      'stack'   => '"Titillium Web", sans-serif',
      'weights' => array( '200', '200italic', '300', '300italic', '400', '400italic', '600', '600italic', '700', '700italic', '900' )
    ),
    'tradewinds' => array(
      'source'  => 'google',
      'family'  => 'Trade Winds',
      'stack'   => '"Trade Winds", cursive',
      'weights' => array( '400' )
    ),
    'trocchi' => array(
      'source'  => 'google',
      'family'  => 'Trocchi',
      'stack'   => '"Trocchi", serif',
      'weights' => array( '400' )
    ),
    'trochut' => array(
      'source'  => 'google',
      'family'  => 'Trochut',
      'stack'   => '"Trochut", cursive',
      'weights' => array( '400', '400italic', '700' )
    ),
    'trykker' => array(
      'source'  => 'google',
      'family'  => 'Trykker',
      'stack'   => '"Trykker", serif',
      'weights' => array( '400' )
    ),
    'tulpenone' => array(
      'source'  => 'google',
      'family'  => 'Tulpen One',
      'stack'   => '"Tulpen One", cursive',
      'weights' => array( '400' )
    ),
    'ubuntu' => array(
      'source'  => 'google',
      'family'  => 'Ubuntu',
      'stack'   => '"Ubuntu", sans-serif',
      'weights' => array( '300', '300italic', '400', '400italic', '500', '500italic', '700', '700italic' )
    ),
    'ubuntucondensed' => array(
      'source'  => 'google',
      'family'  => 'Ubuntu Condensed',
      'stack'   => '"Ubuntu Condensed", sans-serif',
      'weights' => array( '400' )
    ),
    'ubuntumono' => array(
      'source'  => 'google',
      'family'  => 'Ubuntu Mono',
      'stack'   => '"Ubuntu Mono", monospace',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'ultra' => array(
      'source'  => 'google',
      'family'  => 'Ultra',
      'stack'   => '"Ultra", serif',
      'weights' => array( '400' )
    ),
    'uncialantiqua' => array(
      'source'  => 'google',
      'family'  => 'Uncial Antiqua',
      'stack'   => '"Uncial Antiqua", cursive',
      'weights' => array( '400' )
    ),
    'underdog' => array(
      'source'  => 'google',
      'family'  => 'Underdog',
      'stack'   => '"Underdog", cursive',
      'weights' => array( '400' )
    ),
    'unicaone' => array(
      'source'  => 'google',
      'family'  => 'Unica One',
      'stack'   => '"Unica One", cursive',
      'weights' => array( '400' )
    ),
    'unifrakturcook' => array(
      'source'  => 'google',
      'family'  => 'UnifrakturCook',
      'stack'   => '"UnifrakturCook", cursive',
      'weights' => array( '700' )
    ),
    'unifrakturmaguntia' => array(
      'source'  => 'google',
      'family'  => 'UnifrakturMaguntia',
      'stack'   => '"UnifrakturMaguntia", cursive',
      'weights' => array( '400' )
    ),
    'unkempt' => array(
      'source'  => 'google',
      'family'  => 'Unkempt',
      'stack'   => '"Unkempt", cursive',
      'weights' => array( '400', '700' )
    ),
    'unlock' => array(
      'source'  => 'google',
      'family'  => 'Unlock',
      'stack'   => '"Unlock", cursive',
      'weights' => array( '400' )
    ),
    'unna' => array(
      'source'  => 'google',
      'family'  => 'Unna',
      'stack'   => '"Unna", serif',
      'weights' => array( '400' )
    ),
    'vt323' => array(
      'source'  => 'google',
      'family'  => 'VT323',
      'stack'   => '"VT323", monospace',
      'weights' => array( '400' )
    ),
    'vampiroone' => array(
      'source'  => 'google',
      'family'  => 'Vampiro One',
      'stack'   => '"Vampiro One", cursive',
      'weights' => array( '400' )
    ),
    'varela' => array(
      'source'  => 'google',
      'family'  => 'Varela',
      'stack'   => '"Varela", sans-serif',
      'weights' => array( '400' )
    ),
    'varelaround' => array(
      'source'  => 'google',
      'family'  => 'Varela Round',
      'stack'   => '"Varela Round", sans-serif',
      'weights' => array( '400' )
    ),
    'vastshadow' => array(
      'source'  => 'google',
      'family'  => 'Vast Shadow',
      'stack'   => '"Vast Shadow", cursive',
      'weights' => array( '400' )
    ),
    'vesperlibre' => array(
      'source'  => 'google',
      'family'  => 'Vesper Libre',
      'stack'   => '"Vesper Libre", serif',
      'weights' => array( '400', '500', '700', '900' )
    ),
    'vibur' => array(
      'source'  => 'google',
      'family'  => 'Vibur',
      'stack'   => '"Vibur", cursive',
      'weights' => array( '400' )
    ),
    'vidaloka' => array(
      'source'  => 'google',
      'family'  => 'Vidaloka',
      'stack'   => '"Vidaloka", serif',
      'weights' => array( '400' )
    ),
    'viga' => array(
      'source'  => 'google',
      'family'  => 'Viga',
      'stack'   => '"Viga", sans-serif',
      'weights' => array( '400' )
    ),
    'voces' => array(
      'source'  => 'google',
      'family'  => 'Voces',
      'stack'   => '"Voces", cursive',
      'weights' => array( '400' )
    ),
    'volkhov' => array(
      'source'  => 'google',
      'family'  => 'Volkhov',
      'stack'   => '"Volkhov", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'vollkorn' => array(
      'source'  => 'google',
      'family'  => 'Vollkorn',
      'stack'   => '"Vollkorn", serif',
      'weights' => array( '400', '400italic', '700', '700italic' )
    ),
    'voltaire' => array(
      'source'  => 'google',
      'family'  => 'Voltaire',
      'stack'   => '"Voltaire", sans-serif',
      'weights' => array( '400' )
    ),
    'waitingforthesunrise' => array(
      'source'  => 'google',
      'family'  => 'Waiting for the Sunrise',
      'stack'   => '"Waiting for the Sunrise", cursive',
      'weights' => array( '400' )
    ),
    'wallpoet' => array(
      'source'  => 'google',
      'family'  => 'Wallpoet',
      'stack'   => '"Wallpoet", cursive',
      'weights' => array( '400' )
    ),
    'walterturncoat' => array(
      'source'  => 'google',
      'family'  => 'Walter Turncoat',
      'stack'   => '"Walter Turncoat", cursive',
      'weights' => array( '400' )
    ),
    'warnes' => array(
      'source'  => 'google',
      'family'  => 'Warnes',
      'stack'   => '"Warnes", cursive',
      'weights' => array( '400' )
    ),
    'wellfleet' => array(
      'source'  => 'google',
      'family'  => 'Wellfleet',
      'stack'   => '"Wellfleet", cursive',
      'weights' => array( '400' )
    ),
    'wendyone' => array(
      'source'  => 'google',
      'family'  => 'Wendy One',
      'stack'   => '"Wendy One", sans-serif',
      'weights' => array( '400' )
    ),
    'wireone' => array(
      'source'  => 'google',
      'family'  => 'Wire One',
      'stack'   => '"Wire One", sans-serif',
      'weights' => array( '400' )
    ),
    'worksans' => array(
      'source'  => 'google',
      'family'  => 'Work Sans',
      'stack'   => '"Work Sans", sans-serif',
      'weights' => array( '100', '200', '300', '400', '500', '600', '700', '800', '900' )
    ),
    'yanonekaffeesatz' => array(
      'source'  => 'google',
      'family'  => 'Yanone Kaffeesatz',
      'stack'   => '"Yanone Kaffeesatz", sans-serif',
      'weights' => array( '200', '300', '400', '700' )
    ),
    'yantramanav' => array(
      'source'  => 'google',
      'family'  => 'Yantramanav',
      'stack'   => '"Yantramanav", sans-serif',
      'weights' => array( '100', '300', '400', '500', '700', '900' )
    ),
    'yellowtail' => array(
      'source'  => 'google',
      'family'  => 'Yellowtail',
      'stack'   => '"Yellowtail", cursive',
      'weights' => array( '400' )
    ),
    'yesevaone' => array(
      'source'  => 'google',
      'family'  => 'Yeseva One',
      'stack'   => '"Yeseva One", cursive',
      'weights' => array( '400' )
    ),
    'yesteryear' => array(
      'source'  => 'google',
      'family'  => 'Yesteryear',
      'stack'   => '"Yesteryear", cursive',
      'weights' => array( '400' )
    ),
    'zeyada' => array(
      'source'  => 'google',
      'family'  => 'Zeyada',
      'stack'   => '"Zeyada", cursive',
      'weights' => array( '400' )
    )
  );

  return apply_filters( 'x_fonts_data', $data );

}