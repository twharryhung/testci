<?php
if ($msg) { ?>
  <?php echo urldecode($msg); ?>
<?php
} ?>
<br>
<a href="<?php echo base_url ('pics', 'add'); ?>">新增</a>

<table>
  <tr>
    <td>
      圖片名稱
    </td>
    <td>
      擁有者
    </td>
    <td>
      圖片
    </td>
    <td>
      管理
    </td>
  </tr>

  <?php
  if ($pics) { ?>
    <?php foreach ($pics as $pic) { ?>
      <tr>
        <td>
          <?php echo $pic->file_name; ?>
        </td>
        <td>
          <?php echo $pic->owner->name; ?>
        </td>
        <td>

        </td>
        <td>
          <a href="<?php echo base_url ('pics', 'edit', $pic->id); ?>">編輯</a> | <a href="<?php echo base_url ('pics', 'delete', $pic->id) ?>">刪除</a>
        </td>
      </tr>
    <?php } ?>
  <?php
  } ?>
</table>