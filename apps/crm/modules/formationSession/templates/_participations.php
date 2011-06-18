<div id="participations">
<div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createParticipation?id='.$formationSession->getId()); ?>">
  <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>
  
<?php if($formationSession->getNotValidatedParticipations()->count()) : ?>
  <table>
    <thead>
      <tr>
        <th>Awaiting Confirmation</th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($formationSession->getNotValidatedParticipations() as $participation) : ?>
        <tr>
          <td><?php echo $participation->getSfGuardUser()->getProfile()->getFullname(); ?></td>
          <td>
            <?php echo link_to('Validate','formationSession/validateParticipation?id='.$participation->getId()); ?>
            <?php echo link_to('Delete','formationSession/deleteParticipation?id='.$participation->getId())?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<?php if($participationsValidated = $formationSession->getValidatedParticipations()) : ?>
  <table>
    <thead>
      <tr>
        <th>Confirmed</th><th><?php echo link_to('Marks', 'formationSession/graduateSession?id='.$formationSession->getId())?></th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($participationsValidated as $participation) : ?>
        <tr>
          <td><?php echo $participation->getSfGuardUser()->getProfile()->getFullname(); ?></td>
          <td><?php echo link_to('Delete','formationSession/deleteParticipation?id='.$participation->getId())?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  Nobody registered
<?php endif; ?>
</div>