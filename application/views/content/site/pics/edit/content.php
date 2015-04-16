<form action="<?php echo base_url ('pics', 'update', $pics->id); ?>" method='post'>
  <span>pic_name:</span>
  <input type='text' name='file_name' value="<?php echo $pics->file_name; ?>"> <br>
  <span>user:</span>
  <select name='user_id'>
    <?php
    foreach ($users as $user) { ?>
      <option <?php if ($user->id == $pics->user_id) { ?> active <?php } ?> value="<?php echo $user->id; ?>"><?php echo $user->name; ?></option>
    <?php
    } ?>
  </select>
  <button type='submit'>送出</button>
</form>