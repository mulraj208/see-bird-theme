<?php


namespace App\Controllers;

class SubNavbarController {
  private $menu_location = '';

  public function __construct( $menu_location ) {
    $this->menu_location = $menu_location;
  }

  /**
   * Returns the sorted navigation menu in proper grandparent-parent-child heirarchy format
   */
  public function wpGetNavSortedMenuItems() {
    return $this->navSortMenuItems( wp_get_nav_menu_items( $this->menu_location ) );
  }

  private function navSortMenuItems( $items ) {
    if ( empty( $items ) ) {
      return [];
    }

    return $this->getNavChildren( $items, 0, 0 );
  }

  /**
   * Inner recursive function to format data in heirarchy levels
   * DONOT USE DIRECTLY
   */
  private function getNavChildren( $items, $parentId, $depth ) {
    $menu_item = array();
    foreach ( $items as $id => $child ) {
      if ( $child->menu_item_parent == $parentId ) {
        $sub_item             = [];
        $sub_item['title']    = $child->title;
        $sub_item['url']      = $this->getNavigationLink( $child->url );
        $sub_item['depth']    = $depth;
        $sub_item['children'] = $this->getNavChildren( $items, $child->ID, $depth + 1 );

        $menu_item[] = $sub_item;
      }
    }

    return $menu_item;
  }

  /**
   * Returns the navigation url to use on the frontend
   */
  public function getNavigationLink( $url ) {
    $nullUrlValues = [ '#', '?' ];
    $backfallLink  = 'javascript:;';

    if ( empty( $url ) ) {
      return $backfallLink;
    }

    if ( in_array( $url, $nullUrlValues ) ) {
      return $backfallLink;
    }

    return $url;
  }
}
