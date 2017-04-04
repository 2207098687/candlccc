<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="ncm-default-form">
    <form method="post" id="rechargecard_form" action="index.php">
      <input type="hidden" name="form_submit" value="ok" />
      <input type="hidden" name="act" value="predeposit" />
      <input type="hidden" name="op" value="rechargecard_add" />
      <dl>
        <dt><i class="required">*</i>Reload Card No.<?php echo $lang['nc_colon']; ?></dt>
        <dd>
          <input name="rc_sn" type="text" class="text w400" id="rc_sn" maxlength="50" /><span></span></dd>
      </dl>
      <dl class="bottom">
        <dt>&nbsp; </dt>
        <dd>
          <label class="submit-border"><input type="submit" class="submit" value="<?php echo $lang['nc_submit']; ?>" /></label>
        </dd>
      </dl>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function(){
$('#rechargecard_form').validate({
    errorPlacement: function(error, element){
        var error_td = element.parent('dd').children('span');
        error_td.append(error);
    },
    rules : {
        rc_sn : {
            required : true,
            maxlength : 50
        }
    },
    messages : {
        rc_sn : {
            required :'<i class="icon-exclamation-sign"></i>Pls Input Card No.',
            maxlength :'<i class="icon-exclamation-sign"></i>Must Be Less Than 50 Digits'
        }
    }
});
});
</script>
