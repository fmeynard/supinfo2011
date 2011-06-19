<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($exam->getAgency()),'agency/view?slug='.$exam->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Exams'),'exam/index?slug='.$exam->getAgency()->getSlug()); ?></li>
    <li><?php echo $exam; ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Exam')?> : <?php echo $exam; ?></h2>

<table>
  <thead>
    <tr>
      <th><?php echo link_to('Edit', 'exam/editExam?id='.$exam->getId())?></th>
    </tr>
  <tbody>
    <tr>
      <td>Date :</td>
      <td><?php echo $exam->getDate()?></td>
    </tr>
    <tr>
      <td>Formation Type : </td>
      <td><?php echo $exam->getFormationType(); ?></td>
    </tr>
    <tr>
      <td>Capacity :</td>
      <td><?php echo $exam->getCapacity()?></td>
    </tr>
  </tbody>
</table>

<div class="registrationAvailableUsers">
<?php $avgUsers = $exam->getAvailableUsers(); ?>

<table>
  <thead>
    <tr>
      <th>Customer</th>
      <th>AVG</th>
    </tr>
    <tr>
      <th><?php echo link_to('Registration process','exam/registrationProcess?id='.$exam->getId())?></th>
    </tr>
  </thead>  
  <tbody>
    <?php foreach($avgUsers['averages'] as $id => $current) : ?>
      <?php if(!$exam->isRegistered($id)) : ?>
    <tr>
      <td><?php echo $avgUsers['users'][$id]?></td>
      <td><?php echo $current; ?></td>
      <td><?php echo link_to('Add', 'exam/addExamToUser?user='.$id.'&exam='.$exam->getId())?>
    </tr>
    <?php endif; ?>
      <?php endforeach; ?>
  </tbody>
</table>
</div>

<div class="registrationParticipationUsers">
  <table>
    <thead>
      <tr>
        <th>Customer</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($exam->getParticipations() as $participation) :?>
        <tr>
          <td><?php echo $participation->getCustomer()->getProfile()->getFullname(); ?></td>
          <td><?php echo link_to('Delete', 'exam/deleteExamUser?id='.$participation->getId())?></td>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

