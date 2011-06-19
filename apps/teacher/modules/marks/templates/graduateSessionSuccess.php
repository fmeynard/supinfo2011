<h2><?php echo __('Grade'); ?> : <?php echo $formationSession->getName(); ?></h2>

<form method="post" action="<?php echo url_for('marks/updateGrades?id='.$formationSession->getId()); ?>">
<?php echo $form; ?>
<input type="submit" value="Save" />
</form>