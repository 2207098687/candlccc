<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 共有语言
 */

$lang['refund_add']	= 'Refund';//退款
$lang['refund_order_amount']	= 'Amount';//订单金额
$lang['refund_refund_amount']	= 'Refunded';//已退金额
$lang['refund_order_refund']	= 'Refund Amount';//退款金额
$lang['refund_pay_refund']	= 'Refundable';//可退金额
$lang['refund_message']	= 'Memo';//备注信息
$lang['refund_message_null']	= 'Input Something pls';//备注信息不能为空
$lang['refund_add_time']	= 'Added Time';//添加时间
$lang['refund_handle_desc']	= 'Action Description';//操作描述
$lang['refund_order_ordersn']		= 'Order No.';//订单编号
$lang['refund_order_refundsn']		= 'Refund No.';//退款编号
$lang['refund_order_add_time']		= 'Apply Time';
$lang['refund_order_buyer']			= 'Customer';//买家会员名
$lang['refund_pay_min']	= 'Minimum';//最小金额

$lang['refund_seller_message']	= "Seller's Comments";//商家备注
$lang['refund_state']	= 'Status';//审核状态
$lang['refund_state_confirm']	= 'Pending';//待审核
$lang['refund_state_yes']	= 'Pass';//同意
$lang['refund_state_no']	= 'Reject';//不同意
$lang['refund_buyer_desc']	= 'Each Item Only Allows Refund/Return Once. Refunded Amount Only Will Be Credit to Your Balance on coolandless.com';//'每种商品只能退款或退货一次，建议与商家沟通后认真填写。如果同意退货，请及时发货并联系商家收货，平台确认后会将金额以预存款的形式返还给你。';

$lang['refund_seller_confirm']	= 'Agree?';//是否同意;
$lang['refund_seller_confirm_null']	= 'Pls Choose';//请选择是否同意
$lang['refund_seller_desc']	= 'Only Once';//只能提交一次，请认真选择。

$lang['refund_buyer_message']	= 'Reasons';//退款原因
$lang['refund_buyer_add_time']	= 'Apply Time';
$lang['refund_buyer_message_null']	= 'No Empty, Pls Fill up';//退款原因不能为空
$lang['refund_store_name']			= 'Store';//店铺名

$lang['return_order_return']	= 'Return Quantity';//退货数量
$lang['return_add_return']	= 'Returnable';//可退数量
$lang['return_number']	= 'Current Return';//本次退货
$lang['return_message']	= 'Memo';//备注信息
$lang['return_message_null']	= 'No Empty Memo';//备注信息不能为空
$lang['return_add_time']	= 'Added Time';//添加时间
$lang['return_order_ordersn']		= 'Order No.';//订单编号
$lang['return_order_returnsn']		= 'Return No.';//退货编号
$lang['return_order_add_time']		= 'Apply Time';
$lang['return_order_buyer']			= 'Customer';//买家会员名
$lang['return_goods_name']	= 'Product';//商品名称
$lang['return_number_min']	= 'Minimum';//最小数量
$lang['return_number_max']	= 'Maximum';//最大数量

$lang['return_seller_message']	= 'Seller Comment';//商家备注
$lang['return_state']	= 'Status';//审核状态
$lang['return_seller_confirm']	= 'Agree?';//是否同意
$lang['return_seller_confirm_null']	= '请选择是否同意';
$lang['return_state_confirm']	= '待审核';
$lang['return_state_yes']	= '同意';
$lang['return_state_no']	= '不同意';
$lang['return_store_name']			= '店铺名';
$lang['return_buyer_message']	= '退货原因';

$lang['order_sn']		= 'Order';//订单
$lang['order_max_day'] = 'Exceeding';//超过
$lang['order_max_day_cancel'] = 'Days Unpaid, System will Cancel Order.';//天未付款，系统自动取消订单。
$lang['order_max_day_confirm'] = 'Days Still No Confirm Reception. System Will Auto Complete the Order';//天未收货，系统自动完成订单。
$lang['order_day_refund'] = 'Days No Apply Refund/Return, System Take It As Agree';//天未处理退款退货申请，按同意处理。\'

$lang['order_refund_freeze_predeposit'] = 'Refund Lower Account Frozon Balance';//退款减少预存款冻结金额
$lang['order_refund_add_predeposit'] = 'Refund Lower Account Available Balance';//'退款增加预存款可用金额';
$lang['order_completed_freeze_predeposit'] = 'Confirm Reception Lower Frozen Balance';//确认收货减少预存款冻结金额

$lang['order_completed'] = 'System Auto Completed Order';//'系统自动收货完成订单。';