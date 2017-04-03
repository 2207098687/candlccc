<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="ncm-security-user">
    <h3>Account Info</h3>
    <div class="user-avatar"><span><img src="<?php echo getMemberAvatar($output['member_info']['member_avatar']);?>"></span></div>
    <div class="user-intro">
      <dl>
        <dt>Account:  </dt>
        <dd><?php echo $output['member_info']['member_name'];?></dd>
      </dl>
      <dl>
        <dt>Email:  </dt>
        <dd><?php echo encryptShow($output['member_info']['member_email'],4,4);?></dd>
      </dl>
      <dl>
        <dt>Mobile: </dt>
        <dd><?php echo($output['member_info']['member_qq']);
            //echo encryptShow($output['member_info']['member_mobile'],4,4);?>
      </dl>
      <dl>
        <dt>Last Login: </dt>
        <dd><?php echo date('m-d-Y H:i:s',$output['member_info']['member_old_login_time']);?>&#12288;|&#12288;IP: <?php echo $output['member_info']['member_old_login_ip'];?>&nbsp;<span>Not You Logged in? Pls <a href="index.php?act=member_security&op=auth&type=modify_pwd">“Change Password”</a>.</span></dd>
      </dl>
    </div>
  </div>
  <div class="ncm-security-container">
    <div class="title">Security Info</div>
    <?php if ($output['member_info']['security_level'] <= 1) { ?>
    <div class="current low">Account Security: <strong>Low</strong><span>(We suggest you update email and mobile for security reasons.)</span></div>
    <?php } else if ($output['member_info']['security_level'] == 2) { ?>
    <div class="current normal">Account Security: <strong>中</strong><span>(Recommendation: Update All Details)</span></div>
    <?php } else { ?>
    <div class="current high">Account Security: <strong>高</strong><span>(Great Job)</span></div>
    <?php } ?>

    <dl id="password" class="yes">
      <dt><span class="icon"><i></i></span><span class="item">
        <h4>Password</h4>
        <h6>OK</h6>
        </span></dt>
      <dd><span class="explain">We suggest you change password from time to time. Make Sure to Include Both Letters and Numbers, at least 6 characters.To Change Password, Pls Bind with Your Email First.</span><span class="handle"><a href="index.php?act=member_security&op=auth&type=modify_pwd" class="ncbtn  ncbtn-bittersweet">Change Password</a></span></dd>
    </dl>
    <dl id="email" class="<?php echo $output['member_info']['member_email_bind'] == 1 ? 'yes' : 'no';?>">
      <dt><span class="icon"><i></i></span><span class="item">
        <h4>Bind Email</h4>
        <h6><?php echo $output['member_info']['member_email_bind'] == 1 ? 'OK' : 'Pending';?></h6>
        </span></dt>
      <dd><span class="explain">To Promote Your Account Security and Update Promos.</span><span class="handle"><a href="index.php?act=member_security&op=auth&type=modify_email" class="ncbtn ncbtn-aqua bd">Bind Email</a><a href="index.php?act=member_security&op=auth&type=modify_email" class="ncbtn ncbtn-bittersweet jc">Change Email</a></span></dd>
    </dl>
    <dl id="mobile" class="<?php echo $output['member_info']['member_mobile_bind'] == 1 ? 'yes' : 'no';?>">
<!--      <dt><span class="icon"><i></i></span><span class="item">-->
<!--        <h4>手机绑定</h4>-->
<!--        <h6>--><?php //echo $output['member_info']['member_mobile_bind'] == 1 ? '已绑定' : '未绑定';?><!--</h6>-->
<!--        </span></dt>-->
<!--      <dd><span class="explain">进行手机验证后，可用于接收敏感操作的身份验证信息，以及进行积分消费的验证确认，非常有助于保护您的账号和账户财产安全。</span><span class="handle"><a href="index.php?act=member_security&op=auth&type=modify_mobile" class="ncbtn ncbtn-aqua bd">绑定手机</a><a href="index.php?act=member_security&op=auth&type=modify_mobile" class="ncbtn ncbtn-bittersweet jc">修改手机</a></span></dd>-->
    </dl>
<!--    <dl id="paypwd" class="--><?php //echo $output['member_info']['member_paypwd'] != ''  ? 'yes' : 'no';?><!--">-->
<!--      <dt><span class="icon"><i></i></span><span class="item">-->
<!--        <h4>支付密码</h4>-->
<!--        <h6>--><?php //echo $output['member_info']['member_paypwd'] != '' ? '已设置' : '未设置';?><!--</h6>-->
<!--        </span></dt>-->
<!--      <dd><span class="explain">设置支付密码后，在使用账户中余额时，需输入支付密码。</span><span class="handle"><a href="index.php?act=member_security&op=auth&type=modify_paypwd" class="ncbtn ncbtn-aqua bd">设置密码</a><a href="index.php?act=member_security&op=auth&type=modify_paypwd" class="ncbtn ncbtn-bittersweet jc">修改密码</a></span></dd>-->
    </dl>
  </div>
</div>
