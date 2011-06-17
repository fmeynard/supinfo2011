<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($formationSession->getAgency()),'agency/view?slug='.$formationSession->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Formation Sessions'),'formationSession/listFormationSession?slug='.$formationSession->getAgency()->getSlug()); ?></li>
    <li><?php echo $formationSession; ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Formation Session')?> : <?php echo $formationSession->getName(); ?></h2>

<div class="beforeTableActions">
  <form method="post" action="<?php echo url_for('formationSession/createParticipation?id='.$formationSession->getId()); ?>">
  <?php echo $addForm; ?> <input type="submit" value="add" class="smallAdd"/>
  </form>
</div>

<?php if($participationsValidated = $formationSession->getValidatedParticipations()) : ?>
  <table>
    <thead>
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