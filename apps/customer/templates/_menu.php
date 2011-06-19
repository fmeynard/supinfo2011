<div id="menu">
  <h1><?php echo __('Customer')?></h1>
  <ul>
    <li<?php if($sf_params->get('module') == 'marks') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/dashboard.png'); ?>
      <span><?php echo link_to(__('Grade'),'marks/index')?></span>
    </li>
    <li<?php if($sf_params->get('module') == 'sessionFormation') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/vehicles.png'); ?>
      <span><?php echo link_to(__('Formation'),'sessionFormation/index')?></span>
    </li>
  </ul>
</div>