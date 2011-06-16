<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View', 'agencyRoom/viewAgencyRoom?id='.$item->getId())?></li>
  <li class="rowEdit"><?php echo link_to('Edit', 'agencyRoom/editAgencyRoom?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'agencyRoom/deleteAgencyRoom?id='.$item->getId())?></li>
</ul>