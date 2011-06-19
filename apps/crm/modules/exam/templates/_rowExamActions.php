<ul class="rowActions">
  <li class="rowView"><?php echo link_to('View','exam/view?id='.$item->getId())?>
  <li class="rowEdit"><?php echo link_to('Edit','exam/editExam?id='.$item->getId())?>
    <li class="rowEdit"><?php echo link_to('Delete','exam/deleteExam?id='.$item->getId())?>
</ul>