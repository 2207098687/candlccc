<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 积分礼品兑换功能公用
 */
$lang['pointcart_unavailable']	 		= 'Points System Is Inactive';//'系统未开启积分或者积分兑换功能';
$lang['pointcart_parameter_error']		= 'Wrong Arguments';//'参数错误';
$lang['pointcart_record_error']			= 'Records Info Error';//'记录信息错误';
$lang['pointcart_unlogin_error']		= 'Please Login First';//'请您先进行登录';
$lang['pointcart_goodsname']			= 'Gift Item';//'礼品名称';
$lang['pointcart_exchangepoint']		= 'Exchange Points';//'兑换积分';
$lang['pointcart_exchangenum']			= 'Quantity';//'兑换数量';
$lang['pointcart_pointoneall']			= 'Point Subtotal';//'积分小计';
$lang['pointcart_ensure_order']			= 'Confirm Redemption Info';//'确认兑换清单';
$lang['pointcart_ensure_info']			= 'Confirm Shipping Details';//'确认收货人资料';
$lang['pointcart_exchange_finish']		= 'Successfully Redeemed';//'兑换完成';
$lang['pointcart_cart_allpoints']		= 'Points Needed';//'所需总积分';
$lang['pointcart_shipfee']				= 'Shipping Fee';//'运费';
$lang['pointcart_step2_prder_trans_to']	= 'Ship to';//'寄送至';
$lang['pointcart_step2_prder_trans_receive']	= 'Recipient';//'收货人';
$lang['pointcart_buyer_error']			= 'Buyer Info Error';//'买家信息错误';
/**
 * 购物车
 */
$lang['pointcart_cart_addcart_fail']		= 'Redemption Failed';//'兑换失败';
$lang['pointcart_cart_addcart_willbe']		= 'Points Redemption for Gifts Will Be Started';//'积分礼品兑换活动即将开始';
$lang['pointcart_cart_addcart_end']			= 'Points Redemption for Gifts Is Finished';//'积分礼品兑换活动已经结束';
$lang['pointcart_cart_addcart_pointshort']	= 'Insufficient Points, Please Choose Other Items';//'积分不足,请选择其他礼品';
$lang['pointcart_cart_addcart_prodexists']	= 'You Had Redeemed for the Item';//'您已经兑换过该礼品';
$lang['pointcart_cart_modcart_fail']		= 'Modification Failed';//'修改失败';
$lang['pointcart_cart_chooseprod_title']	= 'Gift Selected';//'已选择的兑换礼品';
$lang['pointcart_cart_handle']				= 'Action';//'操作';
$lang['pointcart_cart_reduse']				= 'Less';//'减少';
$lang['pointcart_cart_increase']			= 'Add';//'增加';
$lang['pointcart_cart_del']					= 'Remove';//'删除';
$lang['pointcart_cart_submit']				= 'Confirm Redeem';//'确认兑换';
$lang['pointcart_cart_continue']			= 'Continue to Redeem';//'继续兑换';
$lang['pointcart_cart_null']				= 'No Gift Selected';//'您还没有选择兑换礼品';
$lang['pointcart_cart_exchangenow']			= 'Redeem Now';//'马上去兑换';
$lang['pointcart_cart_exchanged_list']		= 'Check History';// '查看已兑换信息';
/**
 * step1
 */
$lang['pointcart_step1_receiver_address']	= 'Shipping Address';//'收货人地址';
$lang['pointcart_step1_manage_receiver_address']	= 'Manage Shipping Address';//'管理收货人地址';
$lang['pointcart_step1_addnewaddress_submit']	= 'Save Shipping Address';//'保存收货人地址';
$lang['pointcart_step1_receiver_name']		= 'Recipient';//'收货人姓名';
$lang['pointcart_step1_phone']				= 'Phone Number';//'电话';
$lang['pointcart_step1_new_address']		= 'Use New Address';//'使用新的收货地址';
$lang['pointcart_step1_input_true_name']	= 'Please Input Correct Name';//请填写真实姓名';
$lang['pointcart_step1_area']				= 'Area';//'所在地区';
$lang['pointcart_step1_edit']				= 'Edit';//'编辑';
$lang['pointcart_step1_please_choose']		= 'Please Select';//'请选择';
$lang['pointcart_step1_choose_area']		= 'Please Select Area';//'请选择所在地区';
$lang['pointcart_step1_whole_address']		= 'Detailed Address';//'详细地址';
$lang['pointcart_step1_true_address']		= 'Please Input Correct Address, No Need to Repeat Above City/District Info';//请填写真实地址，不需要重复填写所在地区';
$lang['pointcart_step1_zipcode']			= 'Zip Code';// '邮政编码';
$lang['pointcart_step1_zipcode_tip']		= 'Input Zip Code';//'请填写邮政编码';
$lang['pointcart_step1_zipcode_error']		= 'Zip Code Should be 4-6 Digits';//'邮政编码由6位数字构成';
$lang['pointcart_step1_phone_num']			= 'Landline';//'电话号码';
$lang['pointcart_step1_telphone']			= 'At Least One of Landline or Mobile Number';//电话号码和手机号码请至少填写一个';
$lang['pointcart_step1_mobile_num']			= 'Mobile';//'手机号码';
$lang['pointcart_step1_auto_save']			= 'Auto Save Shipping Address';//'自动保存收货地址';
$lang['pointcart_step1_auto_saved']			= 'If Selected, Automatically Save Shipping Info';//'选择后该地址将会保存到您的收货地址列表';
$lang['pointcart_step1_message']			= 'Message';//'备注留言';
$lang['pointcart_step1_message_advice']		= 'Optional, You Can Leave A Message to Us';//'选填，可以写下您对礼品的需求';
$lang['pointcart_step1_submit']				= 'Completed';//'兑换完成';
$lang['pointcart_step1_chooseprod']			= 'Gift Selected';//'已选礼品';
$lang['pointcart_step1_order_wrong1']		= 'Sorry, Your Info Has';//'很抱歉，您填写的订单信息中有';
$lang['pointcart_step1_order_wrong2']		= 'Errors in Red Italic Font, Correct and Submit Again!';//'个错误(如红色斜体部分所示)，请检查并修正后再提交！';
$lang['pointcart_step1_input_address']		= 'Please Input Correct Detailed Shipping Info';//'请如实填写收货人详细地址';
$lang['pointcart_step1_input_receiver']		= 'Complete Recipient Name';// '请如实填写您的收货人姓名';
$lang['pointcart_step1_phone_format']		= 'Phone Number Should Be at Least 7 digits';//'电话号码由数字、加号、减号、空格、括号组成,并不能少于6位';
$lang['pointcart_step1_wrong_mobile']		= '11 Digits for Mobile Number';//'手机号码只能是数字,并且不能少于6位';

$lang['pointcart_step1_goods_info']					= 'Redeemed Item Info';//'兑换商品信息';
$lang['pointcart_step1_goods_point']				= 'Points Needed';//'兑换所需积分';
$lang['pointcart_step1_goods_num']					= 'Quantity';//'兑换数量';
$lang['pointcart_step1_return_list']				= 'Back to Redemption List';//'返回兑换列表';
/**
 * step2
 */
$lang['pointcart_step2_fail']				= 'Redemption Failed';//'兑换操作失败';
$lang['pointcart_step2_exchange_success']	= 'Redeemed Successfully';//'兑换成功！';
$lang['pointcart_step2_order_created']		= 'Your Redemption Has Been Created';//'您的兑换订单已成功生成';
$lang['pointcart_step2_order_sn']			= 'Order No.';//'兑换单号';
$lang['pointcart_step2_order_allpoints']	= 'Redemption Points';//'兑换积分';s
$lang['pointcart_step2_view_order']			= 'Check Details';//'查看详单';
$lang['pointcart_step2_choose_method_to_pay']= 'Select Payment Method';//'选择支付方式';
$lang['pointcart_step2_paymessage']			= 'Payment Message';//'支付留言';
$lang['pointcart_step2_choose_pay_method']	= 'Select Payment Method';//'请选择支付方式';
$lang['pointcart_step2_ensure_pay']			= 'Pay Now';//'确认支付';
$lang['pointcart_step2_orderinfo_title']	= 'Redemption Info';// '兑换订单信息如下';
$lang['pointcart_step2_pay_online']			= 'Online Payment';//'线上支付';
$lang['pointcart_step2_pay_offline']		= 'Offline Payment';//'线下支付';

$lang['pointcart_step2_paymentnull']		= 'Sorry, No Suitable Payment Method.';//'抱歉，暂时没有符合条件的支付方式，请联系客服进行后续购买流程';


$lang['pointcart_step2_paymessage_nullerror']	= 'Input Deposit Info';//'请填写汇款信息';
$lang['pay_bank_user']			= 'Depositor';//'汇款人姓名';
$lang['pay_bank_bank']			= 'From Bank';//'汇入银行';
$lang['pay_bank_account']		= 'From Account';//'汇款入账号';
$lang['pay_bank_num']			= 'Amount';//'汇款金额';
$lang['pay_bank_date']			= 'Date';//'汇款日期';
$lang['pay_bank_extend']		= 'Other';//'其它';
$lang['pay_bank_order']			= 'Deposit Tracking No.';//'汇款单号';

/**
 * step3
 */
$lang['pointcart_step3_paymenterror']	= 'Payment Error';//'支付方式错误';
$lang['pointcart_step3_choosepayment']	= 'Please Select Payment Method';//'请选择支付方式';
$lang['pointcart_step3_paysuccess']		= 'Paid Successfully';//'兑换信息支付成功';
$lang['pointcart_step3_payfail']		= 'Redemption Failed';//'兑换信息支付失败';
$lang['pointcart_step3_predepositreduce_logdesc']= 'Redemption Reduce Available Balance.';//'积分兑换减少预存款可用金额';