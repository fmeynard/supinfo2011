<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($user->getAgency()),'agency/view?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Employees'),'user/listEmployees?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo $user->getFullname(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Employee')?> : <?php echo $user->getFullname(); ?></h2>

<table>
  <tr>
    <td>Firstname :</td>
    <td><?php echo $user->getFirstName(); ?></td>
  </tr>
  <tr>
    <td>Lastname :</td>
    <td><?php echo $user->getLastName(); ?></td>
  </tr>
  <tr>
    <td>Birthday :</td>
    <td><?php echo $user->getBirthday()?></td>
  </tr>
  <tr>
    <td>Mail :</td>
    <td><?php echo $user->getMail(); ?></td>
  </tr>
  <tr>
    <td>Phone :</td>
    <td><?php echo $user->getPhone(); ?></td>
  </tr>
</table>