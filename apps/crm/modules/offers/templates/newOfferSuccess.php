<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Offers'),'offers/index'); ?></li>
    <li><?php echo link_to(__('Single Offers'),'offers/listOffer'); ?></li>
    <li><?php echo __('New')?></li>
  </ul>
</div>
<br /><br />
<h2>New Offer</h2>

<div id="sf_admin_content">
  <div class="sf_admin_form">
    <form method="post" action="<?php echo url_for('offers/createOffer'); ?>" >
     <fieldset>
       <?php echo $form; ?>
    </fieldset>
    <input type="submit" value="Save" />
  </div>
</div>