<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_point.css" rel="stylesheet" type="text/css">

<div class="ncp-container">
  <div class="ncp-base-layout">
    <div class="ncp-member-left">
      <?php include_once BASE_TPL_PATH.'/home/pointshop.minfo.php'; ?>
    </div>
    <div class="ncp-member-right">
      <table class="ncp-table-style">
        <thead>
          <tr>
            <th class="w200">Time</th>
            <th class="w100">Points</th>
            <th class="w200">Management</th>
            <th class="tl">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php  if (count($output['list_log'])>0) { ?>
          <?php foreach($output['list_log'] as $val) { ?>
          <tr class="">
            <td class=""><?php echo @date('Y-m-d',$val['exp_addtime']);?></td>
            <td class=""><?php echo ($val['exp_points'] > 0 ? '' : '-').$val['exp_points']; ?></td>
            <td><?php 
        	              	switch ($val['exp_stage']){
        	              		case 'login':
        	              			echo 'Login';
        	              			break;
        	              		case 'comments':
        	              			echo 'Review Product';
        	              			break;
        	              		case 'order':
        	              			echo 'Order';
        	              			break;
        	              	}
        	              ?></td>
            <td class="tl"><?php echo $val['exp_desc'];?></td>
          </tr>
          <?php } ?>
          <?php } else { ?>
          <tr>
            <td colspan="20" class="norecord"><div class="warning-option"><i>&nbsp;</i><span><?php echo $lang['no_record']; ?></span></div></td>
          </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <?php  if (count($output['list_log'])>0) { ?>
          <tr>
            <td colspan="20"><div class="pagination"><?php echo $output['show_page']; ?></div></td>
          </tr>
          <?php } ?>
        </tfoot>
      </table>
    </div>
  </div>
</div>
