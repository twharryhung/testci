<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Pics extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index ($msg = '') {
    $pics = Pic::find ('all');
    $this->load_view (array ('pics' => $pics, 'msg' => $msg));
  }

  public function add () {
    $users = User::find('all');
    $this->load_view (array('users' => $users));
  }

  public function create () {
    $file_name = $this->input_post('pic_name', true);
    $user_id = $this->input_post('user_id');

    if ($user = User::find_by_id($user_id)) {

      if (verifyCreateOrm ($pic = Pic::create (array ('user_id' => $user->id, 'file_name' => '')))) {
        $pic->file_name->put ($file_name);
        redirect (array ('pics', 'index', '成功'));
      } else {
        redirect (array ('pics', 'index', '失敗'));
      }

    } else {
      redirect (array ('pics', 'index', '失敗'));
    }
  }

  public function edit ($id) {
    if ($pic = Pic::find_by_id ($id)) {
      $user = User::find('all');
      $this->load_view (array ('pics' => $pic, 'users' => $user));
    } else {
      redirect (array ('pics', 'index'));
    }
  }

  public function update ($id) {
    $file_name = $this->input_post ('file_name');
    $user_id = $this->input_post ('user_id');

    if (verifyCreateOrm ($pic = Pic::find_by_id ($id))) {

      if (!verifyCreateOrm (User::find_by_id ($user_id))) {
        // 檢查是否有這User

        redirect (array ('pics', 'index', '失敗'));
      }

      $pic->file_name = $file_name;
      $pic->user_id = $user_id;

      if ($pic->save ()) {
        redirect (array ('pics', 'index', '成功'));
      } else {
        redirect (array ('pics', 'index', '失敗'));
      }

    } else {
      redirect (array ('pics', 'index', '失敗'));
    }
  }

  public function delete ($id) {
    if (verifyCreateOrm ($pic = Pic::find_by_id ($id))) {

      if ($pic->delete()) {
        redirect (array ('pics', 'index', '成功'));
      } else {
        redirect (array ('pics', 'index', '失敗'));
      }
    }
  }
}
