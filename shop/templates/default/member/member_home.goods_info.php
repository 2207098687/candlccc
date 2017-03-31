<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div id="favoritesGoods" class="double">
  <div class="outline">
    <div class="title">
      <h3>My Wishlist</h3>
    </div>
    <?php if(!empty($output['favorites_list']) && is_array($output['favorites_list'])){ ?>
    <div class="ncm-favorites-goods">
      <ul id="favoritesGoodsList" class="jcarousel-skin-tango">
        <?php foreach($output['favorites_list'] as $key=>$favorites){?>
        <li>
          <div class="ncm-goods-thumb-120"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$favorites['goods_id']));?>" target="_blank"><img alt="" src="<?php echo thumb($favorites, 240);?>"></a>
            <div class="ncm-goods-price"><em>₱<?php echo ncPriceFormat($favorites['goods_promotion_price']);?></em></div>
          </div>
          <div class="ncm-goods-name"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$favorites['goods_id']));?>" title="<?php echo $favorites['goods_name'];?>" target="_blank"><?php echo $favorites['goods_name'];?></a></div>
        </li>
        <?php } ?>
      </ul>
      <div class="more"><a target="_blank" href="index.php?act=member_favorite_goods&op=fglist">See All Products</a></div>
    </div>
    <?php } else { ?>
    <dl class="null-tip">
      <dt></dt>
      <dd>
        <h4>It's Empty</h4>
        <h5>Add to Wishlist & Keep Posted for New Promo & Lower Price</h5>
      </dd>
    </dl>
    <?php } ?>
  </div>
</div>