<div id="subMenu">
    <ul>
        <li><?php echo link_to(__('Agencies'), 'agency/index'); ?></li>
        <li><?php echo link_to(__($user->getAgency()), 'agency/view?slug=' . $user->getAgency()->getSlug()); ?></li>
        <li><?php echo link_to(__('Teachers'), 'user/listTeachers?slug=' . $user->getAgency()->getSlug()); ?></li>
        <li><?php echo $user->getFullname(); ?></li>
    </ul>
</div>
<br /><br />

<h2><?php echo __('Teacher') ?> : <?php echo $user->getFullname(); ?></h2>
<ul id="toggleUl">
    <li id="customersOffers" class="active">Profile</li>
</ul>
<div style="clear: both"></div>
<div id="customersOffers-div" class="toggle">
    <table>
        <tr>
            <td style="width:15%">Firstname :</td>
            <td><?php echo $user->getFirstName(); ?></td>
        </tr>
        <tr>
            <td style="width:15%">Lastname :</td>
            <td><?php echo $user->getLastName(); ?></td>
        </tr>
        <tr>
            <td style="width:15%">Birthday :</td>
            <td><?php echo $user->getBirthday() ?></td>
        </tr>
        <tr>
            <td style="width:15%">Mail :</td>
            <td><?php echo $user->getMail(); ?></td>
        </tr>
        <tr>
            <td style="width:15%">Phone :</td>
            <td><?php echo $user->getPhone(); ?></td>
        </tr>
    </table>
</div>

<ul id="toggleUl">
    <li id="customersOffers" class="active">Formations Sessions</li>
</ul>
<div style="clear: both"></div>
<div id="customersOffers-div" class="toggle">
    <div id="sfGrid" style="bottom: 0"></div>
    <script language="javascript" type="text/javascript">
    var testg;
    $("#sfGrid").flexigrid
    (
      {
        url: "<?php echo url_for('formationSession/loadTeacherFormationSession?id='.$user->getSfGuardUser()->getId()); ?>",
        dataType: 'json',
        colModel : [
        {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
        {display: '<?php echo __('Date Start'); ?>', name : 'date_start', width: 150, sortable : true, align: 'left'},
        {display: '<?php echo __('Date End'); ?>', name : 'date_end', width: 150, sortable : true, align: 'left'},
        {display: '<?php echo __('Capacity'); ?>', name : 'capacity', width: 150, sortable : true, align: 'left'},
        {display: '<?php echo __('Type'); ?>', name : 'type', width: 150, sortable : false, align: 'left'},
        {display: '<?php echo __('Actions'); ?>', name : 'Actions', width: 150, sortable : false, align: 'left'},
        ],
        sortname : "id",
        sortorder : "asc",
        usepager : true,
        useRp : true,
        rp : 10,
        showTableToggleBtn : false,
        width : '100%',
        height : '100%',
        singleSelect: true
      }
    );

    </script>
</div>

<ul id="toggleUl">
    <li id="customersOffers" class="active">Unvailibilities</li>
    <li><?php echo link_to('Create','user/newTeacherAvailibility?id='.$user->getSfGuardUserId()); ?></li>
</ul>
<div style="clear: both"></div>
<div id="customersOffers-div" class="toggle">
    <div id="sfGrid2" style="bottom: 0"></div>
    <script language="javascript" type="text/javascript">
    var testg;
    $("#sfGrid2").flexigrid
    (
      {
        url: "<?php echo url_for('user/loadTeacherAvailibility?id='.$user->getSfGuardUserId()); ?>",
        dataType: 'json',
        colModel : [
        {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
        {display: '<?php echo __('Date Start'); ?>', name : 'date_start', width: 150, sortable : true, align: 'left'},
        {display: '<?php echo __('Date End'); ?>', name : 'date_end', width: 150, sortable : true, align: 'left'},
        {display: '<?php echo __('Actions'); ?>', name : 'Actions', width: 150, sortable : false, align: 'left'},
        ],
        sortname : "id",
        sortorder : "asc",
        usepager : true,
        useRp : true,
        rp : 10,
        showTableToggleBtn : false,
        width : '100%',
        height : '100%',
        singleSelect: true
      }
    );
    </script>
</div>
