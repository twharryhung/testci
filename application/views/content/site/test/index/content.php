<?php
if ($msg) { ?>
  <?php echo urldecode($msg); ?>
<?php
} ?>
<br>
<a href="<?php echo base_url ('test', 'add'); ?>">新增</a>

<table>
  <tr>
    <td>
      帳號
    </td>
    <td>
      密碼
    </td>
    <td>
      姓名
    </td>
    <td></td>
  </tr>

  <?php
  if ($users) { ?>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td>
          <?php echo $user->account; ?>
        </td>
        <td>
          <?php echo $user->password; ?>
        </td>
        <td>
          <?php echo $user->name; ?>
        </td>
        <td>
          <a href="<?php echo base_url ('test', 'read', $user->id); ?>">檢視</a> | <a href="<?php echo base_url ('test', 'edit', $user->id); ?>">編輯</a> | <a href="<?php echo base_url ('test', 'delete', $user->id) ?>">刪除</a>
        </td>
      </tr>
    <?php } ?>
  <?php
  } ?>
</table>