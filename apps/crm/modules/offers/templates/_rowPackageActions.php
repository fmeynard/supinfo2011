<ul class="rowActions">
  <li class="rowEdit"><?php echo link_to('Edit', 'offers/editPackage?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'offers/deletePackage?id='.$item->getId())?></li>
</ul>