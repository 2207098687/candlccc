<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

  <div id="browseMark" class="normal">
    <div class="outline">
      <div class="title">
        <h3>What I Viewed</h3>
      </div>
      <?php if (!empty($output['viewed_goods']) && is_array($output['viewed_goods'])) { ?>
      <div class="ncm-browse-mark">
            <ul id="browseMarkList" class="jcarousel-skin-tango">
            <?php foreach($output['viewed_goods'] as $goods_id => $goods_info) { ?>
              <li>
                <div class="ncm-goods-pic"><a href="<?php echo $goods_info['url'];?>" target="_blank"><img alt="" src="<?php echo $goods_info['goods_image'];?>"></a></div>
                <dl>
                  <dt class="ncm-goods-name"><a href="<?php echo $goods_info['url'];?>" title="<?php echo $goods_info['goods_name'];?>" target="_blank"><?php echo $goods_info['goods_name'];?></a></dt>
                  <dd class="ncm-goods-price"><em>₱<?php echo ncPriceFormat($goods_info['goods_promotion_price']);?></em></dd>
                </dl>
              </li>
            <?php } ?>
            </ul>
            <div class="more"><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_goodsbrowse&op=list" target="_blank">See All Products</a></div>
          </div>
       <?php } else { ?>
          <dl class="null-tip">
            <dt></dt>
            <dd>
              <h4>Empty Records, Checkout Our Cool Stuffs</h4>
              <h5>See All Promotions</h5>
              <p><a target="_blank" href="<?php echo SHOP_SITE_URL;?>" class="ncbtn-mini">Take A Look</a></p>
            </dd>
          </dl>
       <?php } ?>
    </div>
  </div>
<script>
//信息轮换
$.getScript("<?php echo RESOURCE_SITE_URL;?>/js/jcarousel/jquery.jcarousel.min.js", function(){
    $('#favoritesGoodsList').jcarousel({visible: 4,itemFallbackDimension: 300});
	$('#favoritesStoreList').jcarousel({visible: 3,itemFallbackDimension: 300});
	$('#friendsShareList').jcarousel({visible: 3,itemFallbackDimension: 300});
	$('#circleList').jcarousel({visible: 3,itemFallbackDimension: 300});
	$('#browseMarkList').jcarousel({visible: 3,itemFallbackDimension: 300});
});
</script>
