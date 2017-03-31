<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="ncc-receipt-info" id="paymentCon">
  <div class="ncc-receipt-info-title">
    <h3>Payment Method</h3>
    <?php if (!$output['deny_edit_payment']) { //是否支持修改支付方式?>
    <a href="javascript:void(0)" nc_type="buy_edit" id="edit_payment">[Edit]</a>
    <?php }?>
  </div>
  <div class="ncc-candidate-items">
    <ul>
<!--      <li>Online Payment</li>-->
    </ul>
  </div>
  <div id="payment_list" class="ncc-candidate-items" style="display:block">
    <ul>
      <li>
<!--        <input type="radio" value="online" name="payment_type" id="payment_type_online">-->
<!--        <label for="payment_type_online">Online Payment</label>-->
      </li>
    <?php //if ($output['ifshow_chainpay']) { ?>
<!--      <li>-->
<!--        <input type="radio" value="chain" name="payment_type" id="payment_type_chain">-->
<!--        <label for="payment_type_chain">Meetup Payment</label>-->
<!--      </li>-->
   <?php //} ?>
      <li>
        <input type="radio" checked="checked" value="offline" name="payment_type" id="payment_type_offline">
        <label for="payment_type_offline">Cash On Delivery</label>
<!--        <a id="show_goods_list" style="display: none" class="ncc-payment-showgoods" href="javascript:void(0);"><i class="icon-truck"></i>Cash On Delivery (<span data-cod-nums="offline">--><?php //echo count($output['pay_goods_list']['offline']);?><!--</span>Products) + <i class="icon-credit-card"></i>Online Payment (<span data-cod-nums="online">--><?php //echo count($output['pay_goods_list']['online']);?><!--</span>Products)</a>-->
      </li>
      <li>
          <input type="radio" value="offline" name="payment_type" id="payment_type_deposit">
          <label for="payment_type_deposit">Bank Deposit(Pls Contact Customer Support)</label>
      </li>
    </ul>
    <div class="hr16"> <a href="javascript:void(0);" class="ncbtn ncbtn-grapefruit" id="hide_payment_list">Save Choice</a></div>
  </div>
  <div id="ncc-payment-showgoods-list" class="ncc-payment-showgoods-list">
    <dl>
      <dt data-hideshow="offline">Cash On Delivery</dt>
      <dd data-hideshow="offline" data-cod2-type="offline">
        <?php foreach((array) $output['pay_goods_list']['offline'] as $value) {?>
        <div class="goods-thumb" data-cod2-store="<?php echo $value['store_id']; ?>"><span><img src="<?php echo thumb($value,60);?>"></span></div>
        <?php } ?>
      </dd>
      <dt data-hideshow="online">Online Payment</dt>
      <dd data-hideshow="online" data-cod2-type="online">
        <?php foreach((array) $output['pay_goods_list']['online'] as $value) {?>
        <div class="goods-thumb" data-cod2-store="<?php echo $value['store_id']; ?>"><span><img src="<?php echo thumb($value,60);?>"></span></div>
        <?php } ?>
      </dd>
    </dl>
  </div>
</div>

<!-- 在线支付和货到付款组合时，显示弹出确认层内容 -->
<div id="confirm_offpay_goods_list" style="display: none;">
  <dl class="ncc-offpay-list" data-hideshow="offline">
    <dt>Products Support<strong>Cash On Delivery</strong></dt>
    <dd>
      <ul data-cod-type="offline">
        <?php foreach((array) $output['pay_goods_list']['offline'] as $value) {?>
        <li data-cod-store="<?php echo $value['store_id']; ?>"><span title="<?php echo $value['goods_name'];?>"><img src="<?php echo thumb($value,60);?>"></span></li>
        <?php } ?>
      </ul>
      <label>
        <input type="radio" value="" checked="checked">
        Cash On Delivery
      </label>
    </dd>
  </dl>
  <dl class="ncc-offpay-list" data-hideshow="online">
    <dt>Products Support<strong>Online Payment</strong></dt>
    <dd>
      <ul data-cod-type="online">
        <?php foreach((array) $output['pay_goods_list']['online'] as $value) {?>
        <li data-cod-store="<?php echo $value['store_id']; ?>"><span title="<?php echo $value['goods_name'];?>"><img src="<?php echo thumb($value,60);?>"></span></li>
        <?php } ?>
      </ul>
      <label>
        <input type="radio" value="" checked="checked">
        Online Payment
      </label>
    </dd>
  </dl>

  <div class="tc mt10 mb10"><a href="javascript:void(0);" class="ncbtn ncbtn-bittersweet" id="close_confirm_button">Confirm</a></div>
</div>
<script type="text/javascript">
$(function(){

var hybrid = <?php echo $output['ifshow_offpay'] === true && count($output['pay_goods_list']['online']) > 0 ? '1' : '0'; ?>;

var failInPage = false;

// 重新调整在线支付/到付的商品展示
var setCodGoodsShow = function() {
    var j = $('#allow_offpay_batch').val();
    var arr = {};
    if (j) {
        $.each(j.split(';'), function(k, v) {
            vv = v.split(':');
            arr[vv[0]] = vv[1] == '1' ? true : false;
        });
    }

    $.each(arr, function(k, v) {
        //console.log(''+k+':'+v);
        if (v) {
            $("[data-cod-type='online'] [data-cod-store='"+k+"']").appendTo("[data-cod-type='offline']");
            $("[data-cod-type='online'] [data-cod-store='"+k+"']").remove();

            $("[data-cod2-type='online'] [data-cod2-store='"+k+"']").appendTo("[data-cod2-type='offline']");
            $("[data-cod2-type='online'] [data-cod2-store='"+k+"']").remove();
        } else {
            $("[data-cod-type='offline'] [data-cod-store='"+k+"']").appendTo("[data-cod-type='online']");
            $("[data-cod-type='offline'] [data-cod-store='"+k+"']").remove();

            $("[data-cod2-type='offline'] [data-cod2-store='"+k+"']").appendTo("[data-cod2-type='online']");
            $("[data-cod2-type='offline'] [data-cod2-store='"+k+"']").remove();
        }
    });

    var off = $("[data-cod2-type='offline'] [data-cod2-store]").length;
    var on = $("[data-cod2-type='online'] [data-cod2-store]").length;

    $("[data-hideshow='offline']")[off ? 'show' : 'hide']();
    $("[data-hideshow='online']")[on ? 'show' : 'hide']();

    $("span[data-cod-nums='offline']").html(off);
    $("span[data-cod-nums='online']").html(on);

    failInPage = ! off;
    hybrid = off && on;

};

	//点击修改支付方式
    $('#edit_payment').on('click',function(){
        $('#edit_payment').parent().next().remove();
        $(this).hide();
        $('#paymentCon').addClass('current_box');
        $('#payment_list').show();
        if (chain_id != '') {
            $('#payment_type_offline').parent().hide();
            $('#payment_type_chain').parent().show();
        } else {
        	$('#payment_type_online').attr('checked',true);
        	$('#payment_type_chain').parent().hide();
        	$('#payment_type_offline').parent().show();
        }
        disableOtherEdit('To Edit, Save First');
    });
    //保存支付方式
    $('#hide_payment_list').on('click',function(){
        var payment_type = $('input[name="payment_type"]:checked').val();
        if ($('input[name="payment_type"]:checked').size() == 0) return;

        setCodGoodsShow();

        //判断该地区(县ID)是否能货到付款
        if (payment_type == 'offline' && ($('#allow_offpay').val() == '0' || failInPage)) {
            showDialog('Cash On Delivery Is Not Available in Your Area!', 'error','','','','','','','','',2);return;
        }
        $('#payment_list').hide();
        $('#edit_payment').show();
		$('.current_box').removeClass('current_box');
		if (payment_type == 'chain') {
			var content = 'Meetup';
		} else {
			var content = (payment_type == 'online' ? 'Online Payment' : 'Cash On Delivery');
		}

        $('#pay_name').val(payment_type);

        if (payment_type == 'offline'){
            //如果混合支付（在线+货到付款）
            if (hybrid) {
                content = $('#show_goods_list').clone().html();
                $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>You Chose COD + Online Payment<br/><a href="javsacript:void(0);" id="show_goods_list" class="ncc-payment-showgoods">'+content+'</a></li></ul></div>');
                $('#show_goods_list').hover(function(){showPayGoodsList(this)},function(){$('#ncc-payment-showgoods-list').fadeOut()});
            } else {
                $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>'+content+'</li></ul></div>');
            }
        }else{
            $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>'+content+'</li></ul></div>');
        }
        ableOtherEdit();
    });

//页面加载完毕后，默认选择货到付款

    $(document).ready(function(){

        var payment_type = $('input[name="payment_type"]:checked').val();
        if ($('input[name="payment_type"]:checked').size() == 0) return;

        setCodGoodsShow();

        //判断该地区(县ID)是否能货到付款
        if (payment_type == 'offline' && ($('#allow_offpay').val() == '0' || failInPage)) {
            showDialog('Cash On Delivery Is Not Available in Your Area!', 'error','','','','','','','','',2);return;
        }
        $('#payment_list').hide();
        $('#edit_payment').show();
        $('.current_box').removeClass('current_box');
        if (payment_type == 'chain') {
            var content = 'Meetup';
        } else {
            var content = (payment_type == 'online' ? 'Online Payment' : 'Cash On Delivery');
        }

        $('#pay_name').val(payment_type);

        if (payment_type == 'offline'){
            //如果混合支付（在线+货到付款）
            if (hybrid) {
                content = $('#show_goods_list').clone().html();
                $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>You Chose COD + Online Payment<br/><a href="javsacript:void(0);" id="show_goods_list" class="ncc-payment-showgoods">'+content+'</a></li></ul></div>');
                $('#show_goods_list').hover(function(){showPayGoodsList(this)},function(){$('#ncc-payment-showgoods-list').fadeOut()});
            } else {
                $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>'+content+'</li></ul></div>');
            }
        }else{
            $('#edit_payment').parent().after('<div class="ncc-candidate-items"><ul><li>'+content+'</li></ul></div>');
        }
        ableOtherEdit();
    });

//





    $('#show_goods_list').hover(function(){showPayGoodsList(this)},function(){$('#ncc-payment-showgoods-list').fadeOut()});
    function showPayGoodsList(item){
		var pos = $(item).position();
		var pos_x = pos.left+0;
		var pos_y = pos.top+25;
		$("#ncc-payment-showgoods-list").css({'left' : pos_x, 'top' : pos_y,'position' : 'absolute','display' : 'block'});
        $('#ncc-payment-showgoods-list').addClass('ncc-payment-showgoods-list').fadeIn();
    }
    $('input[name="payment_type"]').on('change',function(){
        if ($(this).val() == 'online'){
            $('#show_goods_list').hide();
        } else {
        	if ($(this).val() == 'offline') {
                setCodGoodsShow();
                //判断该地区(县ID)是否能货到付款
                if (($('#allow_offpay').val() == '0') || failInPage) {
                    $('#payment_type_online').attr('checked',true);
                    showDialog('Cash On Delivery Is Not Available', 'error','','','','','','','','',2);return;
                }
                html_form('confirm_pay_type', 'Confirm', $('#confirm_offpay_goods_list').html(), 500,1);
                $('#show_goods_list').show();
        	} else {
        	}
        }
    });

    $('body').on('click','#close_confirm_button',function(){
        DialogManager.close('confirm_pay_type');
    });
})
</script>