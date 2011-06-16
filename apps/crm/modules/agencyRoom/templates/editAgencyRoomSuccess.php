<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($form->getObject()->getAgency()),'agency/view?slug='.$form->getObject()->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Agency Rooms'),'agencyRoom/listAgencyRoom?slug='.$form->getObject()->getAgency()->getSlug()); ?></li>
    <li><?php echo __('Edit'); ?> : <?php echo $form->getObject()->getName()?></li>
  </ul>
</div>

<br /><br />

<h2>Edit Agency Room : <?php echo $form->getObject()->getName(); ?></h2>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('agencyRoom/updateAgencyRoom?id='.$form->getObject()->getId()); ?>">
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