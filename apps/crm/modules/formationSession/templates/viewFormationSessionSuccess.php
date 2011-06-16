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