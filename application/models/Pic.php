<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Pic extends OaModel {

  static $table_name = 'pics';

  static $has_one = array (
  );

  static $has_many = array (
  );

  static $belongs_to = array (
    array ('owner', 'class_name' => 'User')
  );

  public function __construct ($attributes = array (), $guard_attributes = true, $instantiating_via_find = false, $new_record = true) {
    parent::__construct ($attributes, $guard_attributes, $instantiating_via_find, $new_record);

    OrmImageUploader::bind ('file_name', 'PicFile_nameImageUploader');

  }
}