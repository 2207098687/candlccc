<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 * 共有语言
 */

/**
 * 收货人信息
 */
$lang['member_address_receiver_name']	= 'Recipient';
$lang['member_address_location']		= 'Location';//'所在地区';
$lang['member_address_address']			= 'Detailed Address';//'街道地址';
$lang['member_address_zipcode']			= 'Zip Code';//'邮编';
$lang['member_address_phone']			= 'Landline';//'电话';
$lang['member_address_mobile']			= 'Mobile';//'手机';
$lang['member_address_edit_address']	= 'Edit Address';//'编辑地址';
$lang['member_address_no_address']		= 'You No Shipping Address Yet';//'您没有添加收货地址';
$lang['member_address_input_name']		= 'Your Real Name';//'请填写您的真实姓名';
$lang['member_address_please_choose']	= 'Please Select';//'请选择';
$lang['member_address_not_repeat']		= 'No Need to Repeat Area Info';//'不必重复填写地区';
$lang['member_address_phone_num']		= 'Phone Number';//'电话号码';
$lang['member_address_area_num']		= 'Area Code';//'区号';
$lang['member_address_sub_phone']		= 'Extension';//'分机';
$lang['member_address_phone']		    = 'Phone Number';//'电话';
$lang['member_address_input_receiver']	= 'Please Enter Recipient Name';//'请填写收货人姓名';
$lang['member_address_choose_location']	= 'Please Select';//'请选择所在地区';
$lang['member_address_input_address']	= 'Please Fill up More Details';//'请填写详细地址';
$lang['member_address_zip_code']		= 'Zip Code Must be 4-6 digits';//'邮政编码由6位数字构成';
$lang['member_address_phone_and_mobile']= 'At Least Provide Landline or Mobile Number';//'固定电话和手机请至少填写一项.';
$lang['member_address_phone_rule']		= 'At Least 7 Digits for Landline Number';//'电话号码由数字、加号、减号、空格、括号组成,并不能少于6位. ';
$lang['member_address_wrong_mobile']	= 'Incorrect Mobile Number'; //'错误的手机号码';


/**
 * 设置发货地址
 */
$lang['store_daddress_wrong_argument']	= 'Wrong Arguments';//'参数不正确';
$lang['store_daddress_receiver_null']	= 'Consignor is empty';//'发货人不能为空';
$lang['store_daddress_wrong_area']		= 'Wrong Selected Area Info';//'所在地区选择不正确';
$lang['store_daddress_area_null']		= 'Wrong Area Info';//'所在地区信息不能为空';
$lang['store_daddress_address_null']	= 'Detailed address should not be empty.';//'详细地址不能为空';
$lang['store_daddress_modify_fail']		= 'Change Address Failed';//'修改地址失败';
$lang['store_daddress_add_fail']		= 'Addition of New Address Failed';//'新增地址失败';
$lang['store_daddress_del_fail']		= 'Deletion of Address Failed';//'删除地址失败';
$lang['store_daddress_del_succ']		= 'Deleted';//'删除成功';
$lang['store_daddress_new_address']		= 'Add New Address';//'新增地址';
$lang['store_daddress_deliver_address']	= 'Consignor Address';//'发货地址';
$lang['store_daddress_default']			= 'Default';//'默认';
$lang['store_daddress_receiver_name']	= 'Contact Person';//'联系人';
$lang['store_daddress_location']		= 'Area';//'所在地区';
$lang['store_daddress_address']			= 'Detailed Address';//'街道地址';
$lang['store_daddress_zipcode']			= 'Zip Code';//'邮编';
$lang['store_daddress_phone']			= 'Landline';//'电话';
$lang['store_daddress_mobile']			= 'Mobile';//'手机';
$lang['store_daddress_company']			= 'Company';//'公司';
$lang['store_daddress_content']			= 'Comment';//'备注';
$lang['store_daddress_edit_address']	= 'Edit Address';//'编辑地址';
$lang['store_daddress_no_address']		= 'No Address Found';//'您没有添加发货地址';
$lang['store_daddress_input_name']		= 'Your Real Name';//'请填写您的真实姓名';
$lang['store_daddress_please_choose']	= 'Please Select';//'请选择';
$lang['store_daddress_not_repeat']		= 'No Need to Repeat Area Info';//不必重复填写地区';
$lang['store_daddress_phone_num']		= 'Phone Number';//'电话';
$lang['store_daddress_area_num']		= 'Area Code';//'区号';
$lang['store_daddress_sub_phone']		= 'Extension Number';//'分机';
$lang['store_daddress_mobile_num']		= 'Mobile Number';// '手机号码';
$lang['store_daddress_input_receiver']	= 'Contact Person';//'请填写联系人姓名';
$lang['store_daddress_choose_location']	= 'Select Your City/District';//'请选择所在地区';
$lang['store_daddress_input_address']	= 'Your Detailed Address';//'请填写街道地址';
$lang['store_daddress_zip_code']		= 'Zip Code 4-6 Digits';//'邮政编码由6位数字构成';
$lang['store_daddress_phone']	        = 'Phone Number';//'电话';
$lang['store_daddress_phone_rule']		= '6 Digits Phone Number';//'电话号码由数字、加号、减号、空格、括号组成,并不能少于6位. ';
$lang['store_daddress_wrong_mobile']	= 'Improper Number';//'错误的手机号码';

/**
 * 设置物流公司
 */
$lang['store_deliver_express_title']	= 'Shipping Company';//'物流公司';

/**
 * 发货
 */
$lang['store_deliver_order_state_send']		= 'Shipped';//'已发货';
$lang['store_deliver_order_state_receive']	= 'To Be Received';//'待收货';
// $lang['store_deliver_modfiy_address']		= '修改收货信息';
$lang['store_deliver_select_daddress']		= 'Select Consignor Address';//'选择发货地址';
$lang['store_deliver_select_ather_daddress']= 'Select Other Address';//'选择其它发货地址';
$lang['store_deliver_daddress_list']		= 'Address Pool';//'地址库';
$lang['store_deliver_default_express']		= 'Default Shipping Company';//'默认物流公司';
$lang['store_deliver_buyer_name']			= 'Buyer'; //'买家';
$lang['store_deliver_buyer_address']		= 'Shipping Address'; //'收货地址';
$lang['store_deliver_shipping_amount']		= 'Shipping Fee';//'运费';
$lang['store_deliver_modify_info']			= 'Modify Info';//'编辑发货';
$lang['store_deliver_first_step']			= 'Step 01';//'第一步';
$lang['store_deliver_second_step']			= 'Step 02'; //'第二步';
$lang['store_deliver_third_step']			= 'Step 03';//'第三步';
$lang['store_deliver_confirm_trade']		= 'Confirm Shipping Address & Transaction Details';//'确认收货信息及交易详情';
$lang['store_deliver_forget']				= 'Leave A Message';//'发货备忘';
$lang['store_deliver_forget_tips']			= 'Memo for Seller regarding Shipping';//'您可以输入一些发货备忘信息（仅卖家自己可见）';
$lang['store_deliver_buyer_adress']			= 'Shipping Info';//'收货人信息';
$lang['store_deliver_confirm_daddress']		= 'Confirm Seller Address';//'确认发货信息';
$lang['store_deliver_my_daddress']			= 'My Address';//'我的发货信息';
$lang['store_deliver_none_set']				= 'No Existing Shipper Address, Go to ADDRESS SETTING > ADDRESS POOL';//'还未设置发货地址，请进入发货设置 > 地址库中添加';
$lang['store_deliver_add_daddress']			= 'Add Shipper Address';//'添加发货地址';
$lang['store_deliver_express_select']		= 'Select Shipping Company';//'选择物流服务';
$lang['store_deliver_express_note']			= 'You can set shipper address-><a href="index.php?act=store_deliver_set&op=express" target="_parent" >Default Shipping Company</a>" Add or Modify Default Shipping Company.Free Shipping, Click below<span class="red">[No Need Shipping]</span>Tab and Manage.';//'您可以通过"发货设置-><a href="index.php?act=store_deliver_set&op=express" target="_parent" >默认物流公司</a>"添加或修改常用货运物流。免运可切换下方<span class="red">[无需物流运输服务]</span>选项卡并操作。';
$lang['store_deliver_express_zx']			= 'Contact Shipping Company by Yourself.';//'自行联系物流公司';
$lang['store_deliver_express_wx']			= 'No Shipping Needed';//'无需物流运输服务';
$lang['store_deliver_company_name']			= 'Company Name';// '公司名称';
$lang['store_deliver_shipping_code']		= 'Tracking No.';//'物流单号';
$lang['store_deliver_bforget']				= 'Memo';//'备忘';
$lang['store_deliver_shipping_code_tips']	= 'Input Tracking No. Correctly, Keep Package Traceable';//'正确填写物流单号，确保快递跟踪查询信息正确';
$lang['store_deliver_no_deliver_tips']		= 'If No Shipping Needed, Just Click Confirm Button';//'如果订单中的商品无需物流运送，您可以直接点击确认';
$lang['store_deliver_shipping_code_pl']		= 'Please Fill Up Tracking No.';//'请填写物流单号';

/**
 * 选择发货地址
 */
$lang['store_deliver_man']			= 'Seller';//'发货人';
$lang['store_deliver_daddress']		= 'Seller Address';//'发货地址';
$lang['store_deliver_telphone']		= 'Contact';//'电话';

/**
 * 搜索动态物流
 */
$lang['member_show_expre_my_fdback']		= 'My Message';//'我的留言';
$lang['member_show_expre_type']				= 'Shipping Method: Others';//'发货方式：自行联系';
$lang['member_show_expre_company']			= 'Shipping Company';//'物流公司';
$lang['member_show_receive_info']			= 'Shipping Address';//'收货信息';
$lang['member_show_deliver_info']			= 'Seller Info';//'发货信息';