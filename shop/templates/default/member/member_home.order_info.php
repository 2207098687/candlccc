<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div id="transaction" class="double">
  <div class="outline">
    <div class="title">
      <h3>Recent Orders</h3>
      <ul>
        <li>
          <?php if ($output['home_member_info']['order_nopay_count'] > 0) { ?>
          <a href="index.php?act=member_order&state_type=state_new"><?php echo $lang['nc_order_waitpay'];?><em><?php echo $output['home_member_info']['order_nopay_count'];?></em></a>
          <?php } else { ?>
          <?php echo $lang['nc_order_waitpay'];?><em>0</em>
          <?php } ?>
        </li>
        <li>
          <?php if ($output['home_member_info']['order_noreceipt_count'] > 0) { ?>
          <a href="index.php?act=member_order&state_type=state_send"><?php echo $lang['nc_order_receiving'];?><em><?php echo $output['home_member_info']['order_noreceipt_count'];?></em></a>
          <?php } else { ?>
          <?php echo $lang['nc_order_receiving'];?><em>0</em>
          <?php } ?>
        </li>
        <li>
          <?php if ($output['home_member_info']['order_noeval_count'] > 0) { ?>
          <a href="index.php?act=member_order&state_type=state_noeval"><?php echo $lang['nc_order_waitevaluate'];?><em><?php echo $output['home_member_info']['order_noeval_count'];?></em></a>
          <?php } else { ?>
          <?php echo $lang['nc_order_waitevaluate'];?><em>0</em>
          <?php } ?>
        </li>
      </ul>
    </div>
    <div class="order-list">
      <ul>
        <?php foreach($output['order_list'] as $k => $order_info) { ?>
        <li>
          <div class="ncm-goods-thumb"><a target="_blank" href="<?php echo urlShop('member_order','show_order',array('order_id'=>$order_info['order_id'])); ?>"><img src="<?php echo thumb($order_info['extend_order_goods'][0],60); ?>" /></a><em><?php echo count($order_info['extend_order_goods'])>1 ? count($order_info['extend_order_goods']) : null;?></em></div>
          <dl class="ncm-goods-info">
            <dt><a href="<?php echo urlShop('member_order','show_order',array('order_id'=>$order_info['order_id'])); ?>" target="_blank"><?php echo $order_info['extend_order_goods'][0]['goods_name']; ?></a>
              <?php if (count($order_info['extend_order_goods']) > 1) { ?>
              <span>Totally,<strong><?php echo count($order_info['extend_order_goods']);?></strong>Types of Items</span>
              <?php } ?>
            </dt>
            <dd><span class="order-date">Time:<?php echo date('Y-m-d H:i:s',$order_info['add_time']);?></span><span class="ncm-order-price">Amount:<em>₱<?php echo $order_info['order_amount'];?></em></span></dd>
            <dd><span class="order-state">Status:<?php echo orderState($order_info);?>
              <?php if ($order_info['if_deliver']){ ?>
              <a href='index.php?act=member_order&op=search_deliver&order_id=<?php echo $order_info['order_id']; ?>&order_sn=<?php echo $order_info['order_sn']; ?>' target="_blank"><i class="icon-truck"></i>Delivery</a>
              <?php } ?>
              </span> </dd>
          </dl>
          <?php if ($order_info['if_payment']) {?>
          <a href="index.php?act=buy&op=pay&pay_sn=<?php echo $order_info['pay_sn'];?>" target="_blank" class="ncbtn ncbtn-bittersweet"><i class="icon-shield"></i>Pay Order</a>
          <?php } ?>
          <?php if ($order_info['if_receive']) { ?>
          <a href="<?php echo urlShop('member_order','show_order',array('order_id'=>$order_info['order_id'])); ?>" target="_blank" class="ncbtn ncbtn-mint"><i class="icon-ok-sign"></i>Received</a>
          <?php } ?>
          <?php if ($order_info['if_evaluation']) { ?>
          <a href="index.php?act=member_evaluate&op=add&order_id=<?php echo $order_info['order_id']; ?>" target="_blank" class="ncbtn ncbtn-mint"><i class="icon-comments-alt"></i>Review</a>
          <?php } ?>
          <?php if (!$order_info['if_payment'] && !$order_info['if_receive'] && !$order_info['if_evaluation']) {?>
          <a href="index.php?act=member_order&op=show_order&order_id=<?php echo $order_info['order_id'];?>" target="_blank" class="ncbtn ncbtn-mint"><i class="icon-eye-open"></i>Detail</a>
          <?php } ?>
        </li>
        <?php } ?>
      </ul>
    </div>
    <?php if (empty($output['order_list'])) { ?>
    <dl class="null-tip">
      <dt></dt>
      <dd>
<!--        <h4>您好久没在商城购物了</h4>-->
<!--        <h5>交易提醒可帮助您了解订单状态和物流情况</h5>-->
        <h4>No Order Yet. Explore & Enjoy Shopping.</h4>
        <h5>Transaction Notice Helps You Track Your Order Status.</h5>
      </dd>
    </dl>
    <?php } ?>
  </div>
</div>
<div id="shopping" class="normal">
  <div class="outline">
    <div class="title">
      <h3>My Cart</h3>
    </div>
    <?php if (!empty($output['cart_list']) && is_array($output['cart_list'])) { ?>
    <div class="cart-list">
      <ul>
        <?php foreach($output['cart_list'] as $cart_info) { ?>
        <li>
          <div class="ncm-goods-thumb"><a target="_blank" href="<?php echo urlShop('goods','index',array('goods_id'=>$cart_info['goods_id']));?>"><img src="<?php echo thumb($cart_info,60);?>"></a></div>
          <dl class="ncm-goods-info">
            <dt><a href="<?php echo urlShop('goods','index',array('goods_id'=>$cart_info['goods_id']));?>"><?php echo $cart_info['goods_name']; ?></a></dt>
            <dd><span class="ncm-order-price">Cool Price: <em>₱<?php echo ncPriceFormat($cart_info['goods_price']); ?></em></span><!-- <span class="sale">限时折扣</span> --></dd>
          </dl>
        </li>
        <?php } ?>
      </ul>
      <div class="more"><a href="index.php?act=cart">See All Products</a></div>
    </div>
    <?php } else { ?>
    <dl class="null-tip">
      <dt></dt>
      <dd>
        <h4>Empty Cart, Shop Now</h4>
        <h5>Order Is Easy: Add Desire Products into Cart -> <br/>Modify Quantity -> Submit</h5>
      </dd>
    </dl>
    <?php } ?>
  </div>
</div>
