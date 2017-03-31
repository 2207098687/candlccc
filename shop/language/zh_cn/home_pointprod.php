<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 积分礼品功能公用
 */
$lang['pointshop_unavailable']	 		= 'Points System Is Inactive';//'系统未开启积分中心或者积分功能';
$lang['pointprod_unavailable']	 		= 'Points Redemption System Is Inactive';//'系统未开启积分兑换功能';
$lang['pointprod_parameter_error']		= 'Wrong Arguments';//'参数错误';
$lang['pointprod_record_error']			= 'Records Info Error';//'记录信息错误';
$lang['pointprod_userrecord_error']		= 'User Info Error';//'用户信息错误';
$lang['pointprod_goodsrecord_error']	= 'Gift Info Error';//'礼品信息错误';
$lang['pointprod_list_title']	 		= 'Gifts';//'积分礼品';
$lang['pointprod_goodsprice']	 		= 'Price';//'价格';
$lang['pointprod_willbe']	 			= 'Will be Starting';//'即将开始';
$lang['pointprod_exchange']	 			= 'I Want to Redeem';//'我要兑换';
$lang['pointprod_exchange_end']	 		= 'Redemption Finished';//'兑换结束';
$lang['pointprod_exchange_point']	 	= 'Redemption Points';//'兑换积分';
$lang['pointprod_pointprod_unit']	 	= 'Unit';//'个';
$lang['pointprod_salenum']	 	        = 'Quantity';//'兑换数量';
$lang['pointprod_pointslog']	 	    = 'Point Earn History';//'积分获得明细';

$lang['pointprod_ad_text1']	 	    = 'Super Value Redemption';//'超值换购';
$lang['pointprod_ad_text2']	 	    = 'More Gift More Supprise<br/>Free Using Your Points';//'商城礼品惊喜多<br/>会员积分免费换';

$lang['pointprod_pointsname']	 	    = 'Redemption Points';//'积分兑换';
/**
 * 积分列表
 */
$lang['pointprod_list_hello_tip1']	 		= 'Welcome';//'欢迎您';
$lang['pointprod_list_hello_tip2']	 		= 'Your Points';//'您的积分是';
$lang['pointprod_list_hello_tip3']	 		= 'Redeemed Gifts';//'已兑换礼品';
$lang['pointprod_list_hello_tip5']	 		= 'Login to View Points';//'登录显示积分情况';
$lang['pointprod_list_hello_login']	 		= 'Login';// '会员登录';
$lang['pointprod_list_hello_pointrule']	 	= 'Point Policy';//'积分细则';
$lang['pointprod_list_hello_pointexrule']	= 'How to Redeem';//'积分兑换说明';
$lang['pointprod_list_more']	 	        = 'More>>';
$lang['pointprod_list_top3']	 	        = 'Redemption Chart';//'兑换排行榜';
$lang['pointprod_list_null']				= 'No Gift Yet';//'暂无礼品';
/**
 * 积分详细
 */
$lang['pointprod_info_needpoint']	 			= 'Points Needed';//'兑换所需';s
$lang['pointprod_info_mypoint']	 				= 'My Points';//'我的积分';
$lang['pointprod_info_goods_serial']			= 'Gift Number';//'礼品编号';
$lang['pointprod_info_goods_limittime']			= 'Redemption Time';//'兑换时间';
$lang['pointprod_info_goods_limittime_to']			= 'to';// '至';
$lang['pointprod_info_goods_lasttime']			= 'Remaining Time';//'本次兑换时间还剩';
$lang['pointprod_info_goods_lasttime_day']		= 'Days';//'天';
$lang['pointprod_info_goods_lasttime_hour']		= 'Hours';//'时';
$lang['pointprod_info_goods_lasttime_mins']		= 'Minutes';//'分';
$lang['pointprod_info_goods_lasttime_secs']		= 'Seconds';//'秒';
$lang['pointprod_info_goods_lastnum']			= 'In Stock';//'剩余数量';
$lang['pointprod_info_goods_exchangenum']		= 'Redemption Quantity';//'兑换数量';
$lang['pointprod_info_goods_limitnum_tip1']		= 'Limited Offer One Item Each User';//'此礼品每人限兑';
$lang['pointprod_info_goods_share']				= 'Share Info with Your Friends';//'分享该礼品地址给朋友';
$lang['pointprod_info_goods_copyurl']			= 'Copy Address';//'拷贝地址';
$lang['pointprod_info_goods_copyurl_error'] 	= 'Refused by Browser, Input "about:config" in the URL Bar and Hit Enter. Then, Set "signed.applets.codebase_principal_support" to TRUE';//"被浏览器拒绝！请在浏览器地址栏输入about:config并回车,然后将signed.applets.codebase_principal_support设置为true";
$lang['pointprod_info_goods_collectionurl']		= 'Add the URL to';//'收藏该礼品地址到';
$lang['pointprod_info_goods_description']		= 'Details about Gift';//'礼品介绍';
$lang['pointprod_info_goods_exchangelist']		= 'Redemption History';//'礼品兑换记录';
$lang['pointprod_info_goods_alreadyexchange']	= 'Redeemed';//'兑换了';
$lang['pointprod_info_goods_exnummaxlimit_error']= 'Redemption Volume Exceeded Max Allowed Limit';//'兑换数量不能大于限兑数量';
$lang['pointprod_info_goods_exnummaxlast_error'] = 'Redemption Volume Exceeded Max Remaining Number';//'兑换数量不能大于剩余数量';
$lang['pointprod_info_goods_urlcopy_succcess'] = 'Copied Successfully';//'复制到剪贴板成功!!';
$lang['pointprod_info_goods_urlcopy_fail']	= 'Browser Baned Some Settings';//'被浏览器禁止了相关设置';
$lang['pointprod_info_goods_urlcopy_fail1']	= 'Input in URL Bar';//'请在浏览器地址栏输入';
$lang['pointprod_info_goods_urlcopy_fail2']	= 'Then, Enter';//'并回车';
$lang['pointprod_info_goods_urlcopy_fail3']	= 'Then,Change';//'然后将'
$lang['pointprod_info_goods_urlcopy_fail4']	= 'to';// '设置为';
$lang['pointprod_info_goods_share_to']			= 'Share on';//'分享到：';