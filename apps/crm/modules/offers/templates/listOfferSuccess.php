<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Offers'),'offers/index'); ?></li>
    <li><?php echo __('Single Offers')?></li>
  </ul>
</div>
<br /><br />
<h2>Single offers</h2>
<div id="sfGrid" style="bottom: 0"></div>
<script language="javascript" type="text/javascript">
$("#sfGrid").flexigrid
(
  {
    url: "<?php echo url_for('offers/loadOffer'); ?>",
    dataType: 'json',
    colModel : [
    {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
    {display: '<?php echo __('Name'); ?>', name : 'name', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Description'); ?>', name : 'description', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Price'); ?>', name : 'price', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Category'); ?>', name : 'brand', width: 150, sortable : true, align: 'left'},
    {display: '<?php echo __('Actions'); ?>', name : 'model', width: 150, sortable : true, align: 'left'},
    ],
    buttons : [ {name: 'Add', bclass: 'add', onpress : test} ],
    sortname : "name",
    sortorder : "asc",
    usepager : true,
    title : '<?php echo __('Single offers list'); ?>',
    useRp : true,
    rp : 10,
    showTableToggleBtn : false,
    width : '100%',
    height : '100%',
    singleSelect: true
  }
);

function test(com)
{
  window.location.replace("<?php echo url_for('offers/newOffer'); ?>"); 
}
</script>