<?php echo $agency; ?>
<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('agency_create_vehicle', $agency); ?>" >
     <fieldset>
      <?php echo $form->renderHiddenFields(false) ?>

      <?php if ($form->hasGlobalErrors()): ?>
        <?php echo $form->renderGlobalErrors() ?>
      <?php endif; ?>
       
      <div class="sf_admin_form_row<?php $form["vehicle_type_id"]->hasError() and print ' errors' ?>">
        <?php echo $form["vehicle_type_id"]->renderError() ?>
        <div>
          <?php echo $form["vehicle_type_id"]->renderLabel() ?>

          <div class="content"><?php echo $form["vehicle_type_id"]->render() ?></div>

          <?php if ($form["vehicle_type_id"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="sf_admin_form_row<?php $form["name"]->hasError() and print ' errors' ?>">
        <?php echo $form["name"]->renderError() ?>
        <div>
          <?php echo $form["name"]->renderLabel() ?>

          <div class="content"><?php echo $form["name"]->render() ?></div>

          <?php if ($form["name"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="sf_admin_form_row<?php $form["brand"]->hasError() and print ' errors' ?>">
        <?php echo $form["name"]->renderError() ?>
        <div>
          <?php echo $form["brand"]->renderLabel() ?>

          <div class="content"><?php echo $form["brand"]->render() ?></div>

          <?php if ($form["name"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="sf_admin_form_row<?php $form["model"]->hasError() and print ' errors' ?>">
        <?php echo $form["model"]->renderError() ?>
        <div>
          <?php echo $form["model"]->renderLabel() ?>

          <div class="content"><?php echo $form["model"]->render() ?></div>

          <?php if ($form["model"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="sf_admin_form_row<?php $form["year"]->hasError() and print ' errors' ?>">
        <?php echo $form["year"]->renderError() ?>
        <div>
          <?php echo $form["year"]->renderLabel() ?>

          <div class="content"><?php echo $form["year"]->render() ?></div>

          <?php if ($form["year"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="sf_admin_form_row<?php $form["purchase_date"]->hasError() and print ' errors' ?>">
        <?php echo $form["purchase_date"]->renderError() ?>
        <div>
          <?php echo $form["purchase_date"]->renderLabel() ?>

          <div class="content"><?php echo $form["purchase_date"]->render() ?></div>

          <?php if ($form["purchase_date"]->renderHelp()): ?>
            <div class="help"><?php echo $help ?></div>
          <?php endif; ?>
        </div>
      </div>
    </fieldset>
    <ul class="sf_admin_action_list">
      <li class="sf_admin_action_save">
        <input type="submit" value="<?php echo __('Save'); ?>" />
      </li>
    </ul>
    </form>
  </div>
</div>