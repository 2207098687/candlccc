<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="alert alert-success">
    <h4>Tips：</h4>
    <ul>
      <li>1.Input Your Coupon Code</li>
      <li>2.Use Coupon When Checking out, Subject to Conditions.</li>
    </ul>
  </div>
  <div class="ncm-default-form">
    <form method="post" id="bind_form" action="<?php echo MEMBER_SITE_URL;?>/index.php?act=member_voucher&op=voucher_binding">
      <input type="hidden" name="form_submit" value="ok" />
      <input name="nchash" type="hidden" value="<?php echo getNchash();?>" />
      <dl style="overflow: visible;">
        <dt><i class="required">*</i>Input Coupon Code：</dt>
        <dd>
            <div class="parentCls">
                <input type="text" class="inputElem text w160" value="" name="pwd_code" id="pwd_code" autocomplete="off" autofocus="autofocus" maxlength="20"/>
            </div>
            <span class="error_span"></span>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Captcha：</dt>
        <dd>
            <input type="text" name="captcha" class="text" id="captcha" maxlength="4" size="10" autocomplete="off" />
            <img src="index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>" name="codeimage" border="0" id="codeimage" class="ml5 vm"><a href="javascript:void(0)" class="ml5 blue" onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();">Refresh</a>
            <span class="error_span"></span>
        </dd>
      </dl>
      <dl class="bottom">
        <dt>&nbsp;</dt>
        <dd>
          <label class="submit-border">
            <input type="button" class="submit" id="submitbtn" value="Confirm" />
          </label>
        </dd>
      </dl>
    </form>
  </div>
</div>

<script src="<?php echo RESOURCE_SITE_URL;?>/js/input_max.js"></script>
<script type="text/javascript">
//input内容放大
$(function(){
    new TextMagnifier({
        inputElem: '.inputElem',
        align: 'top',
        splitType :[5,5,5,5]
    });
});
var submiting = false;
$(function(){
	$('.submit').on('click',function(){
        if (submiting) {
            return false;
        }
		if (!$('#bind_form').valid()){
			document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();
		} else {
            submiting = true;
            ajaxpost('bind_form', '', '', 'onerror',$(this));
		}
	});

    $('#bind_form').validate({
        errorPlacement: function(error, element){
            element.closest('dd').find('.error_span').append(error);
        },
        rules : {
        	pwd_code : {
                required : true
            },
            captcha : {
                required : true,
                minlength: 4,
                remote   : {
                    url : 'index.php?act=seccode&op=check&nchash=<?php echo getNchash();?>',
                    type: 'get',
                    async: false,
                    data:{
                        captcha : function(){
                            return $('#captcha').val();
                        }
                    }
                }
            }
        },
        messages : {
            pwd_code : {
                required : '<i class="icon-exclamation-sign"></i>Input Coupon Code'
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
