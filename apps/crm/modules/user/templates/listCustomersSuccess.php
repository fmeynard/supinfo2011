<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($agency),'agency/view?slug='.$agency->getSlug()); ?></li>
    <li><?php echo __('Customers'); ?></li>
  </ul>
</div>

<h1 class="afterSub"><?php echo __('Customers'); ?></h1>
<div id="sfGrid" style="bottom: 0"></div>
<script language="javascript" type="text/javascript">
var testg;
$("#sfGrid").flexigrid
(
  {
    url: "<?php echo url_for('user/loadCustomers?id='.$agency->getId()); ?>",
    dataType: 'json',
    colModel : [
    {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
    {display: '<?php echo __('Identité'); ?>', name : 'Fullname', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('E-mail'); ?>', name : 'Mail', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Portable'); ?>', name : 'Mobile', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Fixe'); ?>', name : 'Phone', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Actions'); ?>', name : 'Actions', width: 150, sortable : true, align: 'left'},
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
 window.location.replace("<?php echo url_for('user/newCustomer?slug='.$agency->getSlug()); ?>"); 
}

</script>

