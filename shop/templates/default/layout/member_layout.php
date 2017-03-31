<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<?php include template('layout/common_layout');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/member.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/member.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/ToolTip.js"></script>
<script>
//sidebar-menu
$(document).ready(function() {
    $.each($(".side-menu > a"), function() {
        $(this).click(function() {
            var ulNode = $(this).next("ul");
            if (ulNode.css('display') == 'block') {
            	$.cookie(COOKIE_PRE+'Mmenu_'+$(this).attr('key'),1);
            } else {
            	$.cookie(COOKIE_PRE+'Mmenu_'+$(this).attr('key'),null);
            }
			ulNode.slideToggle();
				if ($(this).hasClass('shrink')) {
					$(this).removeClass('shrink');
				} else {
					$(this).addClass('shrink');
				}
        });
    });
	$.each($(".side-menu-quick > a"), function() {
        $(this).click(function() {
            var ulNode = $(this).next("ul");
			ulNode.slideToggle();
				if ($(this).hasClass('shrink')) {
					$(this).removeClass('shrink');
				} else {
					$(this).addClass('shrink');
				}
        });
    });
});

</script>

<div class="ncm-container">
  <div class="ncm-header">
    <div class="ncm-header-top">
      <div class="ncm-member-info">
        <div class="avatar"><a href="<?php echo urlMember('member_information', 'avatar');?>" title="Change Avatar"><img src="<?php echo getMemberAvatar($output['member_info']['member_avatar']);?>">
          <div class="frame"></div>
          </a>
          <?php if (intval($output['message_num']) > 0){ ?>
          <a href="<?php echo MEMBER_SITE_URL?>/index.php?act=member_message&op=message" class="new-message" title="New Msg"><?php echo intval($output['message_num']); ?></a>
          <?php }?>
        </div>
        <dl>
          <dt><a href="<?php echo urlMember('member_information', 'member');?>" title="Update Info"><?php echo $output['member_info']['member_name'];?></a></dt>
          <dd>Ranking:
            <?php if ($output['member_info']['level_name']){ ?>
            <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go('<?php echo urlShop('pointgrade','index');?>');"><?php echo $output['member_info']['level_name'];?>Member</div>
            <?php } ?>
          </dd>
          <dd>Security:
            <div class="SAM"><a href="<?php echo urlMember('member_security','index');?>" title="Security">
              <?php if ($output['member_info']['security_level'] <= 1) { ?>
              <div id="low" class="SAM-info"><span><em></em></span><strong>Low</strong></div>
              <?php } elseif ($output['member_info']['security_level'] == 2) {?>
              <div id="normal" class="SAM-info"><span><em></em></span><strong>Faire</strong></div>
              <?php }else {?>
              <div id="high" class="SAM-info"><span><em></em></span><strong>High</strong></div>
              <?php } ?>
              </a> </div>
          </dd>
          <dd>My Assets:
            <div class="user-account">
              <ul>
                <li id="pre-deposit"><a href="<?php echo urlMember('predeposit', 'pd_log_list');?>" title="Balance:₱<?php echo $output['member_info']['available_predeposit'];?>"> <span class="icon"></span> </a> </li>
                <li id="points"><a href="<?php echo urlMember('member_points', 'index');?>" title="My Points:<?php echo $output['member_info']['member_points'];?>分"> <span class="icon"></span></a> </li>
                <li id="voucher"><a href="<?php echo urlMember('member_voucher', 'index');?>" title="My Coupon：<?php echo $output['member_info']['voucher_count'];?>Pcs"> <span class="icon"></span></a> </li>
                <li id="envelope"><a href="<?php echo urlMember('member_redpacket', 'index');?>" title="Gift Voucher：<?php echo $output['member_info']['redpacket_count'];?>Pcs"> <span class="icon"></span></a></li>
              </ul>
            </div>
          </dd>
        </dl>
      </div>
      <div class="ncm-trade-menu">
        <div class="line-bg"></div>
        <dl class="trade-step-01">
          <dt>Followed</dt>
          <dd></dd>
        </dl>
        <ul class="trade-function-01">
          <li><a href="<?php echo urlShop('member_favorite_goods', 'index');?>"><span class="tf01"></span>
            <h5>Product</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_favorite_store', 'index');?>"><span class="tf02"></span>
            <h5>Store</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_goodsbrowse', 'list');?>"><span class="tf03"></span>
            <h5>Footstep</h5>
            </a> </li>
        </ul>
        <dl class="trade-step-02">
          <dt>Ongoing Deal</dt>
          <dd></dd>
        </dl>
        <ul class="trade-function-02">
          <li><a href="<?php echo urlShop('member_order', 'index', array('state_type' => 'state_new'));?>">
            <?php if ($output['order_tip']['order_nopay_count'] > 0) {?>
            <sup><?php echo $output['order_tip']['order_nopay_count']?></sup>
            <?php }?>
            <span class="tf04"></span>
            <h5>Payment</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_order', 'index', array('state_type' => 'state_send'));?>">
            <?php if ($output['order_tip']['order_noreceipt_count'] > 0) {?>
            <sup><?php echo $output['order_tip']['order_noreceipt_count']?></sup>
            <?php }?>
            <span class="tf05"></span>
            <h5>Reception</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_order', 'index', array('state_type' => 'state_notakes'));?>">
            <?php if ($output['order_tip']['order_notakes_count'] > 0) {?>
            <sup><?php echo $output['order_tip']['order_notakes_count']?></sup>
            <?php }?>
            <span class="tf06"></span>
            <h5>Meetup</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_order', 'index', array('state_type' => 'state_noeval'));?>">
            <?php if ($output['order_tip']['order_noeval_count'] > 0) {?>
            <sup><?php echo $output['order_tip']['order_noeval_count']?></sup>
            <?php }?>
            <span class="tf07"></span>
            <h5>Review</h5>
            </a> </li>
        </ul>
        <dl class="trade-step-03">
          <dt>Aftersales</dt>
          <dd></dd>
        </dl>
        <ul class="trade-function-03">
          <li><a href="<?php echo urlShop('member_refund', 'index');?>"><span class="tf08"></span>
            <h5>Refund</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_return', 'index');?>"><span class="tf09"></span>
            <h5>Return</h5>
            </a> </li>
          <li><a href="<?php echo urlShop('member_complain', 'index',array('select_complain_state' => '1'));?>"><span class="tf10"></span>
            <h5>Complain</h5>
            </a> </li>
        </ul>
      </div>
    </div>
    <div class="ncm-header-nav">
      <ul class="nav-menu">
        <li><a href="<?php echo urlShop('member', 'home');?>" class="current">My Center</a></li>
        <li class="set"><a href="<?php echo urlMember('member', 'home');?>">Settings<i></i></a>
          <div class="sub-menu">
            <dl>
              <dt><a href="<?php echo urlMember('member_security', 'index');?>" style="color: #3AAC8A;">Security</a></dt>
              <dd><a href="<?php echo urlMember('member_security', 'auth', array('type' => 'modify_pwd'));?>">Login Password</a></dd>
                <dd><a href="<?php echo urlMember('member_security', 'auth', array('type' => 'modify_paypwd'));?>">Payout Password</a></dd>
              <dd><a href="<?php echo urlMember('member_security', 'auth', array('type' => 'modify_mobile'));?>">Update Mobile</a></dd>
              <dd><a href="<?php echo urlMember('member_security', 'auth', array('type' => 'modify_email'));?>">Update Email</a></dd>
            </dl>
            <dl>
              <dt><a href="<?php echo urlMember('member_information', 'member')?>" style="color: #EA746B">Profile</a></dt>
              <dd><a href="<?php echo urlMember('member_address', 'address');?>">Shipping Address</a></dd>
              <dd><a href="<?php echo urlMember('member_information', 'avatar')?>">Change Avatar</a></dd>
              <dd><a href="<?php echo urlMember('member_message', 'setting');?>">Notification</a></dd>
            </dl>
            <dl>
              <dt><a href="<?php echo urlMember('predeposit', 'pd_log_list')?>" style="color: #FF7F00">Assets</a></dt>
              <dd><a href="<?php echo urlMember('predeposit', 'recharge_add');?>">Balance</a></dd>
              <dd><a href="<?php echo urlMember('member_voucher', 'voucher_binding')?>">Coupon</a></dd>
              <dd><a href="<?php echo urlMember('member_redpacket', 'rp_binding');?>">Gift Voucher</a></dd>
            </dl>
            <dl>
              <dt><a href="<?php echo urlMember('member_bind', 'qqbind')?>" style="color: #398EE8">Connect</a></dt>
              <dd><a href="<?php echo urlMember('member_bind', 'qqbind');?>">Facebook</a></dd>
              <dd><a href="<?php echo urlMember('member_bind', 'sinabind')?>">Integram</a></dd>
              <dd><a href="<?php echo urlMember('member_bind', 'weixinbind');?>">Google+</a></dd>
<!--              <dd><a href="--><?php //echo urlMember('member_sharemanage', 'index');?><!--">分享绑定</a></dd>-->
            </dl>
          </div>
        </li>
<!--        <li><a href="--><?php //echo urlShop('member_snshome', 'index')?><!--">个人主页<i></i></a>-->
<!--          <div class="sub-menu">-->
<!--            <dl>-->
<!--              <dd><a href="--><?php //echo urlShop('member_snshome', 'index');?><!--">新鲜事</a></dd>-->
<!--              <dd><a href="--><?php //echo urlShop('sns_album', 'index');?><!--">个人相册</a></dd>-->
<!--              <dd><a href="--><?php //echo urlShop('member_snshome', 'shareglist');?><!--">分享商品</a></dd>-->
<!--              <dd><a href="--><?php //echo urlShop('member_snshome', 'storelist');?><!--">分享店铺</a></dd>-->
<!--            </dl>-->
<!--          </div>-->
<!--        </li>-->
<!--        <li><a href="javascript:;">其他应用<i></i></a>-->
<!--          <div class="sub-menu">-->
<!--            <dl>-->
<!--              <dd><a href="--><?php //echo urlCMS('member_article', 'article_list');?><!--">我的CMS</a></dd>-->
<!--              <dd><a href="--><?php //echo urlCircle('p_center', 'index');?><!--">我的圈子</a></dd>-->
<!--              <dd><a href="--><?php //echo urlMicroshop('home', 'index', array('member_id' => $_SESSION['member_id']));?><!--">我的微商城</a></dd>-->
<!--            </dl>-->
<!--          </div>-->
<!--       </li>-->
      </ul>
      <div class="notice">
        <ul class="line">
          <?php if (is_array($output['system_notice']) && !empty($output['system_notice'])) { ?>
          <?php foreach ($output['system_notice'] as $v) { ?>
          <li><a <?php if($v['article_url']!=''){?>target="_blank"<?php }?> href="<?php if($v['article_url']!='')echo $v['article_url'];else echo urlMember('article', 'show', array('article_id'=>$v['article_id']));?>"><?php echo $v['article_title']?>
            <time>(<?php echo date('Y-m-d',$v['article_time']);?>)</time>
            </a> </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </div>
      <script>
$(function() {
    var _wrap = $('ul.line');
    var _interval = 2000;
    var _moving;
    _wrap.hover(function() {
        clearInterval(_moving);
    },
    function() {
        _moving = setInterval(function() {
            var _field = _wrap.find('li:first');
            var _h = _field.height();
            _field.animate({
                marginTop: -_h + 'px'
            },
            600,
            function() {
                _field.css('marginTop', 0).appendTo(_wrap);
            })
        },
        _interval)
    }).trigger('mouseleave');
});
</script> 
    </div>
  </div>
  <div class="left-layout">
    <ul id="sidebarMenu" class="ncm-sidebar">
      <?php if (!empty($output['menu_list'])) {?>
      <?php foreach ($output['menu_list'] as $key => $value) {?>
      <li class="side-menu"><a href="javascript:void(0)" key="<?php echo $key;?>" <?php if (cookie('Mmenu_'.$key) == 1) echo 'class="shrink"';?>>
        <h3><?php echo $value['name'];?></h3>
        </a>
        <?php if (!empty($value['child'])) {?>
        <ul <?php if (cookie('Mmenu_'.$key) == 1) echo 'style="display:none"';?>>
          <?php foreach ($value['child'] as $key => $val) {?>
          <li <?php if ($key == $output['act']) {?>class="selected"<?php }?>><a href="<?php echo $val['url'];?>"><?php echo $val['name'];?></a></li>
          <?php }?>
        </ul>
        <?php }?>
      </li>
      <?php }?>
      <?php }?>
    </ul>
  </div>
  <div class="right-layout">
    <?php require_once($tpl_file);?>
  </div>
  <div class="clear"></div>
</div>
<?php require_once template('footer');?>
</body></html>