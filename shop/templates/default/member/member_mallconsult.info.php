<?php defined('ShopNC_CLUB') or exit('Access Invalid!');?>

<div class="ncm-flow-layout">
  <div id="ncmInformFlow" class="ncm-flow-container">
    <div class="title">
      <h3>Inquiry</h3>
    </div>
    <div class="ncm-flow-step">
      <dl class="step-first current">
        <dt>Fill up Form</dt>
        <dd class="bg"></dd>
      </dl>
      <dl class="<?php if ($output['consult_info']['is_reply'] == 1) {?>current<?php }?>">
        <dt>Support Reply</dt>
        <dd class="bg"> </dd>
      </dl>
      <dl class="<?php if ($output['consult_info']['is_reply'] == 1) {?>current<?php }?>">
        <dt>Complete</dt>
        <dd class="bg"> </dd>
      </dl>
    </div>
    <div class="ncm-default-form">
      <dl>
        <dt>Type<?php echo $lang['nc_colon'];?></dt>
        <dd>
          <?php echo $output['type_list'][$output['consult_info']['mct_id']]['mct_name'];?>
        </dd>
      </dl>
      <dl>
        <dt>Content<?php echo $lang['nc_colon'];?></dt>
        <dd>
          <?php echo $output['consult_info']['mc_content'];?>
        </dd>
      </dl>
      <dl>
        <dt>Time<?php echo $lang['nc_colon'];?></dt>
        <dd>
          <?php echo date('Y-m-d H:i:s', $output['consult_info']['mc_addtime']);?>
        </dd>
      </dl>
      <dl>
        <dt>Status<?php echo $lang['nc_colon'];?></dt>
        <dd>
          <?php echo $output['state'][$output['consult_info']['is_reply']];?>
        </dd>
      </dl>
      <?php if ($output['consult_info']['is_reply'] == 1) {?>
      <dl>
        <dt>Reply<?php echo $lang['nc_colon'];?></dt>
        <dd>
          <?php echo $output['consult_info']['mc_reply'];?>
        </dd>
      </dl>
      <?php }?>
      <div class="bottom"><a href="javascript:history.go(-1);" class="ncbtn ml10">Back to List</a></div>
    </div>
  </div>
</div>
