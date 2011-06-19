<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($form->getOption('user')->getProfile()->getAgency()),'agency/view?slug='.$form->getOption('user')->getProfile()->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Teachers'),'user/listTeachers?slug='.$form->getOption('user')->getProfile()->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to($form->getOption('user')->getProfile()->getFullname(),'user/viewTeacher?slug='.$form->getOption('user')->getProfile()->getSlug()); ?></li>
    <li>New UnAvailibility</li>
  </ul>
</div>

<br /><br />

<h2>New UnAvailibility</h2>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('user/createTeacherAvailibility?id='.$form->getOption('user')->getId()); ?>">
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