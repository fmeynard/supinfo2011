<ul class="rowActions">
  <li class="rowEdit"><?php echo link_to('Edit', 'offers/editCategory?id='.$item->getId())?></li>
  <li class="delete"><?php echo link_to('Delete', 'offers/deleteCategory?id='.$item->getId())?></li>
</ul>