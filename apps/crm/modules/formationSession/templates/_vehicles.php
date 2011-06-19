<div id="formationSessionVehicles">
    <ul id="toggleUl">
  <li id="vehicles" class="active">Vehicles Reservation</li>
</ul>
<div style="clear: both"></div>
<div id="vehicles-div" class=" toggle">
<div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createVehicleRegistration?id='.$formationSession->getId()); ?>">
  <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>
  
<?php if($formationSession->getVehiclesReservations()) : ?>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $x=0; ?>
      <?php foreach($formationSession->getVehiclesReservations() as $reservation) : ?>
        <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
          <td><?php echo $reservation->getVehicle(); ?></td>
          <td class="actions"><?php echo link_to('Delete','formationSession/deleteVehicleReservation?id='.$reservation->getId())?></td>
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