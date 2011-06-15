<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Offers'),'offers/index'); ?></li>
    <li><?php echo link_to(__('Categories'),'offers/listCategory'); ?></li>
    <li><?php echo $form->getObject()->getName(); ?></li>
  </ul>
</div>
<br /><br />
<h2>Edit Category : <?php echo $form->getObject()->getName(); ?></h2>

<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('offers/updateCategory?id='.$form->getObject()->getId()); ?>" >
     <fieldset>
       <?php echo $form; ?>
    </fieldset>
    <input type="submit" value="Save" />
  </div>
</div>