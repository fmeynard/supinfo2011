<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($user->getAgency()),'dashboard_agency', $user->getAgency()); ?></li>
    <li><?php echo link_to(__('Customers'),'agency_customers',$user->getAgency()); ?></li>
    <li><?php echo $user->getFullname(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Customer')?> : <?php echo $user->getFullname(); ?></h2>