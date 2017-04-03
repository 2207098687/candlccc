<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="ncm-flow-layout">
  <div class="ncm-flow-container">
    <div class="title"><a href="javascript:history.go(-1);" class="ncbtn-mini fr"><i class="icon-reply"></i>Back</a>
      <h3><?php echo $lang['member_evaluation_toevaluategoods'];?></h3>
    </div>
    <form id="evalform" method="post" action="index.php?act=member_evaluate&op=add_again&order_id=<?php echo $_GET['order_id'];?>">
      <input type="hidden" name="form_submit" value="ok" />
      <div class="alert alert-block">
        <h4>Tips: </h4>
        <ul>
          <li><?php echo $lang['member_evaluation_rule_3'];?></li>
          <li><?php echo $output['ruleexplain'];?></li>
          <li><?php echo $lang['member_evaluation_rule_4'];?></li>
          <li>Please Use jpg\jpeg\png Formats Image; Single Image Should Not Exceed 1M, Maximum of 5 Pics.</li>
        </ul>
      </div>
      <div class="tabmenu">
        <ul class="tab">
          <li class="active"><a href="javascript:void(0);">Additional Review</a></li>
        </ul>
      </div>
      <table class="ncm-default-table mb30">       
        <tbody>
         
          <?php if(!empty($output['evaluate_goods'])){?>
          <?php foreach($output['evaluate_goods'] as $goods){?>
          <tr class="bd-line">
          <td class="w20"></td>
            <td class="pic-mode w200"><div class="pic-thumb"><a href="index.php?act=goods&goods_id=<?php echo $goods['geval_goodsid']; ?>" target="_blank"><img src="<?php echo $goods['geval_goodsimage']; ?>"/></a></div><dl class="goods-name">
                <dt><a href="index.php?act=goods&goods_id=<?php echo $goods['goods_id'];?>" target="_blank" title="<?php echo $goods['geval_goodsname'];?>"><?php echo $goods['geval_goodsname'];?></a></dt>
              </dl></td>
            
            <td valign="top" class="tl">
              <div class="first-time"><strong>First Review: </strong><?php echo $goods['geval_content']?></div>
              <textarea name="goods[<?php echo $goods['geval_id'];?>][comment]" cols="150" class="w450 mt10 mb10 h40" placeholder="Pls Fill up with Review Comments within 150 Words."></textarea>
              <div class="show-pic">
                <div class="ncm-upload-btn fl">
                  <a href="javascript:void(0);">
                    <span><input type="file" hidefocus="true" size="1" class="input-file" name="file" id="file<?php echo $goods['geval_id'];?>" multiple></span>
                    <p><i class="icon-camera" data_type="0"></i>Images</p>
                  </a>
                </div><div class="ml5 mt5 fl">Allowed 5 Images</div>
                <div class="evaluation-image"><ul nctype="ul_evaluate_image<?php echo $goods['geval_id'];?>" data-count='0'></ul></div>
               </div>
            </td>
          </tr>
          <?php }?>
          <?php }?>
        </tbody>
      </table>
      <div class="ncm-default-form">
        <div class="bottom">
          <label class="submit-border">
            <input id="btn_submit" type="button" class="submit" value="<?php echo $lang['member_evaluation_submit'];?>"/>
          </label>
        </div>
      </div>
    </form>
  </div>
  <div class="ncm-flow-item">
  <?php if (!$output['store_info']['is_own_shop']) { ?>
    <?php require('evaluation.store_info.php');?>
  <?php } ?>
  </div>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.fileupload.js" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
    $('#btn_submit').on('click', function() {
		ajaxpost('evalform', '', '', 'onerror')
    });
    <?php if(!empty($output['evaluate_goods'])){?>
    <?php foreach($output['evaluate_goods'] as $goods){?>
    // 图片上传
    $('#file<?php echo $goods['geval_id'];?>').fileupload({
        dataType: 'json',
        url: '<?php echo urlShop('sns_album', 'swfupload');?>',
        formData: '',
        add: function (e,data) {
            var $count = parseInt($('ul[nctype="ul_evaluate_image<?php echo $goods['geval_id'];?>"]').attr('data-count'));
            if ($count >= 5) {
                return false;
            }
            $('ul[nctype="ul_evaluate_image<?php echo $goods['geval_id'];?>"]').attr('data-count', $count +1);
            data.formData = {category_id:<?php echo $output['ac_id'];?>};
            data.submit();
        },
        done: function (e,data) {
            if(data.result.state == 'true') {
                $('<li>' +
                        '<div class="upload-thumb" nctype="image_item">' +
                        '<img src="' + data.result.file_url + '"><input type="hidden" nctype="input_image" name="goods[<?php echo $goods['geval_id'];?>][evaluate_image][]" value=" ' + data.result.file_name + ' " >' +
                        '<a href="javascript:;" nctype="del" data-file-id="' + data.result.file_id + '" class="del" title="Remove">X</a>' +
                        '</div></li>').appendTo('ul[nctype="ul_evaluate_image<?php echo $goods['geval_id'];?>"]');
            } else {
                showError(data.result.message);
            }
        }
    });
    <?php }?>
    <?php }?>
    $('ul[nctype^="ul_evaluate_image"]').on('click', '[nctype="del"]', function() {
        album_pic_del($(this).attr('data-file-id'));
        var $item_li = $(this).parents('li:first');
        var $item_ul = $item_li.parents('ul:first');
        $item_li.find('[nctype="input_image"]').val('');
        $item_li.remove();
        $item_ul.attr('data-count', $item_ul.attr('data-count') -1);
    });

    var album_pic_del = function(file_id) {
        var del_url = "<?php echo urlShop('sns_album', 'album_pic_del');?>";
        del_url += '&id=' + file_id;
        $.get(del_url);
    }
});
</script>
