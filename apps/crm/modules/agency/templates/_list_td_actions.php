<td class="sf_actions_td">
  <div>
  <ul class="sf_admin_td_actions">
    <li><?php echo link_to(image_tag('/images/crm/actions/view.png'),'agency/view?slug='.$agency->getSlug())?></li>
    <?php echo $helper->linkToEdit($agency, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => image_tag('/images/crm/actions/edit.png'),)) ?>
    <?php echo $helper->linkToDelete($agency, array(  'params' =>   array(  ),  'confirm' => __('Are you sure?'),  'class_suffix' => 'delete',  'label' => image_tag('/images/crm/actions/delete.png'),)) ?>
  </ul>
  </div>
</td>
