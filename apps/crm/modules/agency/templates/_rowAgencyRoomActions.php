<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View', 'agency/viewAgencyRoom?id='.$item->getId())?></li>
  <li class="rowEdit"><?php echo link_to('Edit', 'agency/editAgencyRoom?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'agency/deleteAgencyRoom?id='.$item->getId())?></li>
</ul>