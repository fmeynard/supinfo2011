<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($agency),'dashboard_agency', $agency); ?></li>
    <li><?php echo link_to(__('Employees'),'agency_employees', $agency); ?></li>
    <li><?php echo __('New'); ?></li>
  </ul>
</div>

<br /><br />

<h2>New Employee</h2>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('agency_employee_create', $agency); ?>">
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