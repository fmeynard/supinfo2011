<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($formationSession->getAgency()),'agency/view?slug='.$formationSession->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Formation Sessions'),'formationSession/listFormationSession?slug='.$formationSession->getAgency()->getSlug()); ?></li>
    <li><?php echo $formationSession; ?></li>
    <li>Grades</li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Grade'); ?> : <?php echo $formationSession->getName(); ?></h2>

<form method="post" action="<?php echo url_for('formationSession/updateGrades?id='.$formationSession->getId()); ?>">
<?php echo $form; ?>
<input type="submit" value="Save" />
</form>