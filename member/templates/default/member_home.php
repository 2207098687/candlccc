<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div id="member_center_box" class="ncm-index-container">
  <div class="user-account">
    <dl class="account01">
      <a href="<?php echo urlMember('predeposit', 'pd_log_list');?>" title="Account Balance">
      <dt>Account Balance</dt>
      <dd class="icon"></dd>
      <dd class="value">₱<em><?php echo $output['member_info']['available_predeposit'];?></em></dd>
      </a>
    </dl>
    <dl class="account02">
      <a href="<?php echo urlMember('predeposit', 'rcb_log_list');?>">
<!--      <dt>充值卡余额</dt>-->
      <dt>Other Balance</dt>
      <dd class="icon"></dd>
      <dd class="value">₱<em><?php echo $output['member_info']['available_rc_balance'];?></em></dd>
      </a>
    </dl>
    <dl class="account03">
      <a href="<?php echo urlMember('member_voucher');?>" title="My Coupon">
      <dt>My Coupon</dt>
      <dd class="icon"></dd>
      <dd class="value"><em><?php echo $output['member_info']['voucher_count']?$output['member_info']['voucher_count']:0;?></em>Pcs</dd>
      </a>
    </dl>
    <dl class="account04">
      <a href="<?php echo urlMember('member_redpacket');?>">
      <dt>My Voucher</dt>
      <dd class="icon"></dd>
      <dd class="value"><em><?php echo $output['member_info']['redpacket_count']?$output['member_info']['redpacket_count']:0;?></em>Pcs</dd>
      </a>
    </dl>
    <dl class="account05">
      <a href="<?php echo urlMember('member_points');?>" title="My Points">
      <dt>Avaialbe Points</dt>
      <dd class="icon"></dd>
      <dd class="value"><em><?php echo $output['member_info']['member_points'];?></em>Points</dd>
      </a>
    </dl>
  </div>
  <div class="user-consume">
  <div class="title"><h3>My Orders</h3> <a href="<?php echo urlMember('consume');?>">My Orders</a></div>
  <table class="ncm-default-table">
    <thead>
      <tr>
        <th class="w10"></th>
        <th class="w150 tl">Time</th>
        <th class="w150 tl">Amount</th>
        <th class="tl">Comments</th>
      </tr>
    </thead>
    <tbody>
      <?php  if (!empty($output['consume_list'])) { ?>
      <?php foreach($output['consume_list'] as $val) { ?>
      <tr class="bd-line">
        <td></td>
        <td class="w150 tl"><?php echo date('Y-m-d H:i:s', $val['consume_time']);?></td>
        <td class="w150 tl">₱<?php echo ncPriceFormat($val['consume_amount'])?></td>
        <td class="tl"><?php echo $val['consume_remark'];?></td>
      </tr>
      <?php } ?>
      <?php } else {?>
      <tr>
        <td colspan="20" class="norecord"><div class="warning-option"><span>Empty, Shop Now</span></div></td>
      </tr>
      <?php } ?>
    </tbody>
   
  </table></div>
</div>
