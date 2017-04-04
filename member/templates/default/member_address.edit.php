<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="eject_con">
  <div class="adds">
    <div id="warning"></div>
    <form method="post" action="<?php echo MEMBER_SITE_URL;?>/index.php?act=member_address&op=address" id="address_form" target="_parent">
      <input type="hidden" name="form_submit" value="ok" />
      <input type="hidden" name="id" value="<?php echo $output['address_info']['address_id'];?>" />
      <input type="hidden" value="<?php echo $output['address_info']['city_id'];?>" name="city_id" id="_area_2">
      <input type="hidden" value="<?php echo $output['address_info']['area_id'];?>" name="area_id" id="_area">
      <dl>
        <dt><i class="required">*</i><?php echo $lang['member_address_receiver_name'].$lang['nc_colon'];?></dt>
        <dd>
          <input type="text" class="text w100" name="true_name" value="<?php echo $output['address_info']['true_name'];?>"/>
          <p class="hint"><?php echo $lang['member_address_input_name'];?></p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i><?php echo $lang['member_address_location'].$lang['nc_colon'];?></dt>
        <dd><input type="hidden" name="region" id="region" value="<?php echo $output['address_info']['area_info'];?>">
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i><?php echo $lang['member_address_address'].$lang['nc_colon'];?></dt>
        <dd>
          <input class="text w300" type="text" name="address" value="<?php echo $output['address_info']['address'];?>"/>
          <p class="hint"><?php echo $lang['member_address_not_repeat'];?></p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i><?php echo $lang['member_address_phone_num'].$lang['nc_colon'];?></dt>
        <dd>
          <input type="text" class="text w200" name="tel_phone" value="<?php echo $output['address_info']['tel_phone'];?>"/>
          <p class="hint"><?php echo $lang['member_address_area_num'];?> - <?php echo $lang['member_address_phone_num'];?> - <?php echo $lang['member_address_sub_phone'];?></p>
        </dd>
      </dl>
      <dl>
        <dt><i class="required">*</i><?php echo $lang['member_address_mobile_num'].$lang['nc_colon'];?></dt>
        <dd>
          <input type="text" class="text w200" name="mob_phone" value="<?php echo $output['address_info']['mob_phone'];?>"/>
        </dd>
      </dl>
      <?php if (!intval($output['address_info']['dlyp_id'])) { ?>
      <dl>
<!--        <dt><em class="pngFix"></em>Set as Default Addr--><?php //echo $lang['nc_colon'];?><!--</dt>-->
        <dd style="margin-left: 60px">
          <input type="checkbox" class="checkbox vm mr5" <?php if ($output['address_info']['is_default']) echo 'checked';?> name="is_default" id="is_default" value="1" />
          <label for="is_default">Set as Default Address</label>
        </dd>
      </dl>
      <?php } ?>
      <?php if (C('delivery_isuse')) { ?>
      <dl>
        <dt>&nbsp;</dt>
        <dd> <a href="javascript:void(0);" class="ncbtn-mini ncbtn-bittersweet" id="zt"><i class="icon-flag"></i>For Meetup</a>
        <p class="hint">For Your Convenience, We Offer Meetup by Appointment Service.<br/>You Can Use Meetup Point (MRT or LRT Stations Only) When Purchasing as Shipping Address.<br/>We Will Coordinate and Delivery to Meetup Points.</p> </dd>
      </dl>
      <?php } ?>
      <div class="bottom">
        <label class="submit-border">
          <input type="submit" class="submit" value="<?php if($output['type'] == 'add'){?><?php echo $lang['member_address_new_address'];?><?php }else{?><?php echo $lang['member_address_edit_address'];?><?php }?>" />
        </label>
        <a class="ncbtn ml5" href="javascript:DialogManager.close('my_address_edit');">Cancel</a> </div>
    </form>
  </div>
</div>
<script type="text/javascript">
var SITEURL = "<?php echo SHOP_SITE_URL; ?>";
$(document).ready(function(){
	$("#region").nc_region();
	$('#address_form').validate({
    	submitHandler:function(form){
    		ajaxpost('address_form', '', '', 'onerror');
    	},
        errorLabelContainer: $('#warning'),
        invalidHandler: function(form, validator) {
           var errors = validator.numberOfInvalids();
           if(errors)
           {
               $('#warning').show();
           }
           else
           {
               $('#warning').hide();
           }
        },
        rules : {
            true_name : {
                required : true
            },
            address : {
                required : true
            },
            region : {
            	checklast: true
            },
            tel_phone : {
                required : check_phone,
                minlength : 6,
				maxlength : 20
            },
            mob_phone : {
                required : check_phone,
                minlength : 11,
				maxlength : 11,                
                digits : true
            }
        },
        messages : {
            true_name : {
                required : '<?php echo $lang['member_address_input_receiver'];?>'
            },
            address : {
                required : '<?php echo $lang['member_address_input_address'];?>'
            },
            tel_phone : {
                required : '<?php echo $lang['member_address_phone_and_mobile'];?>',
                minlength: '<?php echo $lang['member_address_phone_rule'];?>',
				maxlength: '<?php echo $lang['member_address_phone_rule'];?>'
            },
            mob_phone : {
                required : '<?php echo $lang['member_address_phone_and_mobile'];?>',
                minlength: '<?php echo $lang['member_address_wrong_mobile'];?>',
				maxlength: '<?php echo $lang['member_address_wrong_mobile'];?>',
                digits : '<?php echo $lang['member_address_wrong_mobile'];?>'
            }
        },
        groups : {
            phone:'tel_phone mob_phone'
        }
    });
    $('#zt').on('click',function(){
    	DialogManager.close('my_address_edit');
    	ajax_form('daisou','Meetup Point', '<?php echo MEMBER_SITE_URL;?>/index.php?act=member_address&op=delivery_add', '900',0);
    });
});
function check_phone(){
    return ($('input[name="tel_phone"]').val() == '' && $('input[name="mob_phone"]').val() == '');
}
</script>