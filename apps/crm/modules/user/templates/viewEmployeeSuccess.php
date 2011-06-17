<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($user->getAgency()),'agency/view?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Employees'),'user/listEmployees?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo $user->getFullname(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Employee')?> : <?php echo $user->getFullname(); ?></h2>