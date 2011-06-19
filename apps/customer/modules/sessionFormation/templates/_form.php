<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('sessionFormation/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('sessionFormation/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'sessionFormation/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['formation_type_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['formation_type_id']->renderError() ?>
          <?php echo $form['formation_type_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['capacity']->renderLabel() ?></th>
        <td>
          <?php echo $form['capacity']->renderError() ?>
          <?php echo $form['capacity'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['date_start']->renderLabel() ?></th>
        <td>
          <?php echo $form['date_start']->renderError() ?>
          <?php echo $form['date_start'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['date_end']->renderLabel() ?></th>
        <td>
          <?php echo $form['date_end']->renderError() ?>
          <?php echo $form['date_end'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
