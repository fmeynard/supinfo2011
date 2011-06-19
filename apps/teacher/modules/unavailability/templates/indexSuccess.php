<h1>Teacher unavailabilitys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Sf guard user</th>
      <th>Date start</th>
      <th>Date end</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($teacher_unavailabilitys as $teacher_unavailability): ?>
    <tr>
      <td><a href="<?php echo url_for('unavailability/edit?id='.$teacher_unavailability->getId()) ?>"><?php echo $teacher_unavailability->getId() ?></a></td>
      <td><?php echo $teacher_unavailability->getSfGuardUserId() ?></td>
      <td><?php echo $teacher_unavailability->getDateStart() ?></td>
      <td><?php echo $teacher_unavailability->getDateEnd() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('unavailability/new') ?>">New</a>
