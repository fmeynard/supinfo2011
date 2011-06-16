<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($AgencyRoom->getAgency()),'dashboard_agency', $AgencyRoom->getAgency()); ?></li>
    <li><?php echo link_to(__('Formation Centers'),'agency/listAgencyRoom?slug='.$AgencyRoom->getAgency()->getSlug()); ?></li>
    <li><?php echo $AgencyRoom->getName(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Agency Room')?> : <?php echo $AgencyRoom->getName(); ?></h2>