<h1>New Forum</h1>

<?php if($sf_user->IsSuperAdmin()): ?>
<?php include_partial('form', array('form' => $form)) ?>
<?php else: ?>
<center>You need to be an administrator.</center>
<?php endif; ?>