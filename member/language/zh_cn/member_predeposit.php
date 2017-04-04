<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 预存款功能公用
 */
$lang['predeposit_no_record']	 			= 'No Result Found';
$lang['predeposit_unavailable']	 			= 'Predeposit Not Availed';
$lang['predeposit_parameter_error']			= 'Arguments Error';//参数错误
$lang['predeposit_record_error']			= 'Info Error';//记录信息错误
$lang['predeposit_userrecord_error']		= 'Member Info Error';//会员信息错误
$lang['predeposit_payment']					= 'Payment Method';//支付方式
$lang['predeposit_addtime']					= 'Created Time';//创建时间
$lang['predeposit_apptime']					= 'Applied Time';//申请时间
$lang['predeposit_checktime']					= 'Review Time';//审核时间
$lang['predeposit_paytime']					= 'Paid Time';//付款时间
$lang['predeposit_addtime_to']				= 'To';//至
$lang['predeposit_trade_no']				= 'Ref No.';//交易号
$lang['predeposit_adminremark']				= 'Admin Comments';//管理员备注
$lang['predeposit_recordstate']				= 'Status';//记录状态
$lang['predeposit_paystate']				= 'Status';//状态
$lang['predeposit_backlist']				= 'Back';//返回列表
$lang['predeposit_pricetype']				= 'Type';//预存款类型
$lang['predeposit_pricetype_available']		= 'Available Balance';//可用金额
$lang['predeposit_pricetype_freeze']		= 'Freeze Amount';//冻结金额
$lang['predeposit_price']					= 'Amount';//金额
$lang['predeposit_payment_error']			= 'Wrong Payment';//支付方式错误
/**
 * 充值功能公用
 */
$lang['predeposit_rechargesn']					= 'Payment No.';//充值单号
$lang['predeposit_rechargewaitpaying']			= 'No Paid';//未支付
$lang['predeposit_rechargepaysuccess']			= 'Paid';//已支付
$lang['predeposit_rechargestate_auditing']		= 'Reviewing';//审核中
$lang['predeposit_rechargestate_completed']		= 'Done';//已完成
$lang['predeposit_rechargestate_closed']		= 'Closed';//已关闭
$lang['predeposit_recharge_price']				= 'Amount';//充值金额
$lang['predeposit_recharge_huikuanname']		= 'Depositor';//汇款人姓名
$lang['predeposit_recharge_huikuanbank']		= 'Deposit Bank';//汇款银行
$lang['predeposit_recharge_huikuandate']		= 'Date';//汇款日期
$lang['predeposit_recharge_memberremark']		= 'Comment';//会员备注
$lang['predeposit_recharge_success']			= 'Success';//充值成功
$lang['predeposit_recharge_fail']				= 'Failed';//充值失败
$lang['predeposit_recharge_pay']				= 'Pay';//支&nbsp;付
$lang['predeposit_recharge_view']				= 'View Order';//查看详单
$lang['predeposit_recharge_paydesc']			= 'Predeposit Order';//预存款充值订单
$lang['predeposit_recharge_pay_offline']		= 'Pending Confirm';//待确认
/**
 * 充值添加
 */
$lang['predeposit_recharge_add_pricenull_error']			= 'Input Amount';//请添加充值金额
$lang['predeposit_recharge_add_pricemin_error']				= 'Amount Should Be Bigger than 100₱';//充值金额为大于或者等于0.01的数字
/**
 * 充值信息删除
 */
$lang['predeposit_recharge_del_success']		= 'Deleted';//充值信息删除成功
$lang['predeposit_recharge_del_fail']		= 'Delete Failed';//充值信息删除失败
/**
 * 提现功能公用
 */
$lang['predeposit_cashsn']				= 'Apply Ref No.';//申请单号
$lang['predeposit_cashmanage']			= 'Cash-out Manage';//提现管理
$lang['predeposit_cashwaitpaying']		= 'Pending Payment';//等待支付
$lang['predeposit_cashpaysuccess']		= 'Paid';//支付成功
$lang['predeposit_cashstate_auditing']	= 'Reviewing';//审核中
$lang['predeposit_cashstate_completed']	= 'Done';//已完成
$lang['predeposit_cashstate_closed']		= 'Closed';//已关闭
$lang['predeposit_cash_price']				= 'Cash-out Amount';//提现金额
$lang['predeposit_cash_shoukuanname']			= 'Holder Name';//开户人姓名
$lang['predeposit_cash_shoukuanbank']			= 'Receiving Bank';//收款银行
$lang['predeposit_cash_shoukuanaccount']		= 'Account No.';//收款账号
$lang['predeposit_cash_shoukuanname_tip']	= //'强烈建议优先填写国有4大银行(中国银行、中国建设银行、中国工商银行和中国农业银行)<br/>请填写详细的开户银行分行名称，虚拟账户如支付宝、财付通填写“支付宝”、“财付通”即可';
$lang['predeposit_cash_shoukuanaccount_tip']	= //'银行账号或虚拟账号(支付宝、财付通等账号)';
$lang['predeposit_cash_shoukuanauser_tip']	= //'收款账号的开户人姓名';
$lang['predeposit_cash_shortprice_error']		= 'Insufficient Fund';//预存款金额不足
$lang['predeposit_cash_price_tip']				= 'Available Balance';//当前可用金额

$lang['predeposit_cash_availablereducedesc']	=  //'会员申请提现减少预存款金额';
$lang['predeposit_cash_freezeadddesc']	=  //'会员申请提现增加冻结预存款金额';
$lang['predeposit_cash_availableadddesc']	= // '会员删除提现增加预存款金额';
$lang['predeposit_cash_freezereducedesc']	=  //'会员删除提现减少冻结预存款金额';

/**
 * 提现添加
 */
$lang['predeposit_cash_add_shoukuannamenull_error']		= 'Recipient';//请填写收款人姓名
$lang['predeposit_cash_add_shoukuanbanknull_error']		= 'Bank Name';//请填写收款银行
$lang['predeposit_cash_add_pricemin_error']				= 'Amount Erro';//'提现金额为大于或者等于0.01的数字';
$lang['predeposit_cash_add_enough_error']				= 'Insufficient Balance';//'账户余额不足';
$lang['predeposit_cash_add_pricenull_error']			= 'Amount Withdraw';//请填写提现金额
$lang['predeposit_cash_add_shoukuanaccountnull_error']	= 'Receiving Account No.';//请填写收款账号
$lang['predeposit_cash_add_success']					= 'Application in Process';//'您的提现申请已成功提交，请等待系统处理';
$lang['predeposit_cash_add_fail']						= 'Info Error Withdraw';//提现信息添加失败
/**
 * 提现信息删除
 */
$lang['predeposit_cash_del_success']	= 'Deleted';//提现信息删除成功
$lang['predeposit_cash_del_fail']		= 'Failed to Delete';//提现信息删除失败
/**
 * 支付接口
 */
$lang['predeposit_payment_pay_fail']		= 'Cash-in Failed';//充值失败
$lang['predeposit_payment_pay_success']		= 'Payment Success';//充值成功，正在前往我的订单
$lang['predepositrechargedesc']	=  'Cash-in';//充值
/**
 * 出入明细 
 */
$lang['predeposit_log_stage'] 			= 'Type';//类型
$lang['predeposit_log_stage_recharge']	= 'Cash-in';//充值
$lang['predeposit_log_stage_cash']		= 'Cash-out';//提现
$lang['predeposit_log_stage_order']		= 'Order';//消费
$lang['predeposit_log_stage_artificial']= 'Modify';//手动修改
$lang['predeposit_log_stage_system']	= 'System';//系统
$lang['predeposit_log_stage_income']	= 'Income';//收入
$lang['predeposit_log_desc']			= 'Comment';//变更说明
?>