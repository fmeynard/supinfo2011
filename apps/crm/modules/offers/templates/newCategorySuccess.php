<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Offers'),'offers/index'); ?></li>
    <li><?php echo link_to(__('Categories'),'offers/listCategory'); ?></li>
    <li><?php echo __('New')?></li>
  </ul>
</div>
<br /><br />
<h2>New Category</h2>

<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('offers/createCategory'); ?>" >
     <fieldset>
       <?php echo $form; ?>
    </fieldset>
    <input type="submit" value="Save" />
  </div>
</div>