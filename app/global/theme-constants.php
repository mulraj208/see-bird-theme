<?php

if ( ! defined( 'THEME_ROOT' ) ) {
  define( 'THEME_ROOT', get_template_directory_uri() );
}

if ( ! defined( 'THEME_DIRECTORY_PATH' ) ) {
  define( 'THEME_DIRECTORY_PATH', get_template_directory() . DIRECTORY_SEPARATOR );
}

if ( ! defined( 'SITE_URL' ) ) {
  define( 'SITE_URL', site_url( '/' ) );
}
