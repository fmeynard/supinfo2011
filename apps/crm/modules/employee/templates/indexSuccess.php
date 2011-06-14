<?php use_helper('I18N', 'Date') ?>
<?php include_partial('employee/assets') ?>
<?php include_partial('user/subMenu')?>
bite
<div id="sf_admin_container">
  <h1 class="afterSub"><?php echo __('Employee List', array(), 'messages') ?></h1>

  <?php include_partial('employee/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('employee/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('employee/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('sf_guard_user_profile_employee_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('employee/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('employee/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('employee/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('employee/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
