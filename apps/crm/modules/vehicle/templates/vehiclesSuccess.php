<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($agency),'agency/view?slug='.$agency->getSlug()); ?></li>
    <li><?php echo __('Vehicles'); ?></li>
  </ul>
</div>

<h1 class="afterSub"><?php echo $agency; ?> : <?php echo __('Vehicles'); ?></h1>
<div id="sfGrid" style="bottom: 0"></div>
<script language="javascript" type="text/javascript">
var testg;
$("#sfGrid").flexigrid
(
  {
    url: "<?php echo url_for('@load_vehicles?id='.$agency->getId()); ?>",
    dataType: 'json',
    colModel : [
    {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
    {display: '<?php echo __('Immatriculation'); ?>', name : 'name', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Brand'); ?>', name : 'brand', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Model'); ?>', name : 'model', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Year'); ?>', name : 'year', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Actions'); ?>', name : 'actions', width: 150, sortable : true, align: 'left'},
    ],
    buttons : [
    {name: 'Add', bclass: 'add', onpress : addFct},
    {separator: true}
    ],
    sortname : "name",
    sortorder : "asc",
    usepager : true,
    title : '<?php echo __('Vehicles list'); ?>',
    useRp : true,
    rp : 10,
    showTableToggleBtn : false,
    width : '100%',
    height : '100%',
    singleSelect: true
  }
);

function addFct(com)
{
 window.location.replace("<?php echo url_for('vehicle/newVehicle?slug='.$agency->getSlug()); ?>"); 
}
</script>

