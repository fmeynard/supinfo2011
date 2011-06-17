<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View','formationSession/viewFormationSession?id='.$item->getId())?>
  <li class="rowEdit"><?php echo link_to('Edit','formationSession/editFormationSession?id='.$item->getId())?>
    <li class="rowEdit"><?php echo link_to('Delete','formationSession/deleteFormationSession?id='.$item->getId())?>
</ul>