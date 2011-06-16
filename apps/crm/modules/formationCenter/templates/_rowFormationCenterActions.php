<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View', 'formationCenter/viewFormationCenter?id='.$item->getId())?></li>
  <li class="rowEdit"><?php echo link_to('Edit', 'formationCenter/editFormationCenter?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'formationCenter/deleteFormationCenter?id='.$item->getId())?></li>
</ul>