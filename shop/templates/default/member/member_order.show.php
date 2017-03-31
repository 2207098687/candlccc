<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<div class="ncm-oredr-show">
  <div class="ncm-order-info">
    <div class="ncm-order-details">
      <div class="title"><?php echo $lang['member_show_order_info'];?></div>
      <div class="content">
        <dl>
          <dt><?php echo $lang['member_show_order_receiver'].$lang['nc_colon'];?></dt>
          <dd><span><?php echo $output['order_info']['extend_order_common']['reciver_name'];?>，</span><span><?php echo @$output['order_info']['extend_order_common']['reciver_info']['phone'];?>，</span><span><?php echo @$output['order_info']['extend_order_common']['reciver_info']['address'];?></span></dd>
        </dl>
        <dl>
          <dt><?php echo $lang['member_show_order_buyer_message'].$lang['nc_colon'];?></dt>
          <dd><?php echo $output['order_info']['extend_order_common']['order_message']; ?></dd>
        </dl>
        <dl class="line">
          <dt><?php echo $lang['member_change_order_no'].$lang['nc_colon'];?></dt>
          <dd><?php echo $output['order_info']['order_sn']; ?><a href="javascript:void(0);">More<i class="icon-angle-down"></i>
            <div class="more"><span class="arrow"></span>
              <ul>
                <?php if($output['order_info']['payment_name']) { ?>
                <li><?php echo $lang['member_order_pay_method'].$lang['nc_colon'];?><span><?php echo $output['order_info']['payment_name']; ?>
                  <?php if($output['order_info']['payment_code'] != 'offline' && !in_array($output['order_info']['order_state'],array(ORDER_STATE_CANCEL,ORDER_STATE_NEW))) { ?>
                  (<?php echo 'Payment No.'.$lang['nc_colon'];?><?php echo $output['order_info']['pay_sn']; ?>)
                  <?php } ?>
                  </span> </li>
                <?php } ?>
                <li><?php echo $lang['member_order_time'].$lang['nc_colon'];?><span><?php echo date("Y-m-d H:i:s",$output['order_info']['add_time']); ?></span></li>
                <?php if(intval($output['order_info']['payment_time'])) { ?>
                <li><?php echo $lang['member_show_order_pay_time'].$lang['nc_colon'];?><span>
                  <?php if (date('His',$output['order_info']['payment_time']) == 0) {?>
                  <?php echo date('Y-m-d',$output['order_info']['payment_time']);?>
                  <?php } else {?>
                  <?php echo date('Y-m-d H:i:s',$output['order_info']['payment_time']);?>
                  <?php } ?>
                  </span></li>
                <?php } ?>
                <?php if($output['order_info']['extend_order_common']['shipping_time']) { ?>
                <li><?php echo $lang['member_show_order_send_time'].$lang['nc_colon'];?><span><?php echo date("Y-m-d H:i:s",$output['order_info']['extend_order_common']['shipping_time']); ?></span></li>
                <?php } ?>
                <?php if(intval($output['order_info']['finnshed_time'])) { ?>
                <li><?php echo $lang['member_show_order_finish_time'].$lang['nc_colon'];?><span><?php echo date("Y-m-d H:i:s",$output['order_info']['finnshed_time']); ?></span></li>
                <?php } ?>
              </ul>
            </div>
            </a></dd>
        </dl>
        <dl>
<!--          <dt>--><?php //echo $lang['member_show_order_seller_info'].$lang['nc_colon'];?><!--</dt>-->
<!--          <dd>--><?php //echo $output['order_info']['extend_store']['store_name']; ?><!--<a href="javascript:void(0);">更多<i class="icon-angle-down"></i>-->
<!--            <div class="more"><span class="arrow"></span>-->
<!--              <ul>-->
<!--                <li>--><?php //echo $lang['member_address_location'].$lang['nc_colon'];?><!--<span>--><?php //echo $output['order_info']['extend_store']['area_info'].'&nbsp;'.$output['order_info']['extend_store']['store_address']; ?><!--</span></li>-->
<!--                <li>联系电话：<span>--><?php //echo $output['order_info']['extend_store']['store_phone']; ?><!--</span></li>-->
<!--              </ul>-->
<!--            </div>-->
<!--            </a>-->
<!--            <div class="msg"> <span member_id="--><?php //echo $output['order_info']['extend_store']['member_id'];?><!--"></span>-->
<!--              --><?php //if(!empty($output['order_info']['extend_store']['store_qq'])){?>
<!--              <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=--><?php //echo $output['order_info']['extend_store']['store_qq'];?><!--&site=qq&menu=yes" title="QQ: --><?php //echo $order_info['extend_store']['store_qq'];?><!--"><img border="0" src="http://wpa.qq.com/pa?p=2:--><?php //echo $output['order_info']['extend_store']['store_qq'];?><!--:52" style=" vertical-align: middle;"/></a>-->
<!--              --><?php //}?>
<!--              <!-- wang wang -->-->
<!--              --><?php //if(!empty($output['order_info']['extend_store']['store_ww'])){?>
<!--              <a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=--><?php //echo $output['order_info']['extend_store']['store_ww'];?><!--&site=cntaobao&s=2&charset=--><?php //echo CHARSET;?><!--"  class="vm" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=--><?php //echo $output['order_info']['extend_store']['store_ww'];?><!--&site=cntaobao&s=2&charset=--><?php //echo CHARSET;?><!--" alt="Wang Wang"  style=" vertical-align: middle;"/></a>-->
<!--              --><?php //}?>
<!--            </div>-->
<!--          </dd>-->
        </dl>
      </div>
    </div>
    <?php if ($output['order_info']['order_state'] == ORDER_STATE_CANCEL) { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-off orange"></i>Order Status: </dt>
        <dd>Closed</dd>
      </dl>
      <ul>
        <li><?php echo $output['order_info']['close_info']['log_role'];?> At <?php echo date('Y-m-d H:i:s',$output['order_info']['close_info']['log_time']);?> <?php echo $output['order_info']['close_info']['log_msg'];?></li>
      </ul>
    </div>
    <?php } ?>
    <?php if ($output['order_info']['order_state'] == ORDER_STATE_NEW) { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-ok-circle green"></i>Order Status: </dt>
        <dd> <?php echo $output['order_info']['payment_code'] != 'chain' ? 'Order Submitted, Waiting for Customer to Pay' : 'Order Submitted, Waiting for Meetup Transaction' ?>
          <?php if ($output['order_info']['chain_code']) { ?>
          , Pickup Code<?php echo $output['order_info']['chain_code'];?>
          <?php } ?>
        </dd>
      </dl>
      <ul>
        <?php if ($output['order_info']['payment_code'] != 'chain') { ?>
        <li>1. Unpaid Order, Please<a href="index.php?act=buy&op=pay&pay_sn=<?php echo $output['order_info']['pay_sn'];?>" class="ncbtn-mini ncbtn-bittersweet"><i></i>Pay Order</a> We Will Arrange Shipping Soon afterwards</li>
        <li>2.You Can Select<a href="#order-step" class="ncbtn-mini">Cancel</a>to Cancel Order.</li>
        <?php if (!$output['order_info']['api_pay_time']) { ?>
        <li>3. Unpaid Order, System Will Close the Order at<time><?php echo date('Y-m-d H:i:s',$output['order_info']['order_cancel_day']);?></time>
        </li>
        <?php } ?>
        <?php } else { ?>
        <li>Please Contact Us For Delivery Within
          <time><?php echo CHAIN_ORDER_PAYPUT_DAY;?></time>
          Days, or System Will Close the Order.
          <?php } ?>
      </ul>
    </div>
    <?php } ?>
    <?php if ($output['order_info']['order_state'] == ORDER_STATE_PAY) { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-ok-circle green"></i>Order Status: </dt>
        <dd>
          <?php if ($output['order_info']['payment_code'] == 'offline') { ?>
          Order Submitted, Waiting for Package Dispatch
          <?php } else { ?>
          <?php echo $output['order_info']['state_desc'];?>
          <?php } ?>
          <?php if ($output['order_info']['chain_code']) { ?>
          , Pickup Code<?php echo $output['order_info']['chain_code'];?>
          <?php } ?>
        </dd>
      </dl>
      <ul>
        <?php if ($output['order_info']['payment_code'] == 'offline') { ?>
        <li>1. Successfully Placed Order with Cash-on-Delivery Payment Option.</li>
        <li>2. Order Submitted and Coolandless Is Packing Your Order.</li>
        <li>3. If You Decide Not to Order, Please Select<a href="#order-step" class="ncbtn-mini">Cancel</a>to Process</li>
        <?php } else { ?>
        <li>1. You've Used“<?php echo orderPaymentName($output['order_info']['payment_code']);?>”to Pay Order Successfully, Payment No. “<?php echo $output['order_info']['pay_sn'];?>”。</li>
        <li>2. Order Submitted and Coolandless Is Packing Your Order.</li>
        <?php if ($output['order_info']['order_type'] != 2) { ?>
        <li>3. If You Wish to Cancel Order, Please Contact Our Customer Support<a class="ncbtn-mini" href="#order-step">Apply Refund</a></li>
        <?php } ?>
        <?php } ?>
      </ul>
    </div>
    <?php } ?>
    <?php if ($output['order_info']['order_state'] == ORDER_STATE_SEND) { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-ok-circle green"></i>Order Status: </dt>
        <dd>Package Dispatched, It's on the Way!
          <?php if ($output['order_info']['extend_order_common']['dlyo_pickup_code'] != '') { ?>
          , Pickup Code：<?php echo $output['order_info']['extend_order_common']['dlyo_pickup_code'];?>
          <?php } ?>
        </dd>
      </dl>
      <ul>
        <li>1. Order Has Dispatched;
          <?php if ($output['order_info']['shipping_code'] != '') { ?>
          Shipping Company<?php echo $output['order_info']['express_info']['e_name']?>; Tracking No.<?php echo $output['order_info']['shipping_code'];?>。
          <?php if ($output['order_info']['if_deliver']) { ?>
          See <a href="#order-step" class="blue">“Tracking”</a> Updates。
          <?php } ?>
          <?php } else { ?>
          No Need Shipping Company, by Contact.
          <?php } ?>
        </li>
        <li>2. If You Have Received Your Order, Please<a href="#order-step" class="ncbtn-mini ncbtn-mint">Confirm Order</a>to Close the Deal.</li>
        <li>3. System will Automatically CONFIRM ORDER by
          <time><?php echo date('Y-m-d H:i:s',$output['order_info']['order_confirm_day']);?></time>
          If You Don't Take Actions.</li>
      </ul>
    </div>
    <?php } ?>
    <?php if ($output['order_info']['order_state'] == ORDER_STATE_SUCCESS) { ?>
    <?php if ($output['order_info']['evaluation_state'] == 1) { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-ok-circle green"></i>Order Status:</dt>
        <dd>Reviewed</dd>
      </dl>
      <ul>
        <li>1.You Have Reviewed and Rated the Product. Thanks for Your Support. Enjoy Your Shopping!</li>
        <li>2. Checkout Your<a href="index.php?act=member_favorite_goods&op=fglist" class="ncbtn-mini">Wishlist Products</a> You May Add to Cart and Order.</li>
        <li>3. <a href="<?php echo SHOP_SITE_URL;?>">Take Around</a>Explore More Interesting Products</li>
<!--        <li>3. Take Around<a href="--><?php //echo urlShop('show_store','index',array('store_id'=>$output['order_info']['store_id']), $output['order_info']['extend_store']['store_domain']);?><!--" class="ncbtn-mini">store</a>New Products。</li>-->
      </ul>
    </div>
    <?php } else { ?>
    <div class="ncm-order-condition">
      <dl>
        <dt><i class="icon-ok-circle green"></i>Order Status: </dt>
        <dd>Received Package</dd>
      </dl>
      <ul>
        <li>1. If You Have Any Concerns, Please Feel Free to Contact Us.</li>
<!--        <li>2.  <a href="#order-step" class="red">"Complain"</a>。</li>-->
        <?php if ($output['order_info']['if_evaluation']) { ?>
        <li>3. Transaction Complted. You Can<a href="#order-step" class="ncbtn-mini ncbtn-aqua">Review</a> the Product.</li>
        <?php } ?>
      </ul>
    </div>
    <?php } ?>
    <?php } ?>
    <div class="mall-msg">Contact Us<a href="javascript:void(0);" onclick="ajax_form('mall_consult', '平台客服', '<?php echo urlShop('member_mallconsult', 'add_mallconsult', array('inajax' => 1));?>', 640);"><i class="icon-comments-alt"></i>Support</a></div>
  </div>
  <?php if ($output['order_info']['order_state'] != ORDER_STATE_CANCEL && $output['order_info']['order_type'] != 3) { ?>
  <div id="order-step" class="ncm-order-step">
    <dl class="step-first <?php if ($output['order_info']['order_state'] != ORDER_STATE_CANCEL) echo 'current';?>">
      <dt>Order</dt>
      <dd class="bg"></dd>
      <dd class="date" title="<?php echo $lang['member_order_time'];?>"><?php echo date("Y-m-d H:i:s",$output['order_info']['add_time']); ?></dd>
    </dl>
    <?php if ($output['order_info']['payment_code'] != 'offline') { ?>
    <dl class="<?php if(intval($output['order_info']['payment_time']) && $output['order_info']['order_pay_state'] !== false) echo 'current'; ?>">
      <dt>Pay</dt>
      <dd class="bg"> </dd>
      <dd class="date" title="<?php echo $lang['member_show_order_pay_time'];?>"><?php echo intval(date("His",$output['order_info']['payment_time'])) ? date("Y-m-d H:i:s",$output['order_info']['payment_time']) : date("Y-m-d",$output['order_info']['payment_time']); ?></dd>
    </dl>
    <?php } ?>
    <dl class="<?php if($output['order_info']['extend_order_common']['shipping_time']) echo 'current'; ?>">
      <dt>Deliver</dt>
      <dd class="bg"> </dd>
      <dd class="date" title="<?php echo $lang['member_show_order_send_time'];?>"><?php echo date("Y-m-d H:i:s",$output['order_info']['extend_order_common']['shipping_time']); ?></dd>
    </dl>
    <dl class="<?php if(intval($output['order_info']['finnshed_time'])) { ?>current<?php } ?>">
      <dt>Receive</dt>
      <dd class="bg"> </dd>
      <dd class="date" title="<?php echo $lang['member_show_order_finish_time'];?>"><?php echo date("Y-m-d H:i:s",$output['order_info']['finnshed_time']); ?></dd>
    </dl>
    <dl class="<?php if($output['order_info']['evaluation_state'] == 1) { ?>current<?php } ?>">
      <dt>Review</dt>
      <dd class="bg"></dd>
      <dd class="date" title="Review Time"><?php echo date("Y-m-d H:i:s",$output['order_info']['extend_order_common']['evaluation_time']); ?></dd>
    </dl>
  </div>
  <?php } ?>
  <?php if ($output['order_info']['order_type'] == 2) { ?>
  <div class="ncm-order-contnet">
    <table class="ncm-default-table order">
      <thead>
        <tr>
          <th class="w10">&nbsp;</th>
          <th>Pre-order</th>
          <th>Amount</th>
          <th>Payment Method</th>
          <th>Payment No.</th>
          <th>Payment Time</th>
          <th>Status</th>
          <th>Other</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($output['order_info']['book_list'] as $k => $book_info) { ?>
        <tr>
          <td></td>
          <td><?php echo $book_info['book_step'];?></td>
          <td><?php echo $book_info['book_amount'].$book_info['book_amount_ext'];?></td>
          <td><?php echo $book_info['book_pay_name'];?></td>
          <td><?php echo $book_info['book_trade_no'];?></td>
          <td><?php if (!empty($book_info['book_pay_time'])) { ?>
            <?php echo !date('His',$book_info['book_pay_time']) ? date('Y-m-d',$book_info['book_pay_time']) : date('Y-m-d H:i:s',$book_info['book_pay_time']);?>
            <?php } ?></td>
          <td><?php echo $book_info['book_state'];?></td>
          <td><?php echo $book_info['book_operate'];?><?php echo $k == 1 ? '（Mobile'.$book_info['book_buyer_phone'].'）' : null;?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <?php } ?>
  <div class="ncm-order-contnet">
    <table class="ncm-default-table order">
      <thead>
        <tr>
          <th class="w10"></th>
          <th colspan="2"><?php echo $lang['member_order_goods_name'];?></th>
          <th class="w20"></th>
          <th class="w120 tl"><?php echo $lang['member_order_price'];?>（₱）</th>
          <th class="w60"><?php echo $lang['member_order_amount'];?></th>
          <th class="w100">Promo</th>
          <th class="w100">Complaint</th>
          <th class="w100">Status</th>
          <th class="w100">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($output['order_info']['shipping_code'])) { ?>
        <tr>
          <th colspan="7" style="border-right: none;"> <div class="order-deliver"><span>Shipping Co.: <a target="_blank" href="<?php echo $output['order_info']['express_info']['e_url'];?>"><?php echo $output['order_info']['express_info']['e_name'];?></a></span><span> <?php echo $lang['member_show_order_shipping_no'].$lang['nc_colon'];?> <?php echo $output['order_info']['shipping_code'];?> </span><span><a href="javascript:void(0);" id="show_shipping">Tracking<i class="icon-angle-down"></i>
              <div class="more"><span class="arrow"></span>
                <ul id="shipping_ul">
                  <li>loading...</li>
                </ul>
              </div>
              </a></span></div></th>
          <th colspan="3" style=" border-left: none;"><?php if(!empty($output['daddress_info'])) { ?>
            <dl class="daddress-info">
              <dt>Consignor</dt>
              <dd><?php echo $output['daddress_info']['seller_name']; ?><a href="javascript:void(0);">More<i class="icon-angle-down"></i>
                <div class="more"><span class="arrow"></span>
                  <ul>
                    <li>Company: <span><?php echo $output['daddress_info']['company'];?></span></li>
                    <li>Contact: <span><?php echo $output['daddress_info']['telphone'];?></span></li>
                    <li>Shipped From: <span><?php echo $output['daddress_info']['area_info'];?>&nbsp;<?php echo $output['daddress_info']['address'];?></span></li>
                  </ul>
                </div>
                </a></dd>
            </dl>
            <?php } ?>
          </th>
        </tr>
        <?php } ?>
        <?php $i = 0;?>
        <?php foreach($output['order_info']['goods_list'] as $k => $goods) {?>
        <?php $i++;?>
        <tr class="bd-line">
          <td>&nbsp;</td>
          <td class="w70"><div class="ncm-goods-thumb"><a target="_blank" href="<?php echo $goods['goods_url']; ?>"><img src="<?php echo $goods['image_60_url']; ?>" onMouseOver="toolTip('<img src=<?php echo $goods['image_240_url']; ?>>')" onMouseOut="toolTip()" /></a></div></td>
          <td class="tl"><dl class="goods-name">
              <dt><a target="_blank" href="<?php echo $goods['goods_url']; ?>"><?php echo $goods['goods_name']; ?></a><span class="rec"><a target="_blank" href="<?php echo urlShop('snapshot', 'index', array('rec_id' => $goods['rec_id']));?>">[Snapshot]</a></span></dt>
              <?php if (!empty($goods['goods_spec'])) { ?>
              <dd><?php echo $goods['goods_spec'];?></dd>
              <?php } ?>
              <?php if($goods["contractlist"]){?>
              <dd class="goods-cti"> 
                <!-- S消费者保障服务 -->
                <?php foreach($goods["contractlist"] as $gcitem_v){?>
                <span <?php if($gcitem_v['cti_descurl']){ ?>onclick="window.open('<?php echo $gcitem_v['cti_descurl'];?>');" style="cursor: pointer;"<?php }?> title="<?php echo $gcitem_v['cti_name']; ?>"> <img src="<?php echo $gcitem_v['cti_icon_url_60'];?>"/> </span>
                <?php }?>
                <!-- E消费者保障服务 --> 
              </dd>
              <?php }?>
              <?php if (is_array($output['refund_all']) && !empty($output['refund_all'])) {?>
              <dd>Refund No.: <a target="_blank" href="index.php?act=member_refund&op=view&refund_id=<?php echo $output['refund_all']['refund_id'];?>"><?php echo $output['refund_all']['refund_sn'];?></a></dd>
              <?php }else if($goods['extend_refund']['refund_type'] == 1) {?>
              <dd>Refund No.: <a target="_blank" href="index.php?act=member_refund&op=view&refund_id=<?php echo $goods['extend_refund']['refund_id'];?>"><?php echo $goods['extend_refund']['refund_sn'];?></a></dd>
              <?php }else if($goods['extend_refund']['refund_type'] == 2) {?>
              <dd>Return No.: <a target="_blank" href="index.php?act=member_return&op=view&return_id=<?php echo $goods['extend_refund']['refund_id'];?>"><?php echo $goods['extend_refund']['refund_sn'];?></a></dd>
              <?php } ?>
            </dl></td>
          <td></td>
          <td class="tl refund"><?php echo ncPriceFormat($goods['goods_price']); ?>
            <p class="green">
              <?php if (is_array($output['refund_all']) && !empty($output['refund_all']) && $output['refund_all']['admin_time'] > 0) {?>
              <?php echo $goods['goods_pay_price'];?><span>Refund</span>
              <?php } elseif ($goods['extend_refund']['admin_time'] > 0) { ?>
              <?php echo $goods['extend_refund']['refund_amount'];?><span>Refund</span>
              <?php } ?>
            </p></td>
          <td><?php echo $goods['goods_num']; ?></td>
          <td><?php if (!empty($goods['goods_type_cn'])) { ?>
            <span class="goods-type"><?php echo $goods['goods_type_cn']; ?></span>
            <?php } ?></td>
          <td><!-- 退款 -->
            
            <?php if ($goods['refund'] == 1){?>
            <p><a href="index.php?act=member_refund&op=add_refund&order_id=<?php echo $output['order_info']['order_id']; ?>&goods_id=<?php echo $goods['rec_id']; ?>">Refund/Return</a></p>
            <?php }?>

            <!-- 投诉 -->
            
            <?php if ($output['order_info']['if_complain']){ ?>
            <p><a href="index.php?act=member_complain&op=complain_new&order_id=<?php echo $output['order_info']['order_id']; ?>&goods_id=<?php echo $goods['rec_id']; ?>">Complaint</a></p>
            <?php } ?></td>
          
          <!-- S 合并TD -->
          <?php if (($output['order_info']['goods_count'] > 1 && $k ==0) || ($output['order_info']['goods_count'] == 1)){ ?>
          <td class="bdl bdr" rowspan="<?php echo $output['order_info']['goods_count'];?>"><?php echo $output['order_info']['state_desc']; ?></td>
          <td rowspan="<?php echo $output['order_info']['goods_count'];?>"><?php if ($output['order_info']['if_lock']) { ?>
            <p>Refund In Process</p>
            <?php } ?>
            
            <!-- 取消订单 -->
            
            <?php if ($output['order_info']['if_buyer_cancel']) { ?>
            <p><a href="javascript:void(0)" style="color:#F30; text-decoration:underline;" nc_type="dialog" dialog_width="480" dialog_title="<?php echo $lang['member_order_cancel_order'];?>" dialog_id="buyer_order_cancel_order" uri="index.php?act=member_order&op=change_state&state_type=order_cancel&order_id=<?php echo $output['order_info']['order_id']; ?>"  id="order_action_cancel"><?php echo $lang['member_order_cancel_order'];?></a></p>
            <?php } ?>
            
            <!-- 退款取消订单 -->
            
            <?php if ($output['order_info']['if_refund_cancel']){ ?>
            <p><a href="index.php?act=member_refund&op=add_refund_all&order_id=<?php echo $output['order_info']['order_id']; ?>" class="ncbtn">Order Refund</a></p>
            <?php } ?>
            
            <!-- 收货 -->
            
            <?php if ($output['order_info']['if_receive']) { ?>
            <p><a href="javascript:void(0)" class="ncbtn" nc_type="dialog" dialog_id="buyer_order_confirm_order" dialog_width="480" dialog_title="<?php echo $lang['member_order_ensure_order'];?>" uri="index.php?act=member_order&op=change_state&state_type=order_receive&order_sn=<?php echo $output['order_info']['order_sn']; ?>&order_id=<?php echo $output['order_info']['order_id']; ?>" id="order_action_confirm"><?php echo $lang['member_order_ensure_order'];?></a></p>
            <?php } ?>
            
            <!-- 评价 -->
            
            <?php if ($output['order_info']['if_evaluation']) { ?>
            <p><a class="ncbtn ncbtn-aqua" href="index.php?act=member_evaluate&op=add&order_id=<?php echo $output['order_info']['order_id']; ?>"><?php echo $lang['member_order_want_evaluate'];?></a></p>
            <?php } ?>
            
            <!-- 已经评价 -->
            
            <?php if ($output['order_info']['evaluation_state'] == 1) { echo 'Reviewed';} ?>
            
            <!-- 分享  -->

<!--              <a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent('--><?php //echo $goods['goods_url']?><!--')) ));">sss</a>-->
<!--    <iframe src="https://www.facebook.com/plugins/share_button.php?href=--><?php //echo $goods['goods_url'];?><!--&layout=button&size=small&mobile_iframe=true&appId=596598423869351&width=88&height=20" width="88" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->

              <div class="fb-share-button">
                  <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=<?php echo $goods['goods_url'];?> ">Share</a>
              </div>
          </td>

          <?php } ?>
          <!-- E 合并TD --> 
        </tr>
        
        <!-- S 赠品列表 -->
        <?php if (!empty($output['order_info']['zengpin_list']) && $i == count($output['order_info']['goods_list'])) { ?>
        <tr class="bd-line">
          <td>&nbsp;</td>
          <td colspan="7" class="tl"><div class="ncm-goods-gift"><strong>Free Item: </strong>
              <ul>
                <?php foreach($output['order_info']['zengpin_list'] as $zengpin_info) {?>
                <li><a target="_blank" title="Free Item <?php echo $zengpin_info['goods_name'];?> * <?php echo $zengpin_info['goods_num'];?>" href="<?php echo $zengpin_info['goods_url']; ?>"><img src="<?php echo $zengpin_info['image_60_url']; ?>" onMouseOver="toolTip('<img src=<?php echo $zengpin_info['image_240_url']; ?>>')" onMouseOut="toolTip()" /></a></li>
                <?php } ?>
              </ul>
            </div></td>
        </tr>
        <?php } ?>
        <!-- E 赠品列表 -->
        
        <?php } ?>
      </tbody>
      <tfoot>
        <?php $pinfo = $output['order_info']['extend_order_common']['promotion_info'];?>
        <?php if(!empty($pinfo)){ ?>
        <?php $pinfo = unserialize($pinfo);?>
        <tr>
          <th colspan="20">
              <?php if($pinfo == false){ ?>
              <?php echo $output['order_info']['extend_order_common']['promotion_info'];?>
              <?php }elseif (is_array($pinfo)){ ?>
              <?php foreach ($pinfo as $v) {?>
              <dl class="nc-store-sales"><dt><?php echo $v[0];?></dt><dd><?php echo $v[1];?></dd></dl>
              <?php }?>
              <?php }?>
          </th>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="20"><dl class="freight">
              <dd>
                <?php if(!empty($output['order_info']['shipping_fee']) && $output['order_info']['shipping_fee'] != '0.00'){ ?>
                <?php echo $lang['member_show_order_tp_fee'].$lang['nc_colon'];?><span><?php echo $lang['currency'];?><?php echo $output['order_info']['shipping_fee']; ?></span>
                <?php if ($output['order_info']['shipping_name'] != ''){echo '('.$output['order_info']['shipping_name'].')';};?>
                <?php }else{?>
                <?php echo $lang['nc_common_shipping_free'];?>
                <?php }?>
              </dd>
            </dl>
            <dl class="sum">
              <dt><?php echo $lang['member_order_sum'].$lang['nc_colon'];?></dt>
              <dd><em><?php echo $output['order_info']['order_amount']; ?></em>₱</dd>
            </dl></td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<script charset="utf-8" type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" ></script> 
<script type="text/javascript">
$(function(){
    $('#show_shipping').on('hover',function(){
    	$.getJSON('index.php?act=member_order&op=get_express&e_code=<?php echo $output['order_info']['express_info']['e_code']?>&shipping_code=<?php echo $output['order_info']['shipping_code']?>&t=<?php echo random(7);?>',function(data){
    		if(data){
    			data = data.join('<br/>');
    			$('#shipping_ul').html('<li>'+data+'</li>');
    			$('#show_shipping').unbind('hover');
    		}else{
    			$('#shipping_ul').html(var_send);
    			$('#show_shipping').unbind('hover');
    		}
    	});
    });
});
</script> 
