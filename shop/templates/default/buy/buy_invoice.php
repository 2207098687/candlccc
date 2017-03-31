<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="ncc-receipt-info"><div class="ncc-receipt-info-title">
  <h3>Sales Invoice</h3>
  <a href="javascript:void(0)" nc_type="buy_edit" id="edit_invoice">[Edit]</a></div>
  <div id="invoice_list" class="ncc-candidate-items">
    <ul>
      <li><?php echo $output['inv_info']['content'];?></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
//隐藏发票列表
function hideInvList(content) {
    $('#edit_invoice').show();
	$("#invoice_list").html('<ul><li>'+content+'</li></ul>');
	$('.current_box').removeClass('current_box');
	ableOtherEdit();
	//重新定位到顶部
	$("html, body").animate({ scrollTop: 0 }, 0);
}
//加载发票列表
$('#edit_invoice').on('click',function(){
    $(this).hide();
    disableOtherEdit('To Modify, Save First');
    $(this).parent().parent().addClass('current_box');
    $('#invoice_list').load(SITEURL+'/index.php?act=buy&op=load_inv&vat_hash=<?php echo $output['vat_hash'];?>');
});
</script>