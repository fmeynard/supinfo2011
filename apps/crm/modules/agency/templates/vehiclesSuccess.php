<?php include_partial('subMenu',array('agency'=>$agency)); ?>
<h1 class="afterSub"><?php echo $agency; ?> : <?php echo __('Vehicles'); ?></h1>
<ul id="dashLinks">
  <li><?php echo link_to(__('New Vehicle'),'agency_new_vehicle',$agency); ?></li>
</ul>
<div style="clear: both;"></div>
  <div id="sfGrid" style="bottom: 0"></div>
  <script language="javascript" type="text/javascript">
        var testg;
  			$("#sfGrid").flexigrid
  			(
  				{
  					url: "<?php echo url_for('@agency_load_vehicles?id='.$agency->getId()); /*url_for('agency_load_vehicles', $agency)*/?>",
  					dataType: 'json',
  					colModel : [
  					  {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
  						{display: '<?php echo __('Immatriculation'); ?>', name : 'name', width: 150, sortable : true, align: 'left'},
  						{display: '<?php echo __('Brand'); ?>', name : 'brand', width: 150, sortable : true, align: 'left'},
  						{display: '<?php echo __('Model'); ?>', name : 'model', width: 150, sortable : true, align: 'left'},
  						{display: '<?php echo __('Year'); ?>', name : 'year', width: 150, sortable : true, align: 'left'},
  						],
  						buttons : [
              		{name: 'Add', bclass: 'add', onpress : test},
              		{name: 'Delete', bclass: 'delete', onpress : test},
              		{separator: true}
              		],
        			searchitems : [
        			       		{display: 'Nom', name : 'LastName', isdefault: true},
        			       		{display: 'eMail', name : 'Email', isdefault: false},
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
  			
  			function test(com, grid){
  				$(".trSelected > td:first-child > div:first-child").each( function(index, element){

  						alert($(element).html());
  					}
  				);

  			}			

  		</script>
  		
  		