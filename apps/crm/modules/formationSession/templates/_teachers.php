<div id="formationSessionVehicles">
<div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createTeacherRegistration?id='.$formationSession->getId()); ?>">
  <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>
  
<?php if($formationSession->getTeachersRegistrations()) : ?>
  <table>
    <thead>
      <tr>
        <th>Teachers</th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($formationSession->getTeachersRegistrations() as $registration) : ?>
        <tr>
          <td><?php echo $registration->getSfGuardUser()->getProfile()->getFullname(); ?></td>
          <td><?php echo link_to('Delete','formationSession/deleteTeacherRegistration?id='.$registration->getId())?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  No vehicles registered
<?php endif; ?>
</div>