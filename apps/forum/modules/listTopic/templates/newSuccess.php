<h1>New Topic</h1>
<?php if($sf_user->isAuthenticated()): ?>
<?php include_partial('form', array('form' => $form)) ?>
<?php else: ?>
<center>You need to log in first.</center>
<?php endif; ?>
