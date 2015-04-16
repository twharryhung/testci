<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Test extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index ($msg = '') {
    $datas = User::find('all');
    $this->load_view (array (
      'users' => $datas,
      'msg' => $msg
      ));
  }

  public function add () {
    $this->load_view ();
  }

  public function create () {
    $account = $this->input_post ('account');
    $password = $this->input_post ('password');
    $name = $this->input_post ('name');

    if (verifyCreateOrm (User::create (array ('account' => $account, 'password' => $password, 'name' => $name)))) {
      redirect (array ('test', 'index', '成功'));
    } else {
      redirect (array ('test', 'index', '失敗'));
    }
  }

  public function edit ($id) {
    if ($user = User::find_by_id ($id)) {
      $this->load_view(array ('users' => $user));
    } else {
      redirect (array ('test', 'index', '失敗'));
    }

  }

  public function update ($id) {

    if ($user = User::find_by_id ($id)) {
      $password = $this->input_post ('password');
      $name = $this->input_post ('name');

      $user->password = $password;
      $user->name = $name;
      $user->save ();
      redirect (array ('test', 'index', '成功'));
    } else {
      redirect (array ('test', 'index', '失敗'));
    }
  }

  public function delete ($id) {
    if ($user = User::find_by_id ($id)) {
      $user->delete ();
      redirect (array ('test', 'index', '成功'));
    } else {
      redirect (array ('test', 'index', '失敗'));
    }
  }
}
