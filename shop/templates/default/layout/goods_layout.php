<?php defined('ShopNC_CLUB') or exit('Access Invalid!');
	$wapurl = WAP_SITE_URL;
	$agent = $_SERVER['HTTP_USER_AGENT'];
	if(strpos($agent,"comFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS")){
		global $config;
        if(!empty($config['wap_site_url'])){
            $url = $config['wap_site_url'];
            switch ($_GET['act']){
			case 'goods':
			  $url .= '/tmpl/product_detail.html?goods_id=' . $_GET['goods_id'];
			  break;
			case 'store_list':
			  $url .= '/shop.html';
			  break;
			case 'show_store':
			  $url .= '/tmpl/store.html?store_id=' . $_GET['store_id'];
			  break;
			}
        } else {
            header('Location:'.$wapurl.$_SERVER['QUERY_STRING']);
        }
        header('Location:' . $url);
        exit();	
	}
?>
<!doctype html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>">
<title><?php echo $output['html_title'];?></title>
<meta name="author" content="coolandless.com">
<meta name="copyright" content="coolandless.com Inc. All Rights Reserved">
<meta name="renderer" content="webkit">
<meta name="renderer" content="ie-stand">
<meta name="keywords" content="<?php echo $output['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $output['seo_description']; ?>" />
<link rel="shortcut icon" href="<?php echo BASE_SITE_URL;?>/favicon.ico" />
<!--    add Facebook sharing Meta-->
    <meta property="og:url" content="<?php echo $goods['goods_url']?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="coolandless.com" />
    <meta property="og:description"   content="hahahha" />
    <meta property="og:image" content="<?php echo SHOP_TEMPLATES_URL;?>/weixin.png" />


<?php echo html_entity_decode($output['setting_config']['qq_appcode'],ENT_QUOTES); ?>
<?php echo html_entity_decode($output['setting_config']['sina_appcode'],ENT_QUOTES); ?>
<?php echo html_entity_decode($output['setting_config']['share_qqzone_appcode'],ENT_QUOTES); ?>
<?php echo html_entity_decode($output['setting_config']['share_sinaweibo_appcode'],ENT_QUOTES); ?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/base.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_header.css" rel="stylesheet" type="text/css">
<!--去掉store_header<link href="--><?php //echo SHOP_TEMPLATES_URL;?><!--/css/store_header.css" rel="stylesheet" type="text/css">-->
<link href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<style type="text/css">
body {_behavior: url(<?php echo SHOP_TEMPLATES_URL;?>/css/csshover.htc);}
</style>
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/html5shiv.js"></script>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>

<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
<script>
var COOKIE_PRE = '<?php echo COOKIE_PRE;?>';var _CHARSET = '<?php echo strtolower(CHARSET);?>';var LOGIN_SITE_URL = '<?php echo LOGIN_SITE_URL;?>';var MEMBER_SITE_URL = '<?php echo MEMBER_SITE_URL;?>';var SITEURL = '<?php echo SHOP_SITE_URL;?>';var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var SHOP_TEMPLATES_URL = '<?php echo SHOP_TEMPLATES_URL;?>';
</script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/common.js" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.validation.min.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.masonry.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<!--    修改的公共头部JS-->
    <script type="text/javascript">
        var PRICE_FORMAT = '<?php echo $lang['currency'];?>%s';
        $(function(){
            //首页左侧分类菜单
            $(".category ul.menu").find("li").each(
                function() {
                    $(this).hover(
                        function() {
                            var cat_id = $(this).attr("cat_id");
                            var menu = $(this).find("div[cat_menu_id='"+cat_id+"']");
                            menu.show();
                            $(this).addClass("hover");
                            var menu_height = menu.height();
                            if (menu_height < 60) menu.height(80);
                            menu_height = menu.height();
                            var li_top = $(this).position().top;
                            $(menu).css("top",-li_top + 37);
                        },
                        function() {
                            $(this).removeClass("hover");
                            var cat_id = $(this).attr("cat_id");
                            $(this).find("div[cat_menu_id='"+cat_id+"']").hide();
                        }
                    );
                }
            );
            $(".head-user-menu dl").hover(function() {
                    $(this).addClass("hover");
                },
                function() {
                    $(this).removeClass("hover");
                });
            $('.head-user-menu .my-cart').mouseover(function(){// 运行加载购物车
                load_cart_information();
                $(this).unbind('mouseover');
            });
            <?php if (C('fullindexer.open')) { ?>
            // input ajax tips
            $('#keyword').focus(function(){
                if ($(this).val() == $(this).attr('title')) {
                    $(this).val('').removeClass('tips');
                }
            }).blur(function(){
                if ($(this).val() == '' || $(this).val() == $(this).attr('title')) {
                    $(this).addClass('tips').val($(this).attr('title'));
                }
            }).blur().autocomplete({
                source: function (request, response) {
                    $.getJSON('<?php echo SHOP_SITE_URL;?>/index.php?act=search&op=auto_complete', request, function (data, status, xhr) {
                        $('#top_search_box > ul').unwrap();
                        response(data);
                        if (status == 'success') {
                            $('body > ul:last').wrap("<div id='top_search_box'></div>").css({'zIndex':'1000','width':'362px'});
                        }
                    });
                },
                select: function(ev,ui) {
                    $('#keyword').val(ui.item.label);
                    $('#top_search_form').submit();
                }
            });
            <?php } ?>

            $('#button').click(function(){
                if ($('#keyword').val() == '') {
                    if ($('#keyword').attr('data-value') == '') {
                        return false
                    } else {
                        window.location.href="<?php echo SHOP_SITE_URL?>/index.php?act=search&op=index&keyword="+$('#keyword').attr('data-value');
                        return false;
                    }
                }
            });
            $(".head-search-bar").hover(null,
                function() {
                    $('#search-tip').hide();
                });
            // input ajax tips
            $('#keyword').focus(function(){
                if($('#search_act').val()=='search') {
                    $('#search-tip').show();
                } else {
                    $('#search-tip').hide();
                }
            }).autocomplete({
                //minLength:0,
                source: function (request, response) {
                    $.getJSON('<?php echo SHOP_SITE_URL;?>/index.php?act=search&op=auto_complete', request, function (data, status, xhr) {
                        $('#top_search_box > ul').unwrap();
                        response(data);
                        if (status == 'success') {
                            $('#search-tip').hide();
                            $(".head-search-bar").unbind('mouseover');
                            $('body > ul:last').wrap("<div id='top_search_box'></div>").css({'zIndex':'1000','width':'362px'});
                        }
                    });
                },
                select: function(ev,ui) {
                    $('#keyword').val(ui.item.label);
                    $('#top_search_form').submit();
                }
            });
            $('#search-his-del').on('click',function(){$.cookie('<?php echo C('cookie_pre')?>his_sh',null,{path:'/'});$('#search-his-list').empty();});
        });
    </script>
<!--    修改公共头部JS结束-->
</head>
<body>
<!-- PublicTopLayout Begin -->
<?php require_once template('layout/layout_top');?>

<!-- PublicHeadLayout Begin -->
<div class="header-wrap">
    <header class="public-head-layout wrapper">
        <h1 class="site-logo"><a href="<?php echo SHOP_SITE_URL;?>"><img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$output['setting_config']['site_logo']; ?>" class="pngFix"></a></h1>
        <div class="logo-banner"><?php echo loadadv(1048);?></div>

        <div class="head-search-layout">
            <div class="head-search-bar" id="head-search-bar">
                <div id="search">
                    <ul class="tab">
                        <li act="search" class="current"><span>Product</span>
                            <!--                <i class="arrow"></i></li>-->
                            <!--            <li act="store_list"><span>店铺</span></li>-->
                    </ul>
                </div>

                <form action="<?php echo SHOP_SITE_URL;?>" method="get" class="search-form" id="top_search_form">
                    <input name="act" id="search_act" value="search" type="hidden">
                    <?php
                    if ($_GET['keyword']) {
                        $keyword = stripslashes($_GET['keyword']);
                    } elseif ($output['rec_search_list']) {
                        $_stmp = $output['rec_search_list'][array_rand($output['rec_search_list'])];
                        $keyword_name = $_stmp['name'];
                        $keyword_value = $_stmp['value'];
                    } else {
                        $keyword = '';
                    }
                    ?>
                    <input name="keyword" id="keyword" type="text" class="input-text" value="<?php echo $keyword;?>" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" placeholder="<?php echo $keyword_name ? $keyword_name : 'Please Input Product Keywords';?>" data-value="<?php echo rawurlencode($keyword_value);?>" x-webkit-grammar="builtin:search" autocomplete="off" />
                    <input type="submit" id="button" value="<?php echo $lang['nc_common_search'];?>" class="input-submit">
                </form>
                <div class="search-tip" id="search-tip">
                    <div class="search-history">
                        <div class="title">Search History<a href="javascript:void(0);" id="search-his-del">Clear</a></div>
                        <ul id="search-his-list">
                            <?php if (is_array($output['his_search_list']) && !empty($output['his_search_list'])) { ?>
                                <?php foreach($output['his_search_list'] as $v) { ?>
                                    <li><a href="<?php echo urlShop('search', 'index', array('keyword' => $v));?>"><?php echo $v ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="search-hot">
                        <div class="title">Hot Keywords...</div>
                        <ul>
                            <?php if (is_array($output['rec_search_list']) && !empty($output['rec_search_list'])) { ?>
                                <?php foreach($output['rec_search_list'] as $v) { ?>
                                    <li><a href="<?php echo urlShop('search', 'index', array('keyword' => $v['value']));?>"><?php echo $v['value']?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="keyword">
                <ul>
                    <?php if(is_array($output['hot_search']) && !empty($output['hot_search'])) { foreach($output['hot_search'] as $val) { ?>
                        <li><a href="<?php echo urlShop('search', 'index', array('keyword' => $val));?>"><?php echo $val; ?></a></li>
                    <?php } }?>
                </ul>
            </div>
        </div>
        <div class="head-user-menu">
            <dl class="my-cart">
                <div class="addcart-goods-num"><?php echo $output['cart_goods_num'];?></div>
                <dt><span class="ico"></span><?php echo $lang['hao_ensure_order'];?><i class="arrow"></i></dt>
                <dd>
                    <div class="sub-title">
                        <h4><?php echo $lang['hao_new_goods'];?></h4>
                    </div>
                    <div class="incart-goods-box">
                        <div class="incart-goods"> <img class="loading" src="<?php echo SHOP_TEMPLATES_URL;?>/images/loading.gif" /> </div>
                    </div>
                    <div class="checkout"> <span class="total-price">Totally<i><?php echo $output['cart_goods_num'];?></i><?php echo $lang['nc_kindof_goods'];?></span><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=cart" class="btn-cart"><?php echo $lang['hao_bill_goods'];?></a> </div>
                </dd>
            </dl>
        </div>
    </header>
</div>
<!-- PublicHeadLayout End -->
<!--暂时屏蔽商品详细页的顶部店标等头部信息，替换为全站公共首页上部区块-->
<!-- PublicHeadLayout Begin -->
<!--<div class="header-wrap">-->
<!--  <header class="public-head-layout wrapper">-->
<!--    <h1 class="site-logo"><a href="--><?php //echo SHOP_SITE_URL;?><!--"><img src="--><?php //echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$output['setting_config']['site_logo']; ?><!--" class="pngFix"></a></h1>-->
<!--	<div class="heade_store_info">-->
<!--    	<div class="slogo">-->
<!--        	<a href="--><?php //echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id']));?><!--" title="--><?php //echo $output['setting_config']['site_name']; ?><!--" class="store_name">--><?php //echo $output['store_info']['store_name']; ?><!--</a>-->
<!--            <br>-->
<!--            --><?php //if (!$output['store_info']['is_own_shop']) { ?>
<!--            <span class="all-rate">-->
<!--			<img src="--><?php //echo SHOP_TEMPLATES_URL;?><!----><?php //echo '/images/store_grade/'.$output['store_info']['grade_id'].'.png'; ?><!--" class="pngFix">-->
<!--              -->
<!--            </span>-->
<!--			--><?php //} ?>
<!--        </div>-->
<!--        <div class="pj_info">-->
<!--        	--><?php // foreach ($output['store_info']['store_credit'] as $value) {?>
<!--            <div class="shopdsr_item">-->
<!--                <div class="shopdsr_title">--><?php //echo $value['text'];?><!--</div>-->
<!--                <div class="shopdsr_score">--><?php //echo $value['credit'];?><!--</div>-->
<!--            </div>-->
<!--            --><?php //} ?>
<!--    	</div>-->
<!--        <div class="sub">-->
<!--          --><?php //include template('store/info');?>
<!--        </div>-->
<!--	</div>-->
<!--    <div class="heade_service_info">-->
<!--        <div class="displayed">-->
<!--            <i></i>Online Support-->
<!--            <div class="sub">-->
<!--                --><?php //include template('store/callcenter');?>
<!--            </div>-->
<!--        </div>-->
<!--   </div>-->
<!--    <div class="head-search-bar" id="search">-->
<!--        <form class="search-form" method="get" action="--><?php //echo SHOP_SITE_URL.'/';?><!--index.php" name="formSearch" id="formSearch">-->
<!--          <input name="act" id="search_act" value="search" type="hidden" />-->
<!--          <input type="hidden" name="keyword" value="--><?php //echo $_GET['inkeyword'];?><!--" />-->
<!--          <input name="inkeyword" id="inkeyword" type="text" class="input-text" value="--><?php //echo $_GET['inkeyword'];?><!--" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" placeholder="--><?php //echo $lang['nc_what_goods'];?><!--" />-->
<!--          <a href="javascript:void(0)" class="search-btn-all" nctype="search_in_shop"><span>Whole Site Search</span></a><a href="javascript:void(0)" class="search-btn-store" nctype="search_in_store"><span>Within Store Search</span></a>-->
<!--        </form>-->
<!--      </div>-->
<!--  </header>-->
<!--  </div>-->
<!-- PublicHeadLayout End -->
<!--<div id="store_decoration_content" class="background" style="--><?php //echo $output['decoration_background_style'];?><!--">-->
<?php //if(!empty($output['decoration_nav'])) {?>
<!--<style>--><?php //echo $output['decoration_nav']['style'];?><!--</style>-->
<?php //} ?>
<!--<div class="ncsl-nav">-->
<!--    --><?php //if(isset($output['decoration_banner'])) { ?>
<!--    <!-- 启用店铺装修 -->
<!--    --><?php //if($output['decoration_banner']['display'] == 'true') { ?>
<!--    <div id="decoration_banner" class="banner"> <img src="--><?php //echo $output['decoration_banner']['image_url'];?><!--" alt=""> </div>-->
<!--    --><?php //} ?>
<!--    --><?php //} else { ?>
<!--    <!-- 不启用店铺装修 -->
<!--    <div class="banner"><a href="--><?php //echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id']));?><!--" class="img">-->
<!--      --><?php //if(!empty($output['store_info']['store_banner'])){?>
<!--      <img src="--><?php //echo getStoreLogo($output['store_info']['store_banner'],'store_logo');?><!--" alt="--><?php //echo $output['store_info']['store_name']; ?><!--" title="--><?php //echo $output['store_info']['store_name']; ?><!--" class="pngFix">-->
<!--      --><?php //}else{?>
<!--      <div class="ncs-default-banner"></div>-->
<!--      --><?php //}?>
<!--      </a></div>-->
<!--    --><?php //} ?>
<!--    <div id="nav" class="ncs-nav">-->
<!--      <ul>-->
<!--	  --><?php //if(!empty($output['goods_class_list'])){?>
<!--        <li id="store_nav_class_button" class="normal ncs-nav-classes"> -->
<!--          <!-- 店铺商品分类 -->
<!--          <a href="javascript:;"><span>All Categories<i></i></span></a>-->
<!--          <ul id="store_nav_class_menu" class="classes-menu" style="display:none;">-->
<!--            --><?php //if(!empty($output['goods_class_list']) && is_array($output['goods_class_list'])){?>
<!--            --><?php //foreach($output['goods_class_list'] as $value){?>
<!--            <li class="store-nav-class-sub-menu"><a href="--><?php //echo urlShop('show_store', 'goods_all', array('store_id' => $output['store_info']['store_id'], 'stc_id' => $value['stc_id']));?><!--" title="--><?php //echo $value['stc_name'];?><!--"><i></i>--><?php //echo $value['stc_name'];?><!--</a>-->
<!--              --><?php //if(!empty($value['children']) && is_array($value['children'])){?>
<!--              <ul class="store-nav-class-menu-item" style="display:none;">-->
<!--                --><?php //foreach($value['children'] as $value1){?>
<!--                <li><a href="--><?php //echo urlShop('show_store', 'goods_all', array('store_id' => $output['store_info']['store_id'], 'stc_id' => $value1['stc_id']));?><!--" title="--><?php //echo $value1['stc_name'];?><!--"><i></i>--><?php //echo $value1['stc_name'];?><!--</a></li>-->
<!--                --><?php //}?>
<!--              </ul>-->
<!--              --><?php //}?>
<!--            </li>-->
<!--            --><?php //}?>
<!--            --><?php //}?>
<!--          </ul>-->
<!--        </li>-->
<!--		--><?php //}?>
<!--        <li class="--><?php //if($output['page'] == 'index'){?><!--active--><?php //}else{?><!--normal--><?php //}?><!--"><a href="--><?php //echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id']));?><!--"><span>--><?php //echo $lang['nc_store_index'];?><!--<i></i></span></a></li>-->
<!--        --><?php //if(!empty($output['store_navigation_list'])){
//      		foreach($output['store_navigation_list'] as $value){
//                if($value['sn_if_show']) {
//      			if($value['sn_url'] != ''){?>
<!--        <li class="--><?php //if($output['page'] == $value['sn_id']){?><!--active--><?php //}else{?><!--normal--><?php //}?><!--"><a href="--><?php //echo $value['sn_url']; ?><!--" --><?php //if($value['sn_new_open']){?><!--target="_blank"--><?php //}?><!--<span>--><?php //echo $value['sn_title'];?><!--<i></i></span></a></li>-->
<!--        --><?php //}else{ ?>
<!--        <li class="--><?php //if($output['page'] == $value['sn_id']){?><!--active--><?php //}else{?><!--normal--><?php //}?><!--"><a href="--><?php //echo urlShop('show_store', 'show_article', array('store_id' => $output['store_info']['store_id'], 'sn_id' => $value['sn_id']));?><!--"><span>--><?php //echo $value['sn_title'];?><!--<i></i></span></a></li>-->
<!--        --><?php //}}}} ?>
<!--        <li class="--><?php //if ($output['page'] == 'store_sns') {?><!--active--><?php //}else{?><!--normal--><?php //}?><!--"><a href="--><?php //echo urlShop('store_snshome', 'index', array('sid' => $output['store_info']['store_id']))?><!--"><span>店铺动态<i></i></span></a></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<script type="text/javascript">
var PRICE_FORMAT = '<?php echo $lang['currency'];?>%s';
$(function(){
		$('a[nctype="search_in_store"]').click(function(){
		if ($('#inkeyword').val() == '') {
			return false;
		}
		$('#search_act').val('show_store');
		$('<input type="hidden" value="<?php echo $output['store_info']['store_id'];?>" name="store_id" /> <input type="hidden" name="op" value="goods_all" />').appendTo("#formSearch");
		$('#formSearch').submit();
	});
	$('a[nctype="search_in_shop"]').click(function(){
		document.formSearch.keyword.value=document.formSearch.inkeyword.value;
		if ($('#inkeyword').val() == '') {
			return false;
		}
		$('#formSearch').submit();
	});
	$('#inkeyword').css("color","#999999");
  //店铺商品分类
    $('#store_nav_class_button').on('mouseover', function() {
        $('#store_nav_class_menu').show();
    });
    $('#store_nav_class_button').on('mouseout', function() {
        $('#store_nav_class_menu').hide();
    });
    $('.store-nav-class-sub-menu').on('mouseover', function() {
        $('.store-nav-class-menu-item').hide();
        $(this).children('.store-nav-class-menu-item').show();
    });
    $('.store-nav-class-sub-menu').on('mouseout', function() {
        $('.store-nav-class-menu-item').hide();
    });
});
  </script>