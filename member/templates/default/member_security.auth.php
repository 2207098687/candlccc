<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="alert alert-success">
    <h4>Tips：</h4>
    <ul>
      <li>1. Get Security Code Through Email, Click "Send Verification" Button.</li>
      <li>2. Verification Code is Valid within 30 Minutes.</li>
      <li>3. In Case You Cant Access Your Email, Pls Contact Support.</li>
      <li>4. Input Verification Code and Captcha to Continue.</li>
<!--      <li>1. 请选择“绑定邮箱”或“绑定手机”方式其一作为安全校验码的获取方式并正确输入。</li>-->
<!--      <li>2. 如果您的邮箱已失效，可以 <a href="index.php?act=member_security&op=auth&type=modify_mobile">绑定手机</a> 后通过接收手机短信完成验证。</li>-->
<!--      <li>3. 如果您的手机已失效，可以 <a href="index.php?act=member_security&op=auth&type=modify_email">绑定邮箱</a> 后通过接收邮件完成验证。</li>-->
<!--      <li>4. 请正确输入下方图形验证码，如看不清可点击图片进行更换，输入完成后进行下一步操作。</li>-->
<!--      <li>5. 收到安全验证码后，请在30分钟内完成验证。</li>-->
    </ul>
  </div>
  <div class="ncm-default-form">
    <form method="post" id="auth_form" action="index.php?act=member_security&op=auth">
      <input type="hidden" name="form_submit" value="ok" />
      <input type="hidden" name="type" value="<?php echo $_GET['type'];?>">
      <input name="nchash" type="hidden" value="<?php echo getNchash();?>" />
      <dl>
        <dt><i class="required">*</i>Click to Send：</dt>
        <dd><p>
          <select name="auth_type" id="auth_type">
            <?php if ($output['member_info']['member_mobile']) {?>
            <option value="mobile">Mobile [<?php echo encryptShow($output['member_info']['member_mobile'],4,4);?>]</option>
            <?php } ?>
            <?php if ($output['member_info']['member_email']) {?>
            <option value="email">Email [<?php echo encryptShow($output['member_info']['member_email'],4,4);?>]</option>
            <?php } ?>
          </select>
          <a href="javascript:void(0);" id="send_auth_code" class="ncbtn ml5"><span id="sending" style="display:none">Now</span><span class="send_success_tips"><strong id="show_times" class="red mr5"></strong>Seconds Later</span>Resend Verification Code Again</a></p>
          <p class="send_success_tips hint mt10">“Verification Code”Send, Pls Check. Valid within<strong>“30 Minutes”</strong></p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Input Verification：</dt>
        <dd>
          <input type="text" class="text"  maxlength="6" value="" name="auth_code" size="10" id="auth_code" autocomplete="off" />
          <label for="email" generated="true" class="error"></label>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Input Captcha：</dt>
        <dd>
          <input type="text" name="captcha" class="text" id="captcha" maxlength="4" size="10" autocomplete="off" />
         <img src="index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>" name="codeimage" border="0" id="codeimage" class="ml5 vm"><a href="javascript:void(0)" class="ml5 blue" onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();">Refresh</a>
          <label for="captcha" generated="true" class="error"></label>
        </dd>
      </dl>
      <dl class="bottom">
        <dt>&nbsp;</dt>
        <dd>
          <label class="submit-border">
            <input type="button" class="submit" value="Submit" />
          </label>
        </dd>
      </dl>
    </form>
  </div>
</div>
<script type="text/javascript">
$('.send_success_tips').hide();
var ALLOW_SEND = true;
$(function(){
	$('.submit').on('click',function(){
		if (!$('#auth_form').valid()){
			document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();
		} else {
			$('#auth_form').submit();
		}
	});
	function StepTimes() {
		$num = parseInt($('#show_times').html());
		$num = $num - 1;
		$('#show_times').html($num);
		if ($num <= 0) {
			ALLOW_SEND = !ALLOW_SEND;
			$('.send_success_tips').hide();
		} else {
			setTimeout(StepTimes,1000);
		}
	}
	$('#send_auth_code').on('click',function(){
		if (!ALLOW_SEND) return;
		ALLOW_SEND = !ALLOW_SEND;
		$('#sending').show();
		$.getJSON('index.php?act=member_security&op=send_auth_code',{type:$('#auth_type').val()},function(data){
			if (data.state == 'true') {
				$('#sending').hide();
				$('#show_times').html(60);
			    $('.send_success_tips').show();
			    setTimeout(StepTimes,1000);
			} else {
				ALLOW_SEND = !ALLOW_SEND;
				$('#sending').hide();
				showDialog(data.msg, 'error','','','','','','','','',2);
			}
		});
	});

    $('#auth_form').validate({
        rules : {
            auth_code : {
                required : true,
                maxlength : 6,
                minlength : 6,
                digits : true
            },
            captcha : {
                required : true,
                minlength: 4,
                remote   : {
                    url : 'index.php?act=seccode&op=check&nchash=<?php echo getNchash();?>',
                    type: 'get',
                    data:{
                        captcha : function(){
                            return $('#captcha').val();
                        }
                    }
                }
            }
        },
        messages : {
        	auth_code : {
                required : '<i class="icon-exclamation-sign"></i>Incorrect Code',
                maxlength : '<i class="icon-exclamation-sign"></i>Incorrect Code',
				minlength : '<i class="icon-exclamation-sign"></i>Incorrect Code',
				digits : '<i class="icon-exclamation-sign"></i>Incorrect Code'
            },
            captcha : {
                required : '<i class="icon-exclamation-sign"></i>Incorrect Captcha',
                minlength: '<i class="icon-exclamation-sign"></i>Incorrect Captcha',
				remote	 : '<i class="icon-exclamation-sign"></i>Incorrect Captcha'
            }
        }
    });
});
</script> 
