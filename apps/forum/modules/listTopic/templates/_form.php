<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('listTopic/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('listTopic/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'listTopic/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['title']->renderLabel() ?></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_sticked']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_sticked']->renderError() ?>
          <?php echo $form['is_sticked'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_locked']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_locked']->renderError() ?>
          <?php echo $form['is_locked'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['forum_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['forum_id']->renderError() ?>
          <?php echo $form['forum_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['latest_post_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['latest_post_id']->renderError() ?>
          <?php echo $form['latest_post_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['user_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['user_id']->renderError() ?>
          <?php echo $form['user_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nb_posts']->renderLabel() ?></th>
        <td>
          <?php echo $form['nb_posts']->renderError() ?>
          <?php echo $form['nb_posts'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nb_views']->renderLabel() ?></th>
        <td>
          <?php echo $form['nb_views']->renderError() ?>
          <?php echo $form['nb_views'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['slug']->renderLabel() ?></th>
        <td>
          <?php echo $form['slug']->renderError() ?>
          <?php echo $form['slug'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
