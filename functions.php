add_action('wp_head', 'add_css_head');
function add_css_head() {
if ( is_page( 'second-ppc' ) || is_page( 'your-page-slug' ) ) {
?>
  <style>
      #masthead { display: none; }
      .selling-ticket{ display: none; }
  </style>
 <?php
 } 
}



..................or...............

add_action('wp_head', 'add_css_head');
function add_css_head() {
if ( is_page( 'your-page-slug' ) || is_page( 'your-page-slug' ) ) {
?>
  <style>
      .your-css-class {
         display:none

       }
  </style>
 <?php
 } 
}

.................or................

if one of page you want to hide is frontpage you can use this

add_action('wp_head', 'add_css_head');
function add_css_head() {
if ( is_front_page() || is_page( 'your-page-slug' ) ) {
?>
  <style>
      .your-css-class {
         display:none

       }
  </style>
 <?php
 } 
}
