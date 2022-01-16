<?php

use App\Controllers\SubNavbarController;

include_once( THEME_DIRECTORY_PATH . 'app/Controllers/SubNavbarController.php' );

$wp_menu = ( new SubNavbarController( 'primary-menu' ) )->wpGetNavSortedMenuItems();

?>

<header>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <div class="mx-auto container px-3 xl:px-0">
    <div class="flex justify-between items-center border-b py-4 lg:py-6">
      <div class="flex justify-between items-center">
        <div class="main-logo inline-block">
          <?php if ( has_custom_logo() ) { ?>
            <?php the_custom_logo(); ?>
          <?php } else { ?>
            <div class="text-lg uppercase">
              <a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
                <?php echo get_bloginfo( 'name' ); ?>
              </a>
            </div>

            <p class="text-sm font-light text-gray-600">
              <?php echo get_bloginfo( 'description' ); ?>
            </p>

          <?php } ?>
        </div>
      </div>

      <div id="primary_menu">
        <div class="lg:hidden">
          <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
            <svg viewBox="0 0 20 20" class="hamburger-icon inline-block w-6 h-6" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                <g id="icon-shape">
                  <path
                    d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                    id="Combined-Shape"></path>
                </g>
              </g>
            </svg>

            <svg class="close-icon hidden inline-block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 30 30">
              <path
                d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
            </svg>
          </a>
        </div>

        <ul class="list-none hidden lg:flex">
          <?php foreach ( $wp_menu as $key => $menu_item ): ?>
            <li
              id="top-level-menu-item-<?php echo $key; ?>"
              class="wp-menu-item relative py-3 px-6 uppercase border border-gray-200 hover:underline rounded <?php echo ( count( $wp_menu ) === ( $key + 1 ) ) ? '' : 'mr-3'; ?>"
            ><a href="<?php echo $menu_item['url']; ?>" class="text-base text-primary">
                <?php echo $menu_item['title']; ?>
              </a>

              <?php if ( count( $menu_item['children'] ) ): ?>
                <ul class="sub-menu absolute left-0 opacity-0 rounded invisible bg-white">
                  <?php foreach ( $menu_item['children'] as $sub_menu_key => $sub_menu_item ): ?>
                    <li class="sub-menu-item">
                      <a href="<?php echo $sub_menu_item['url']; ?>" class="p-4 hover:bg-gray-200 block">
                        <?php echo $sub_menu_item['title']; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <div class="mobile-primary-menu hidden">
      <ul>
        <?php foreach ( $wp_menu as $key => $menu_item ): ?>
          <li
            id="top-level-menu-item-<?php echo $key; ?>"
            class="wp-menu-item"
          >
            <a href="<?php echo $menu_item['url']; ?>"
               class="text-base text-primary flex relative py-4 uppercase border-b border-gray-200">
              <?php echo $menu_item['title']; ?>
            </a>
            <span class="button_open w-full"></span>
            <?php if ( count( $menu_item['children'] ) ): ?>
              <ul class="bg-white ml-3 hidden sub-menu-items-wrapper">
                <?php foreach ( $menu_item['children'] as $sub_menu_key => $sub_menu_item ): ?>
                  <li class="sub-menu-item">
                    <a href="<?php echo $sub_menu_item['url']; ?>"
                       class="py-4 hover:bg-gray-200 block border-b border-gray-200">
                      <?php echo $sub_menu_item['title']; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</header>
