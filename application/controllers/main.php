<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Main extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index () {
    $this->load_view (null);
  }

  public function aaa () {
    $this->load_view (null);
  }
  public function x () {
    clean_cell ('test_cell', 'header');
  }
}
