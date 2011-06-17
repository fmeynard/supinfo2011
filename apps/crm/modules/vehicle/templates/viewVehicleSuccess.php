<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($vehicle->getAgency()),'agency/view?slug='.$vehicle->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Vehicles'),'vehicle/vehicles?slug='.$vehicle->getAgency()->getSlug()); ?></li>
    <li><?php echo $vehicle; ?></li>
  </ul>
</div>

<h1 class="afterSub"><?php echo $vehicle; ?></h1>