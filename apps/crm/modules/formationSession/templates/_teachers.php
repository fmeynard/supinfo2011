<div id="formationSessionVehicles">
<ul id="toggleUl">
  <li id="teachers" class="active">Teachers</li>
</ul>
<div style="clear: both"></div>
<div id="teachers-div" class=" toggle">
    <div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createTeacherRegistration?id='.$formationSession->getId()); ?>">
  <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>

<?php if($formationSession->getTeachersRegistrations()) : ?>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $x = 0; ?>
      <?php foreach($formationSession->getTeachersRegistrations() as $registration) : ?>
        <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
          <td><?php echo $registration->getSfGuardUser()->getProfile()->getFullname(); ?></td>
          <td class="actions"><?php echo link_to('Delete','formationSession/deleteTeacherRegistration?id='.$registration->getId())?></td>
        </tr>
        <?php $x++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  No vehicles registered
<?php endif; ?>
</div>
</div>