<div id="formationSessionVehicles">
<div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createVehicleRegistration?id='.$formationSession->getId()); ?>">
  <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>
  
<?php if($formationSession->getVehiclesReservations()) : ?>
  <table>
    <thead>
      <tr>
        <th>Vehicles Reservations</th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($formationSession->getVehiclesReservations() as $reservation) : ?>
        <tr>
          <td><?php echo $reservation->getVehicle(); ?></td>
          <td><?php echo link_to('Delete','formationSession/deleteVehicleReservation?id='.$reservation->getId())?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  No vehicles registered
<?php endif; ?>
</div>