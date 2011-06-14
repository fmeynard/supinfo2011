<?php include_partial('subMenu')?>
<h1 class="afterSub"><?php echo __('Dashboard')?> : <?php echo __('Users')?></h1>

<div>
<ul id="dashLinks">
  <li>Test</li>
  <li>Test</li>
</ul>
  <div style="clear: both"></div>
</div>

<h2><?php echo __('Last users')?></h2>

<div id="sf_admin_content">
  <?php if($lastUsers) : ?>
  <table>
    <thead>
      <tr>
        <th><?php echo __('Username')?></th>
        <th><?php echo __('Firstname')?></th>
        <th><?php echo __('LastName')?></th>
        <th><?php echo __('Agency')?></th>
        <th class="sf_admin_list_th_actions"><?php echo __('Actions')?></th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0;?>
      <?php foreach($lastUsers as $user) : ?>
      <tr class="<?php if($i % 2) echo "odd"; else echo "even"; ?>">
        <td><?php echo $user->getSfGuardUser()->getUsername(); ?></td>
        <td><?php echo $user->getFirstName()?></td>
        <td><?php echo $user->getLastName()?></td>
        <td><?php echo $user->getAgency()?></td>
        <td></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach;?>
    </tbody>
  </table>
  <?php else: ?>
    test
  <?php endif;?>
</div>