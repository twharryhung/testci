<h1>姓名:<?php echo $user->name; ?></h1>
<?php
foreach ($user->pics as $pic) { ?>
  <img src="<?php echo $pic->file_name->url ('100w'); ?>"><br/>
<?php
} ?>