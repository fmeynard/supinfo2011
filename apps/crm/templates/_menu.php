<div id="menu">
  <h1><?php echo __('CRM - Admin')?></h1>
  <ul>
    <li<?php if($sf_params->get('module') == 'dashboard') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/dashboard.png'); ?>
      <span><?php echo link_to(__('Dashboard'),'@homepage')?></span>
    </li>
    <li<?php if($sf_params->get('module') == 'user') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/users.png'); ?>
      <span><?php echo link_to(__('Users'),'user/index')?></span>
    </li>
    <li<?php if($sf_params->get('module') == 'vehicle') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/vehicles.png'); ?>
      <span><?php echo link_to(__('Vehicles'),'vehicle/index')?></span>
    </li>
    <li <?php if($sf_params->get('module') == 'agency') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/agency.png')?>
      <span><?php echo link_to(__('Agency'), 'agency/index')?></span>
    </li>
    <li <?php if($sf_params->get('module') == 'category') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/category.png')?>
      <span><?php echo link_to(__('Category'), 'category/index')?></span>
    </li>
    <li <?php if($sf_params->get('module') == 'settings') : ?> class="current"<?php endif; ?>>
      <?php echo image_tag('/images/crm/res/settings.png'); ?>
      <span><?php echo link_to(__('Settings'),'settings/index'); ?></span>
    </li>
  </ul>
</div>