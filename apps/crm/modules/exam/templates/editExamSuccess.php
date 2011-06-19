<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($form->getObject()->getAgency()),'agency/view?slug='.$form->getObject()->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Exams'),'exam/index?slug='.$form->getObject()->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__($form->getObject()), 'exam/view?id='.$form->getObject()->getId()); ?></li>
    <li><?php echo __('Edit'); ?></li>
  </ul>
</div>

<br /><br />

<h2>Edit Exam : <?php echo $form->getObject(); ?></h2>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('exam/updateExam?id='.$form->getObject()->getId()); ?>">
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