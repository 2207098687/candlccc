<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="ncm-default-form">
    <form method="post" id="cash_form" action="<?php echo MEMBER_SITE_URL;?>/index.php?act=predeposit&op=pd_cash_add">
      <input type="hidden" name="form_submit" value="ok" />
      <dl>
        <dt><i class="required">*</i>Amount：</dt>
        <dd><input name="pdc_amount" type="text" class="text w50" id="pdc_amount" maxlength="10" ><em class="add-on">
<i class="icon-renminbi"></i></em> （Available Balance：<strong class="orange"><?php echo floatval($output['member_info']['available_predeposit']); ?></strong>₱）<span></span>
          <p class="hint mt5"></p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Receiving Bank：</dt>
        <dd><input name="pdc_bank_name" type="text" class="text w200" id="pdc_bank_name" maxlength="40"/><span></span>
<!--          <p class="hint">强烈建议优先填写国有4大银行(中国银行、中国建设银行、中国工商银行和中国农业银行)-->
<!--请填写详细的开户银行分行名称，虚拟账户如支付宝、财付通填写“支付宝”、“财付通”即可。</p>-->
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Receiving Account：</dt>
        <dd><input name="pdc_bank_no" type="text" class="text w200" id="pdc_bank_no" maxlength="30"/><span></span>
          <p class="hint">Bank Account</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Name：</dt>
        <dd><input name="pdc_bank_user" type="text" class="text w100" id="pdc_bank_user" maxlength="10"/><span></span>
        <p class="hint">Recipient Name</p>
          </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i>Payment Password：</dt>
        <dd><input name="password" type="password" class="text w100" id="password" maxlength="20"/><span></span>
        <p class="hint">
              <?php if (!$output['member_info']['member_paypwd']) {?>
              <strong class="red">Not Yet Set Password</strong><a href="index.php?act=member_security&op=auth&type=modify_paypwd" class="ncbtn-mini ncbtn-aqua vm ml10" target="_blank">Set Now</a>
              <?php } ?>
        </p>
          </dd>
      </dl>
      <dl class="bottom"><dt>&nbsp;</dt>
          <dd><label class="submit-border"><input type="submit"  class="submit" value="Confirm" /></label><a class="ncbtn ml10" href="javascript:history.go(-1);">Cancel</a></dd>
      </dl>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function(){
	$('#cash_form').validate({
    	submitHandler:function(form){
			ajaxpost('cash_form', '', '', 'onerror')
		},
         errorPlacement: function(error, element){
            var error_td = element.parent('dd').children('span');
            error_td.append(error);
        },
        rules : {
	        pdc_amount      : {
	        	required  : true,
	            number    : true,
	            min       : 0.01,
	            max       : <?php echo floatval($output['member_info']['available_predeposit']); ?>
            },
            pdc_bank_name :{
            	required  : true
            },
            pdc_bank_no : {
            	required  : true
            },
            pdc_bank_user : {
	        	required  : true
	        },
	        password : {
	        	required  : true
	        }
        },
        messages : {
        	pdc_amount	  : {
            	required  :'<i class="icon-exclamation-sign"></i>Incorrect Amount',
            	number    :'<i class="icon-exclamation-sign"></i>Incorrect Amount',
            	min    	  :'<i class="icon-exclamation-sign"></i>Incorrect Amount',
            	max       :'<i class="icon-exclamation-sign"></i>Incorrect Amount'
            },
            pdc_bank_name :{
            	required   :'<i class="icon-exclamation-sign"></i>Input Receiving Bank Account'
            },
            pdc_bank_no : {
            	required   :'<i class="icon-exclamation-sign"></i>Input Receiving Bank Account'
            },
            pdc_bank_user : {
	        	required  : '<i class="icon-exclamation-sign"></i>Input Recipient Name'
	        },
	        password : {
		        required : '<i class="icon-exclamation-sign"></i>Input Payment Password'
		    }
        }
    });
});
</script>