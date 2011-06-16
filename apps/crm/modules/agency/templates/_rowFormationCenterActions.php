<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View', 'agency/viewFormationCenter?id='.$item->getId())?></li>
  <li class="rowEdit"><?php echo link_to('Edit', 'agency/editFormationCenter?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'agency/deleteFormationCenter?id='.$item->getId())?></li>
</ul>