<?php
/*
Plugin Name: Kanako First Plugin
*/
?>

<?php
/*
Plugin Name: Haniwa First Plugin
*/

function haniwa_first_plugin_the_content( $content ) {

  $info = '<p>＼ 先頭に追記されるよ！ ／</p>';
  return $info . $content;
}
add_filter( 'the_content', 'haniwa_first_plugin_the_content' );