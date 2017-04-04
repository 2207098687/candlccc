<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 积分礼品功能公用
 */
$lang['member_pointorder_unavailable']	 		= '系统未开启积分或者积分兑换功能';
$lang['member_pointorder_parameter_error']		= 'Error Argument';//参数错误
$lang['member_pointorder_record_error']			= 'Error Info';//记录信息错误
$lang['member_pointorder_list_title']			= 'Redeem Records';//兑换记录
$lang['member_pointorder_info_title']			= 'Redeem Details';//兑换详细
$lang['member_pointorder_ordersn']				= 'Reference No.';//兑换单号
$lang['member_pointorder_payment']				= 'Payment Method';//支付方式
$lang['member_pointorder_orderstate']			= 'Status';//状态
$lang['member_pointorder_exchangepoints']		= 'Points';//积分
$lang['member_pointorder_shippingfee']			= 'Shipping（₱）';
$lang['member_pointorder_exchangepoints_shippingfee'] = 'Totally(Point)';
$lang['member_pointorder_orderstate_handle']	= 'Action';//交易操作
$lang['member_pointorder_addtime']				= 'Time';//兑换时间
$lang['member_pointorder_shipping_code']		= 'Tracking No.';//物流单号
$lang['member_pointorder_shipping_time']		= 'Dispatch Time';//发货时间
$lang['member_pointorder_exnum']				= 'Quantity';//数量
$lang['member_pointorder_gobacklist']			= 'Back';//返回列表
/**
 * 兑换信息状态
 */
$lang['member_pointorder_state_submit']				= 'Submitted';//已提交
$lang['member_pointorder_state_waitpay']			= 'Pending Payment';//待付款
$lang['member_pointorder_state_canceled']			= 'Cancelled';//已取消
$lang['member_pointorder_state_paid']				= 'Paid';//已付款
$lang['member_pointorder_state_confirmpay']			= 'Pending Confirm';//待确认
$lang['member_pointorder_state_confirmpaid']		= 'Confirmed Payment';//确认收款
$lang['member_pointorder_state_waitship']			= 'Pending Dispatch';//待发货
$lang['member_pointorder_state_shipped']			= 'Dispatched';//已发货
$lang['member_pointorder_state_waitreceiving']		= 'Pending Reception';//待收货
$lang['member_pointorder_state_finished']			= 'Completed';//已完成
$lang['member_pointorder_state_unknown']			= 'Unknown';//未知
/**
 * 兑换信息列表
 */
$lang['member_pointorder_cancel_tip1']				= 'Cancel Redeem Info';//取消兑换礼品信息
$lang['member_pointorder_cancel_tip2']				= 'Add Points';//增加积分
$lang['member_pointorder_cancel_success']			= 'Cancelled';//取消兑换成功
$lang['member_pointorder_cancel_fail']				= 'Not Cancelled';//取消兑换失败
$lang['member_pointorder_confirmreceiving_success']	= 'Received Order';//确认收货成功
$lang['member_pointorder_confirmreceiving_fail']	= 'Confirm Failed';//确认收货失败
$lang['member_pointorder_pay']						= 'Pay';//付款
$lang['member_pointorder_confirmreceiving']			= 'Receive Delivery';//确认收货
$lang['member_pointorder_confirmreceivingtip']		= 'Confirm You Have Received Product(s)?';//确认已经收到兑换礼品吗
$lang['member_pointorder_cancel_title']				= 'Cancel';//取消兑换
$lang['member_pointorder_cancel_confirmtip']		= 'Cancel Redemption';//确认取消兑换信息
$lang['member_pointorder_viewinfo']					= 'View Detail';//查看详细
/**
 * 兑换信息详细
 */
$lang['member_pointorder_info_ordersimple']		= 'Redeem Info';//兑换信息
$lang['member_pointorder_info_memberinfo']		= 'Account Info';//会员信息
$lang['member_pointorder_info_membername']		= 'User';//会员名称
$lang['member_pointorder_info_memberemail']		= 'Email';
$lang['member_pointorder_info_ordermessage']	= 'Comments';//买家留言
$lang['member_pointorder_info_paymentinfo']		= 'Payment Info';//支付信息
$lang['member_pointorder_info_paymenttime']		= 'Time';//支付时间
$lang['member_pointorder_info_paymentmessage']	= 'Message';//支付留言
$lang['member_pointorder_info_shipinfo']		= 'Shipping Info';//收货地址
$lang['member_pointorder_info_shipinfo_truename']= 'Recipient';//收货人
$lang['member_pointorder_info_shipinfo_areainfo']= 'Location';//所在地区
$lang['member_pointorder_info_shipinfo_zipcode']= 'Zip Code';//邮政编码
$lang['member_pointorder_info_shipinfo_telphone']= 'Landline';//电话号码
$lang['member_pointorder_info_shipinfo_mobphone']= 'Mobile';//手机号码
$lang['member_pointorder_info_shipinfo_address']= 'Detailed Address';//详细地址
$lang['member_pointorder_info_shipinfo_description']= 'Description';//发货描述
$lang['member_pointorder_info_prodinfo']			= 'Gift Info';//礼品信息
$lang['member_pointorder_info_prodinfo_exnum']		= 'Quantity';//兑换数量

$lang['pay_bank_user']			= 'Depositor';//汇款人姓名
$lang['pay_bank_bank']			= 'Receiving Bank';//汇入银行
$lang['pay_bank_account']		= 'Receiving Account';//汇款入账号
$lang['pay_bank_num']			= 'Amount';//汇款金额
$lang['pay_bank_date']			= 'Date';//汇款日期
$lang['pay_bank_extend']		= 'Other';//其它
$lang['pay_bank_order']			= 'Ref. No.';//汇款单号
$lang['pay_bank_bank_tips']		= '(Branch Name)';//'（需要填写详细的支行名称，如中国银行北京分行朝阳路支行）';
