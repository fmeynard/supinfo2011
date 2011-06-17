<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($agency),'agency/view?slug='.$agency->getSlug()); ?></li>
    <li><?php echo __('Formation Centers'); ?></li>
  </ul>
</div>


<h1 class="afterSub"><?php echo __('Formation Centers'); ?></h1>
<div id="sfGrid" style="bottom: 0"></div>
<script language="javascript" type="text/javascript">
var testg;
$("#sfGrid").flexigrid
(
  {
    url: "<?php echo url_for('formationCenter/loadFormationCenter?slug='.$agency->getSlug()); ?>",
    dataType: 'json',
    colModel : [
    {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
    {display: '<?php echo __('Name'); ?>', name : 'name', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Address'); ?>', name : 'address', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Capacity'); ?>', name : 'capacity', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Actions'); ?>', name : 'Phone', width: 150, sortable : false, align: 'left'},
    ],
    buttons : [
    {name: 'Add', bclass: 'add', onpress : addFct},
    {separator: true}
    ],
    sortname : "id",
    sortorder : "asc",
    usepager : true,
    title : '<?php echo __('Formation Centers list'); ?>',
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
 window.location.replace("<?php echo url_for('formationCenter/newFormationCenter?slug='.$agency->getSlug()); ?>"); 
}

</script>

