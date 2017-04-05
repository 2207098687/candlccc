<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>
<style type="text/css">
.container { width:1010px; margin:0 auto; }
.button { border-radius: 2px; background: -moz-linear-gradient(center top, #f93, #c60) repeat scroll 0 0 rgba(0, 0, 0, 0); border: 1px solid #c93; border-radius: 5px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); color: #fff !important; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; line-height: normal; margin: 0 2px; min-width: 80px; outline: medium none; padding: 5px 13px 6px; text-align: center; text-decoration: none; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3); transition: all 0.2s linear 0s; vertical-align: middle; width: auto !important; }
.button:hover { background: -moz-linear-gradient(center top, #f90, #960) repeat scroll 0 0 rgba(0, 0, 0, 0); color: white; text-decoration: none; }
.button:active { background: -moz-linear-gradient(center top, #960, #f90) repeat scroll 0 0 rgba(0, 0, 0, 0); color: #a9c08c; position: relative; top: 1px; }
.button:focus { box-shadow: 0 0 7px rgba(0, 0, 0, 0.5); text-decoration: none; }
.container-bg { background: url('<?php echo SHOP_TEMPLATES_URL;?>/images/invite/top.jpg') repeat-x #eee; padding-top: 0; }
.invite-bd { background: url('<?php echo SHOP_TEMPLATES_URL;?>/images/invite/center3.jpg') no-repeat; height: 725px; }
.invite-rules { width:400px; position:relative; top:430px; left:30px; color: #5d3701; line-height: 24px; font-size: 14px; padding: 10px 10px; }
.invite-qr { width: 111px; position:relative; left: 770px; top: 290px; color: #5d3701; line-height: 24px; font-size: 14px; padding: 10px 10px; }
.invite-form { background: #fffeec; height: 82px; margin: 295px 0 0 70px; position: absolute; width: 785px; }
.invite-form .i-invite-link { background-color: #fff; border: 1px solid #bbb; color: #000; padding:0 4px; color: #000; font-size: 1.25em; height: 45px; line-height: 45px; vertical-align: middle; width: 620px; }
.invite-form .invite-text { color:#fd6208; margin-left:25px; font-size:18px; }
.invite-form div { margin-left:25px; }
.button { background: -moz-linear-gradient(center top, #fa6515, #fa6515) repeat scroll 0 0 transparent; border: none; border-radius: 3px 3px 3px 3px; margin-left: 13px; }
.copy-btn { font-size: 28px; height: 32px; line-height: 32px; width: 105px; background-color: #fa6515; }
.invite-share-site { position: relative; top: 400px; left: 170px; width: 600px; }
.invite-rebate { position: relative; top: 420px; left: 190px; width: 140px; }
.invite-join-dashi { left: 735px; position: relative; top: 420px; width: 100px; }
.invite-help { font-size: 12px; color: #000; }
#footer { margin: 0px; }
</style>
<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/images/invite/ZeroClipboard.js"></script>
<script type="text/javascript">
$(document).ready(function() {
initInviteForm();
});

function initInviteForm() {

	$(".i-invite-link").click(function(){
		<?php if ($_SESSION['is_login']) {?>
		$(this).select();
		 <?} else {?>
	     	if (confirm("Please Login First")){
			window.location.href="<?php echo MEMBER_SITE_URL;?>/index.php?act=login&op=index&ref_url=<?php echo BASE_SITE_URL;?>/index.php?act=invite"
		    } 
	     <?php } ?>

	});

	$(".invite-form .copy-btn").each(function(){

		ZeroClipboard.setMoviePath($(this).attr("data-url"));

	    var clip = new ZeroClipboard.Client(); // 新建一个对象

	    clip.setHandCursor(true ); // 设置鼠标为手型

	    clip.setText(""); // 设置要复制的文本。

	    clip.setHandCursor(true);

	    clip.setCSSEffects(true);

	    clip.addEventListener('complete', function(client, text) {
		<?php if ($_SESSION['is_login']) {?>
	    	alert("Invite Link Copied！\n\nShare with Friends Now!" );
		 <?} else {?>
		 if (confirm("Please Login First")){
			window.location.href="<?php echo MEMBER_SITE_URL;?>/index.php?act=login&op=index&ref_url=<?php echo BASE_SITE_URL;?>/index.php?act=invite"
		    } 
	     <?php } ?>

	    } );

	    clip.addEventListener('mouseDown', function(client) { 

	    	clip.setText($(".i-invite-link").val());

	    } );

	    clip.glue("copy-button");

	    $(this).click(function(e){

	    	e.preventDefault();

	    	alert("Whoopss...Failed to Copy, Do It Manually");

	    });

	});

}
</script>
<?php
$member_id = base64_encode(intval($_SESSION['member_id'])*1);
?>
<div class="container-bg">
  <div class="container">
    <div class="span-24" id="content">
      <div class="invite-bd">
        <div class="invite-form">
          <div class="invite-text"> Invitation Link： <span class="invite-help">Copy the Link Below and Paste to Your Facebook, Google+ and Others, Registered Accounts Will Be Under Your Referral~</span> </div>
          <div>
            <input type="text" readonly value="<?php echo BASE_SITE_URL;?>/#V5<?php echo $member_id;?>" class="std-input i-invite-link">
            <a class="button copy-btn" data-url="<?php echo SHOP_TEMPLATES_URL;?>/images/invite/ZeroClipboard.swf" id="copy-button" href="javascrit:;" hidefocus="true">Copy</a> </div>
        </div>
        <div class="invite-share-site clearfix">

          <!-- Baidu Button BEGIN -->
            <span style="float:left;line-height:28px; color: orangered;font-size: 16px;">Invite, Share & Earn：</span>
            <span id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'url':'<?php echo BASE_SITE_URL;?>/#V5<?php echo $member_id; ?>'}"> <a class="bds_fbook">facebook</a> <a class="bds_twi">Twitter</a> <a class="bds_linkedin">Linkedin</a></span>
          <!-- Baidu Button END -->

        </div>
        <div class="invite-rebate"><a href="<?php echo urlMember('member_points','index');?>" target="_blank" hidefocus="true"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/invite/income.png"></a></div>
        <div class="invite-rules">
          <p>1. Get Referral of 300₱-2000₱；</p>
          <p>2. Earn 80 Points; </p>
		  <p>3. Commissions;</p>
        </div>
        <?php if ($_SESSION['is_login']) {?>
        <div class="invite-qr">
          <p><img src="<?php echo $output['myurl']; ?>" style="width:110px;height:110px"/>
          <a href="<?php echo $output['mydownurl']; ?>" target="_blank"> Dowload QR</a>
          </p>
        </div>
        <?php } ?>
      </div>
      
      <!-- Baidu Button BEGIN --> 
      <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=645315" ></script> 
      <script type="text/javascript" id="bdshell_js"></script> 
      <script type="text/javascript">
    var bds_config = {'bdText':'Great Supplier【<?php echo $output['setting_config']['site_name']; ?>】Good Price, Nice Products！','bdPic':'<?php echo BASE_SITE_URL;?>/data/upload/shop/adv/snsspic.png','bdDesc':'I Get My Supplies here 【<?php echo $output['setting_config']['site_name']; ?>】So easy！','review':'off'};
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script> 
      <!-- Baidu Button END --> </div>
  </div>
</div>
<!---->