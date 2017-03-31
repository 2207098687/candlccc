<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="ncc-main">
  <div class="ncc-title">
    <h3><?php echo $lang['cart_index_buy_finish'];?></h3>
    <h5>Order Has Completed. Wish You Enjoy Shopping with Us.</h5>
  </div>
  <div class="ncc-receipt-info mb30">
  <div class="ncc-finish-a"><i></i>Paid Successfully! You Have Paid Order Amount.<em>₱<?php echo $_GET['pay_amount'];?></em>。</div>
  <div class="ncc-finish-b">Checkout Order History at <a href="<?php echo SHOP_SITE_URL?>/index.php?act=member_order">PURCHASED</a>, View Details。</div>
  <div class="ncc-finish-c mb30"><a href="<?php echo SHOP_SITE_URL?>" class="ncbtn-mini ncbtn-mint mr15"><i class="icon-shopping-cart"></i>Continue to Shop</a><a href="<?php echo SHOP_SITE_URL?>/index.php?act=member_order" class="ncbtn-mini ncbtn-aqua"><i class="icon-file-text-alt"></i>Check Orders</a></div>
  </div>
</div>