<?php
defined('ShopNC_CLUB') or exit('Access Invalid!');
/**
 *  登录-公共语言
 */

/**
 * 登录-注册
 */
$lang['login_register_input_username']		= "Username Is Required";//"用户名不能为空";
$lang['login_register_username_range']		= "Username Must Be Between 6-20 Characters";//用户名必须在6-20个字符之间
$lang['login_register_username_lettersonly']= "May Contain '_','-',Not All Numbers";//可包含“_”、“-”，不能是纯数字
$lang['login_register_username_exists']		= "Username Exists";//该用户名已经存在
$lang['login_register_input_password']		= "Password Is Required";//密码不能为空
$lang['login_register_password_range']		= "Password Must Be Between 6-20 Characters";//密码长度应在6-20个字符之间
$lang['login_register_input_password_again']= "Password Again Please!";//您必须再次确认您的密码
$lang['login_register_password_not_same']	= "Passwords Inconsistent";//两次输入的密码不一致
$lang['login_register_input_email']			= "Email Is Required";//电子邮箱不能为空
$lang['login_register_invalid_email']		= "This Is Not A Valid Email Address";//这不是一个有效的电子邮箱
$lang['login_register_email_exists']		= "Email Address Exists";//该电子邮箱已经存在
$lang['login_register_input_text_in_image']	= "Enter Captcha";//请输入验证码
$lang['login_register_code_wrong']			= "Incorrect Captcha";//验证码不正确
$lang['login_register_must_agree']			= "Check Service Agreement Please";//请勾选服务协议
$lang['login_register_join_us']				= "New Register";//用户注册
$lang['login_register_input_info']			= "Enter User Register Info";//填写用户注册信息
$lang['login_register_username']			= "Username";//用户名
$lang['login_register_username_to_login']	= "Must Be 6 to 20 Characters or Digits,May Contain '-'.";//请使用6-20个中、英文、数字及“-”符号
$lang['login_register_pwd']					= "Password";//"设置密码";
$lang['login_register_password_to_login']	= "Your Login Password";//您的登录密码
$lang['login_register_password_to_login']	= "Must Be 6 to 20 Characters or Digits,May Contain '-'.";//6-20个大小写英文字母、符号或数字
$lang['login_register_ensure_password']		= "Repeat Password";//确认密码
$lang['login_register_input_password_again']= "Enter Password Again";//请再次输入密码
$lang['login_register_email']				= "Email";//邮箱
$lang['login_register_input_valid_email']	= "For Verification and Retrieve Password";//输入常用邮箱作为验证及找回密码使用
$lang['login_register_code']				= "Captcha";//验证码
$lang['login_register_click_to_change_code']= "Refresh";//换一张
$lang['login_register_input_code']			= "Enter Captcha";//输入验证码
$lang['login_register_agreed']				= "Read & Agree ";//阅读并同意
$lang['login_register_agreement']			= "Service Agreement";//《服务协议》
$lang['login_register_regist_now']			= "Register Now";//立即注册
$lang['login_register_enter_now']			= "Submit";//确认提交
$lang['login_register_connect_now']			= "Bundle Account";//绑定账号
$lang['login_register_after_regist']		= "Register with Us";//注册之后您可以
$lang['login_register_buy_info']			= "Purchase Easily";//购买商品支付订单
$lang['login_register_collect_info']		= "Manage Your Wishlist";//收藏商品关注店铺
$lang['login_register_honest_info']			= "Fast Processing & Secure";//安全交易诚信无忧
$lang['login_register_talk_info']			= "Ranks & Privileges";//会员等级享受特权
$lang['login_register_openstore_info']		= "Points & Rewards";//积分获取优惠购物
$lang['login_register_sns_info']			= "Rate Products & Share";//评价晒单站外分享


$lang['login_register_already_have_account']= "Have Account? ";//如果您是本站用户
$lang['login_register_login_now_1']			= "I Have Account, Now";//我已经注册，现在就
$lang['login_register_login_now_2']			= "Login";//"登录";
$lang['login_register_login_now_3']			= "or";//或是
$lang['login_register_login_forget']		= "Retrieve Password";//找回密码?
/**
 * 登录-用户保存
 */
$lang['login_usersave_login_usersave_username_isnull']	= "Username Is Required";//用户名不能为空
$lang['login_usersave_password_isnull']			= "Password Is Required";//密码不能为空
$lang['login_usersave_password_not_the_same']	= "Passwords Inconsistent, Please Enter Again";//密码与确认密码不相同，请从重新输入
$lang['login_usersave_wrong_format_email']		= "Email Address Incorrect, Please Enter Again";//电子邮件格式不正确，请重新填写
$lang['login_usersave_code_isnull']				= "Captcha Is Required";//验证码不能为空
$lang['login_usersave_wrong_code']				= "Verification Code Incorrect";//验证码错误
$lang['login_usersave_you_must_agree']			= "You Must Agree with Service Term in Order to Register";//您必须同意服务条款才能注册
$lang['login_usersave_your_username_exists']	= "Username Exists, Please Try Another One";//您填写的用户名称已经存在，请您选择其他用户名填写
$lang['login_usersave_your_email_exists']		= "Email Has Registered before, Please Use Another One";//"您填写的邮箱已经存在，请您选择其他邮箱填写";
$lang['login_usersave_regist_success']			= "Registered Successfully";//注册成功
$lang['login_usersave_regist_success_ajax'] 	= "Welcome to site_name, Enjoy Your Shopping!!";//'欢迎来到site_name建议您尽快完善资料，祝您购物愉快！';
$lang['login_usersave_regist_fail']				= "Registration Failed, Please Try Again";//注册失败
/**
 * 密码找回
 */
$lang['login_index_find_password']				    = 'Forgot Password';//忘记密码
$lang['login_password_you_account']	= 'Username';//登录账号
$lang['login_password_you_email']	= 'Email';//电子邮箱
$lang['login_password_change_code']	= 'Refresh';//看不清，换一张
$lang['login_password_submit']		= 'Submit';//提交找回
$lang['login_password_input_email']	= 'Email Is Required';//电子邮箱不能为空
$lang['login_password_wrong_email']	= 'Email Address Incorrect';//电子邮箱填写错误
/**
 * 找回处理
 */
$lang['login_password_enter_find']			= 'Entering Password Retrieve Page....';//即将进入找回密码页面……
$lang['login_password_input_username']		= 'Enter Username';//请输入登录名称
$lang['login_password_username_not_exists']	= 'Username Doesnt Exists';//登录名称不存在
$lang['login_password_input_email']			= 'Enter Email Adress';//请输入邮箱地址
$lang['login_password_email_not_exists']	= 'Email Address Incorrect';//邮箱地址错误
$lang['login_password_email_fail']			= 'Email Time Out, Submit Again';//邮件发送超时，请重新申请
$lang['login_password_email_success']		= 'Email Sent, Please Check';//邮件已经发出，请查收
?>