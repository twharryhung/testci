<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Test_cell extends Cell_Controller {

  /* render_cell ('test_cell', 'header', array ()); */
  public function _cache_header () {
    return array ('time' => 60 * 60, 'key' => null);
  }
  public function header () {
    $user = User::first ();

    return $this->setUseCssList (true)->load_view (array ('user' => $user));
  }

  /* render_cell ('test_cell', 'footer', array ()); */
  // public function _cache_footer () {
  //   return array ('time' => 60 * 60, 'key' => null);
  // }
  public function footer () {
    return $this->setUseCssList (true)->load_view ();
  }
}