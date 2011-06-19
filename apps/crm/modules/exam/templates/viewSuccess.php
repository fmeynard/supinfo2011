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
<ul id="toggleUl">
  <li id="examView" class="active"><?php echo link_to('Edit', 'exam/editExam?id='.$exam->getId())?></li>
</ul>
<div style="clear: both"></div>
<div id="customersPackages-div" class="toggle">
<table>
    <tr>
      <td class="title">Date :</td>
      <td><?php echo $exam->getDate()?></td>
    </tr>
    <tr>
      <td class="title">Formation Type : </td>
      <td><?php echo $exam->getFormationType(); ?></td>
    </tr>
    <tr>
      <td class="title">Capacity :</td>
      <td><?php echo $exam->getCapacity()?></td>
    </tr>
</table>
</div>

<ul id="toggleUl">
  <li id="examGrades" class="active">Grades</li>
</ul>
<div style="clear: both"></div>
<div id="examGrades-div" class="toggle">
    <div class="registrationAvailableUsers">
<?php $avgUsers = $exam->getAvailableUsers(); ?>
    <?php echo link_to('Registration process','exam/registrationProcess?id='.$exam->getId())?>
<table>
  <thead>
    <tr>
      <th>Customer</th>
      <th>AVG</th>
      <th>Actions</th>
    </tr>
  </thead>  
  <tbody>
      <?php $x=0; ?>
    <?php foreach($avgUsers['averages'] as $id => $current) : ?>
      <?php if(!$exam->isRegistered($id)) : ?>
    <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
      <td><?php echo $avgUsers['users'][$id]?></td>
      <td><?php echo $current; ?></td>
      <td class="actions"><?php echo link_to('Add', 'exam/addExamToUser?user='.$id.'&exam='.$exam->getId())?>
    </tr>
    <?php endif; ?>
    <?php $x++; ?>
      <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<ul id="toggleUl">
  <li id="examGrades" class="active">Participation</li>
</ul>
<div style="clear: both"></div>
<div id="registrationParticipationUsers-div" class="toggle">
  <table>
    <thead>
      <tr>
        <th>Customer</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $x = 0; ?>
      <?php foreach($exam->getParticipations() as $participation) :?>
        <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
          <td><?php echo $participation->getCustomer()->getProfile()->getFullname(); ?></td>
          <td class="actions"><?php echo link_to('Delete', 'exam/deleteExamUser?id='.$participation->getId())?></td>
      <?php $x++; ?>
                  <?php endforeach; ?>
    </tbody>
  </table>
</div>

