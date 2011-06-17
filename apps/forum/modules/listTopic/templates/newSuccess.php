<h1>New Topic</h1>
<?php if($sf_user->isAuthenticated()): ?>
<form method="post" action="<?php echo url_for('listTopic/create?idForum='.$form->getOption('idForum')); ?>">
<?php echo $form; ?>
<input type="submit" value="Create" />
</form>
<?php else: ?>
<center>You need to log in first.</center>
<?php endif; ?>