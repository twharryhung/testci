<form action="<?php echo base_url ('pics', 'create'); ?>" method='post' enctype='multipart/form-data'>
  <span>pic_name:</span>
  <input type='file' name='pic_name'> <br>
  <span>user:</span>
  <select name='user_id'>
    <?php
    foreach ($users as $user) { ?>
      <option value="<?php echo $user->id; ?>"><?php echo $user->name; ?></option>
    <?php
    } ?>
  </select> <br>
  <button type='submit'>送出</button>
</form>