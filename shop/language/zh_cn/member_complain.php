<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');

/**
 * 导航菜单
 */
$lang['complain_manage_title'] = 'Complaint Management';//投诉管理
$lang['complain_submit'] = 'Deal with Complaints';//投诉处理

$lang['complain_state_new'] = 'New Complaints';//新投诉
$lang['complain_state_handle'] = 'Pending Arbitration';//待仲裁
$lang['complain_state_appeal'] = 'Pending Appeal';//待申诉
$lang['complain_state_talk'] = 'On Conversation';//'对话中';
$lang['complain_state_finish'] = 'Closed';//已关闭
$lang['complain_subject_list'] = 'Subject';//投诉主题

$lang['complain_pic'] = 'Image';//图片
$lang['complain_pic_view'] = 'Checkout Image';//查看图片
$lang['complain_pic_none'] = 'No Image';//暂无图片
$lang['complain_detail'] = 'Details';//投诉详情
$lang['complain_message'] = 'Message';//投诉信息
$lang['complain_evidence'] = 'Evidence';//投诉证据
$lang['complain_evidence_upload'] = 'Upload Proof';//上传投诉证据
$lang['complain_content'] = 'Content';
$lang['complain_accuser'] = 'Complainant';//投诉人
$lang['complain_accused'] = 'Shop Name';//被投诉店铺
$lang['complain_admin'] = 'Admin';//管理员
$lang['complain_unknow'] = 'Unknown';//未知
$lang['complain_datetime'] = 'Time';//投诉时间
$lang['complain_goods'] = 'Complained Product';//投诉的商品
$lang['complain_goods_name'] = 'Product';//商品名称
$lang['complain_goods_message'] = 'Product Info';//商品信息
$lang['complain_state'] = 'Status';//投诉状态
$lang['complain_progress'] = 'Progress';//'投诉进程';
$lang['complain_subject_content'] = 'Subject';//投诉主题
$lang['complain_subject_select'] = 'Select Subject';//选择投诉主题
$lang['complain_subject_desc'] = 'Description about Subject';//投诉主题描述
$lang['complain_subject_type'] = 'Complaint Type';//投诉主题类别
$lang['complain_subject_add'] = 'Add Subject';//添加主题
$lang['complain_appeal_detail'] = 'Appealing Details';//申诉详情
$lang['complain_appeal_message'] = 'Message';//申诉信息
$lang['complain_appeal_content'] = 'Content';//申诉内容
$lang['complain_appeal_datetime'] = 'Time';//申诉时间
$lang['complain_appeal_evidence'] = 'Appeal Evidence';//申诉证据
$lang['complain_appeal_evidence_upload'] = 'Upload Appeal Evidence';//上传申诉证据
$lang['complain_state_inprogress'] = 'In Process';//进行中
$lang['complain_state_finish'] = 'Closed';//已完成
$lang['complain_state_all'] = 'Select Status';//选择状态
$lang['final_handle_detail'] = 'Handle Details';//处理详情
$lang['final_handle_message'] = 'Results';//处理结果
$lang['final_handle_datetime'] = 'Close Date';//处理时间
$lang['order_detail'] = 'Order Details';//订单详情
$lang['order_message'] = 'Order Info';//订单信息
$lang['order_state'] = 'Order Status';//订单状态
$lang['order_sn'] = 'Order No.';//订单编号
$lang['order_datetime'] = 'Order Date';//下单时间
$lang['order_price'] = 'Total Amount';//订单总额
$lang['order_discount'] = 'Discount';//优惠打折
$lang['order_voucher_price'] = 'Used Coupon Value';//使用的代金券面额
$lang['order_voucher_sn'] = 'Coupon No.';//代金券编码
$lang['order_buyer_message'] = 'Customer Info';//买家信息
$lang['order_seller_message'] = 'Store Info';//店铺信息
$lang['order_shop_name'] = 'Store';//店铺名称
$lang['order_buyer_name'] = 'Customer';//买家名称
$lang['order_state_cancel'] = 'Concelled';//已取消
$lang['order_state_unpay'] = 'Unpaid';//未付款
$lang['order_state_payed'] = 'Paid';//已付款
$lang['order_state_send'] = 'Shipped';//已发货
$lang['order_state_receive'] = 'Received';//已收货
$lang['order_state_commit'] = 'Submitted';//已提交
$lang['order_state_verify'] = 'Confirmed';//已确认

$lang['complain_add_pic'] = 'Additional Evidence';//补充证据

/**
 * 提示信息
 */
$lang['confirm_delete'] = 'Want to Delete?';//'确认删除?';
$lang['complain_content_error'] = 'Content Should Be Neither Empty Nor More Than 100 Words';//投诉内容不能为空且必须小于100个字符
$lang['appeal_message_error'] = 'Content Should Be Neither Empty Nor More Than 100 Words';//投诉内容不能为空且必须小于100个字符
$lang['complain_pic_error'] = 'Image Types Must Be jpg/jpeg/gif/png';//图片必须是jpg/jpeg/gif/png格式
$lang['complain_subject_content_error'] = 'Subject Should Be Neither Empty Nor More Than 50 Words';//投诉主题不能为空且必须小于50个字符
$lang['complain_subject_desc_error'] = 'Subject Description Should Be Neither Empty Nor More Than 100 Words';//'投诉主题描述不能为空且必须小于100个字符';
$lang['complain_subject_type_error'] = 'Unknown Complaint Type';//'未知投诉主题类型';
$lang['complain_subject_error'] = 'Subject Doenst Exists';//投诉主题不存在请联系管理员
$lang['complain_subject_add_success'] = 'Subject Added';//投诉主题添加成功
$lang['complain_subject_add_fail'] = 'Subject Addition Failed';//投诉主题添加失败
$lang['complain_subject_delete_success'] = 'Subject Deleted';//投诉主题删除成功
$lang['complain_subject_delete_fail'] = 'Subject Removal Failed';//'投诉主题删除失败';
$lang['complain_goods_select'] = 'Select Problem Product';//选择要投诉的商品
$lang['complain_submit_success'] = 'Submitted, Waiting for Confirmation';//投诉提交成功,请等待系统审核
$lang['appeal_submit_success'] = 'Appeal Submitted';//申诉提交成功
$lang['handle_submit_success'] = 'You Have Submitted Arbitration';//您成功申请仲裁,请等待管理员裁决
$lang['talk_detail'] = 'Conversation Details';//对话详情
$lang['talk_null'] = 'Should Not Be Empty';//对话不能为空
$lang['talk_none'] = 'No Dialogue Yet';//目前没有对话
$lang['talk_list'] = 'Records';//对话记录
$lang['talk_send'] = 'Release Conversation';//发布对话
$lang['talk_refresh'] = 'Refresh Conversation';//刷新对话
$lang['talk_send_success'] = 'Sent';//对话发送成功
$lang['talk_send_fail'] = 'Failed to Send';//对话发送失败
$lang['talk_forbit_message'] =  '<The Conversation Was Banned>';//'<该对话被管理员屏蔽>';
$lang['handle_confirm_message'] = 'Submit Arbitration, Admin Will Review and Give Result';//确认提交仲裁,提交后管理员将做出裁决
$lang['handle_submit'] = 'Submit Arbitration';//'提交仲裁';
$lang['complain_repeat'] = 'You Have Submitted Complaints, Please Wait for Result';//您已经投诉了该订单的商品请等待处理
$lang['complain_time_limit'] = 'Your Order Complaint Period Has Elapsed';//'您的订单已经超出投诉时限';
$lang['complain_cancel_confirm'] = 'Really Cancel Complaint?';//确认取消该投诉
$lang['complain_cancel_success'] = 'Cancelled';//投诉取消成功
$lang['complain_cancel_fail'] = 'Cancellation Failed';//投诉取消失败
$lang['max_fifty_chars'] = 'Not More Than 50 Words';//最多50个字符


/**
 * 文本
 */
$lang['complain_text_detail'] = 'Check';//'查看';
$lang['complain_text_submit'] = 'Submit';//'提交';
$lang['complain_text_pic'] = 'Image';
$lang['complain_text_num'] = 'Quantity';
$lang['complain_text_price'] = 'Unit Price';//商品单价
$lang['complain_text_problem'] = 'Problem Details';//问题描述
$lang['complain_text_say'] = 'Say';//说s