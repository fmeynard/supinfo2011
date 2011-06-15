<ul class="rowActions">
  <li class="rowEdit"><?php echo link_to('Edit', 'offers/editOffer?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'offers/deleteOffer?id='.$item->getId())?></li>
</ul>