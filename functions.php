<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//* Adding support to SVG

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//* El llamado a cada tabla cambia dependiendo del día de la semana

function super45_calendario_por_dia() {
  $day = date('N');
  switch ( $day ) {
    case 1: //lunes
      return do_shortcode('[table id=1 /]');
    break;
    case 2: //martes
      return do_shortcode('[table id=2 /]');
    break;
    case 3: //miercoles
      return do_shortcode('[table id=3 /]');
    break;
    case 4: //jueves
      return do_shortcode('[table id=4 /]');
    break;
    case 5: //viernes
      return do_shortcode('[table id=5 /]');
    break;
    case 6: //sabado
      return do_shortcode('[table id=6 /]');
    break;
    case 7: //domingo
      return do_shortcode('[table id=7 /]');
    break;
  }
}
add_shortcode('calendario_por_dia', 'super45_calendario_por_dia'); 

function displaydate(){
     return date('H:i A');
}
add_shortcode( 'date', 'displaydate' );