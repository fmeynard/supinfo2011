<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($agency),'dashboard_agency', $agency); ?></li>
    <li><?php echo __('Customers'); ?></li>
  </ul>
</div>


<h1 class="afterSub"><?php echo __('Customers'); ?></h1>
<ul id="dashLinks">
  <li><?php echo link_to(__('New Customer'),'new_customer',$agency); ?></li>
</ul>
<div style="clear: both;"></div>
<div id="sfGrid" style="bottom: 0"></div>
<script language="javascript" type="text/javascript">
var testg;
$("#sfGrid").flexigrid
(
  {
    url: "<?php echo url_for('@agency_load_customers?id='.$agency->getId()); /*url_for('agency_load_vehicles', $agency)*/?>",
    dataType: 'json',
    colModel : [
    {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
    {display: '<?php echo __('Identité'); ?>', name : 'Fullname', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('E-mail'); ?>', name : 'Mail', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Portable'); ?>', name : 'Mobile', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Fixe'); ?>', name : 'Phone', width: 150, sortable : true, align: 'left'},
    ],
    buttons : [
    {name: 'Add', bclass: 'add', onpress : addFct},
    {separator: true}
    ],
    searchitems : [
    {display: 'Nom', name : 'name', isdefault: true},
    {display: 'eMail', name : 'mail', isdefault: false},
    ],
    sortname : "id",
    sortorder : "asc",
    usepager : true,
    title : '<?php echo __('Customers list'); ?>',
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
 window.location.replace("<?php echo url_for('new_customer', $agency); ?>"); 
}

</script>

