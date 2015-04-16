<form action="<?php echo base_url ('test', 'update', $users->id); ?>" method='post'>
  <span>password:</span>
  <input type='password' name='password' value="<?php echo $users->password; ?>"> <br>
  <span>name:</span>
  <input type='text' name='name' value="<?php echo $users->name; ?>"> <br>
  <button type='submit'>送出</button>
</form>