<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 共有语言	
 */

/**
 * index
 */
$lang['payment_index_order']					= 'Order';//'订单';
$lang['payment_index_not_exists']				= 'Not Exists';//'不存在';
$lang['payment_index_pay_finish']				= 'Payed';//'已经支付完毕';
$lang['payment_index_add_info_fail']			= 'Addition Payment Method Failed';//'为订单添加支付方式信息失败';
$lang['payment_index_refresh_fail']				= 'Refresh Failed';//'刷新失败';
$lang['payment_index_sys_not_support']			= 'System Doesnt Support Method You Selected:';//'系统不支持选定的支付方式:';
$lang['payment_index_lose_file']				= 'Payment Interface Doesnt Exists';//'指定的支付接口不存在';
$lang['payment_index_spec_order_not_exists1']	= 'Payment Tracking No.';//'支付编号为';
$lang['payment_index_spec_order_not_exists2']	= 'Order Doesnt Exists';//'的订单并不存在';
$lang['payment_index_miss_pay_method']			= 'No Payment Method';//'缺少支付方式';
$lang['payment_index_miss_pay_method_data']		= 'Payment Method Data Lost';//'支付方式数据丢失';
$lang['payment_index_identify_fail']			= 'Authentication Failed';//'验证失败';
$lang['payment_index_order_ensure']				= 'Order Status Confirmed';//'订单状态已确认';
$lang['payment_index_deal_order_success']		= 'Successfully Make Payment, Redirecting to MY ORDER';//'订单支付成功，正在前往我的订单';
$lang['payment_index_deal_pdr_success']			= 'Successfully Cash-In to Your Account, Redirecting to MY CASH-INS';//'充值成功，正在前往我的充值列表;
$lang['payment_index_deal_order_fail']			= 'Process Timeout, Please Try Later';//'订单处理超时，请稍后再试';
$lang['payment_index_input_pay_info']			= 'Please Input Message';//'请输入支付留言';
$lang['payment_index_not_belong_you']			= 'Order Not Belong to You';
$lang['payment_index_pay_method_tip']			= 'e.g.: Account No., Time. You Can Also Pay Later -> MY ORDERS to Pay';//'如:转账的账号,时间等.您也可以稍后在用户中心→我的订单中进行付款';
$lang['payment_index_submit']					= 'Submit';//'提交';
$lang['payment_index_buyerinfo_error']			= 'Member Info Error';//'会员信息错误';
$lang['payment_index_password_error']			= 'Login Password Incorrect';//'会员登录密码错误';
$lang['payment_order_predeposit_logdesc']		= 'Spend and Less Available Balance';//'消费减少预存款可用金额';
$lang['payment_order_predepositfreeze_logdesc']	= 'Spend and Increase Frozen Amount';//'消费增加预存款冻结金额';
$lang['payment_predeposit_short_error']			= 'Insufficient Balance, Please Cash-In';//'预存款余额不足，请充值';
$lang['payment_refund_predeposit_logdesc']		= 'Refund Reduce Available Balance';//'退款减少预存款可用金额';
$lang['payment_pay_predeposit_logdesc']	= 'Refund Increase Available Balance';//退款增加预存款可用金额';
$lang['payment_refund_predepositfreeze_logdesc']	= 'Refund Reduce Frozen Amount';//'退款减少预存款冻结金额';