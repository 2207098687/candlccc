<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <div class="alert alert-success">
    <h4>Tips: </h4>
    <ul>
      <li>1. Pls Fill up Correct Email Address for Future Password Changing and Regular Updates.</li>
      <li>2. After Submission, You Will Receive An Email with Verification Link, Pls Login Your Email Account and Complete Verification Process.</li>
      <li>3. Change of Email, You Will Receive A Security Code for Change Email.</li>
    </ul>
  </div>
  <div class="ncm-default-form">
    <form method="post" id="email_form" action="<?php echo MEMBER_SITE_URL;?>/index.php?act=member_security&op=send_bind_email">
      <input type="hidden" name="form_submit" value="ok" />
      <dl>
        <dt><i class="required">*</i>Email Address: </dt>
        <dd>
          <input type="text" class="text w180"  maxlength="40" value="<?php echo $output['member_info']['member_email'];?>" name="email" id="email" />
          <label for="email" generated="true" class="error"></label>
        </dd>
      </dl>
      <dl class="bottom">
        <dt>&nbsp;</dt>
        <dd><label class="submit-border">
          <input type="submit" class="submit" value="Submit" /></label>
        </dd>
      </dl>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function(){
    $('#email_form').validate({
        submitHandler:function(form){
            ajaxpost('email_form', '', '', 'onerror') 
        },
        rules : {
           email : {
                required   : true,
                email      : true
            }
        },
        messages : {
            email : {
                required : '<i class="icon-exclamation-sign"></i>Incorrect Email Address',
                email    : '<i class="icon-exclamation-sign"></i>Incorrect Email Address'
            }
        }
    });
});
</script> 
