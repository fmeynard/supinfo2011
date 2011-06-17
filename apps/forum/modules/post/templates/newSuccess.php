<h1>New Reply</h1>

<?php if($sf_user->IsAuthenticated()): ?>
<?php include_partial('form', array('form' => $form)) ?>
<?php else: ?>
<center>You need to be logged.</center>
<?php endif; ?>