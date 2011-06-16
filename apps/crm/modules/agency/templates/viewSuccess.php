<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li>Dashboard</li>
  </ul>
</div>

<h1 class="afterSub"><?php echo __('Agency')?> <?php echo __('Dashboard')?> : <?php echo $agency->getName(); ?></h1>

<ul id="dashLinks">
  <li><?php echo link_to(__('Customers'),'agency_customers',$agency); ?></li>
  <li><?php echo link_to(__('Vehicles'),'dashboard_vehicles', $agency); ?></li>
  <li><?php echo link_to(__('Employees'),'agency_employees',$agency); ?></li>
  <li><?php echo link_to(__('Formations Center'),'agency/listFormationCenter?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Agency Rooms'),'agency/listAgencyRoom?slug='.$agency->getSlug()); ?></li>
</ul>