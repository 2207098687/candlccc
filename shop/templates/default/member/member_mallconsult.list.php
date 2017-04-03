<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
    <a class="ncbtn ncbtn-bittersweet" href="<?php echo urlShop('member_mallconsult', 'add_mallconsult');?>"><i class="icon-comments-alt"></i>Customer Support</a></div>
  <table class="ncm-default-table">
    <thead>
      <tr>
        <th class="w10"></th>
        <th class="tl">Content</th>
        <th class="w150">Time</th>
        <th class="w150">Status</th>
        <th class="w110">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php  if (!empty($output['consult_list'])) { ?>
      <?php foreach($output['consult_list'] as $val) { ?>
      <tr class="bd-line">
        <td></td>
        <td class="tl"><?php echo $val['mc_content'];?></td>
        <td><?php echo date('Y-m-d H:i:s', $val['mc_addtime']);?></td>
        <td class=""><?php echo $output['state'][$val['is_reply']];?></td>
        <td class="ncm-table-handle">
          <span><a href="<?php echo urlShop('member_mallconsult', 'mallconsult_info', array('id' => $val['mc_id']));?>" class="btn-bluejeans"><i class="icon-eye-open"></i><p>Detail</p></a></span>
          <span><a href="javascript:void(0);" onclick="ajax_get_confirm('<?php echo $lang['nc_common_op_confirm'];?>', '<?php echo urlShop('member_mallconsult', 'del_mallconsult', array('id' => $val['mc_id']));?>');" class="btn-bluejeans"><i class="icon-trash"></i><p>Delete</p></a></span>
        </td>
      </tr>
      <?php } ?>
      <?php } else {?>
      <tr>
        <td colspan="20" class="norecord"><div class="warning-option"><i>&nbsp;</i><span><?php echo $lang['no_record'];?></span></div></td>
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
      <?php  if (!empty($output['consult_list'])) { ?>
      <tr>
        <td colspan="20"><div class="pagination"> <?php echo $output['show_page']; ?></div></td>
      </tr>
      <?php } ?>
    </tfoot>
  </table>
</div>
