<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($form->getObject()->getAgency()),'dashboard_agency', $form->getObject()->getAgency()); ?></li>
    <li><?php echo link_to(__('Formation Centers'),'agency/listFormationCenter?slug='.$form->getObject()->getAgency()->getSlug()); ?></li>
    <li><?php echo __('Edit'); ?> : <?php echo $form->getObject()->getName()?></li>
  </ul>
</div>

<br /><br />

<h2>Edit Formation Center : <?php echo $form->getObject()->getName(); ?></h2>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('agency/updateFormationCenter?id='.$form->getObject()->getId()); ?>">
    <fieldset>
      <?php echo $form; ?>
    </fieldset>
    <ul class="sf_admin_action_list">
      <li class="sf_admin_action_save">
        <input type="submit" value="<?php echo __('Save'); ?>" />
      </li>
    </ul>
    </form>
  </div>
</div>