<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($formationCenter->getAgency()),'agency/view?slug='.$formationCenter->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Formation Centers'),'formationCenter/listFormationCenter?slug='.$formationCenter->getAgency()->getSlug()); ?></li>
    <li><?php echo $formationCenter->getName(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Formation Center')?> : <?php echo $formationCenter->getName(); ?></h2>