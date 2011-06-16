<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li>Dashboard</li>
  </ul>
</div>

<h1 class="afterSub"><?php echo __('Agency')?> <?php echo __('Dashboard')?> : <?php echo $agency->getName(); ?></h1>

<ul id="dashLinks">
  <li><?php echo link_to(__('Customers'),'user/listCustomers?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Vehicles'),'vehicle/vehicles?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Employees'),'user/listEmployees?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Formations Center'),'formationCenter/listFormationCenter?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Agency Rooms'),'agencyRoom/listAgencyRoom?slug='.$agency->getSlug()); ?></li>
  <li><?php echo link_to(__('Formation Sessions'),'formationSession/listFormationSession?slug='.$agency->getSlug()); ?></li>
</ul>