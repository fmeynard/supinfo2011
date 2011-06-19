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