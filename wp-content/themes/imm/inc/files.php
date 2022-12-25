<?php 

function filter_site_upload_size_limit( $size ) {
  $size = 1024 * 25000;
  return $size;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );