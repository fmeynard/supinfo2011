<div id="subMenu">
  <ul>
    <li><?php echo link_to(__('Agencies'),'agency/index'); ?></li>
    <li><?php echo link_to(__($user->getAgency()),'agency/view?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo link_to(__('Customers'),'user/listCustomers?slug='.$user->getAgency()->getSlug()); ?></li>
    <li><?php echo $user->getFullname(); ?></li>
  </ul>
</div>
<br /><br />

<h2><?php echo __('Customer')?> : <?php echo $user->getFullname(); ?></h2>

<ul id="toggleUl">
  <li id="customersInformations" class="active">Main Informations</li>
</ul>
<div style="clear: both"></div>
<div id="customersInformations-div" class="toggle toggleShow">
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
</div>

<ul id="toggleUl">
  <li id="customersPackages" class="active">Packages</li>
</ul>
<div style="clear: both"></div>
<div id="customersPackages-div" class="toggle">
  <form method="post" action="<?php echo url_for('user/addPackage?slug='.$user->getSlug()); ?>">
    <?php echo $userHasPackageForm; ?>
    <input type="submit" value="Add" />
  </form>
  
  <table>
    <thead>
      <tr>
        <th>Package</th>
        <th>Active ?</th>
        <th>Paid ?</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $x=0;?>
      <?php foreach($user->getSfGuardUser()->getUserHasPackage() as $uhp) : ?>
        <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
          <td><?php echo $uhp->getPackage()->getName();?></td>
          <td>
            <?php if($uhp->getIsActive()) : ?>
              yes
            <?php else: ?>
              no
            <?php endif;?>
          </td>
          <td>
            <?php if($uhp->getIsPaid()) : ?>
              yes
            <?php else: ?>
              no
            <?php endif; ?>
          </td>
          <td class="actions">
            <?php if($uhp->getIsActive()) : ?>
              <?php echo link_to('Desactivate', 'user/disablePackage?id='.$uhp->getId())?> -
            <?php else: ?>
              <?php echo link_to('Activate', 'user/enablePackage?id='.$uhp->getId())?> -
            <?php endif;?>
            
            <?php if(!$uhp->getIsPaid()) : ?>
              <?php echo link_to('Mark as paid', 'user/payedPackage?id='.$uhp->getId())?>
            <?php else: ?>
              <?php echo link_to('Mark as unpaid', 'user/unpayedPackage?id='.$uhp->getId())?>
            <?php endif;?>
          </td>
        </tr>
        <?php $x++; ?>
      <?php endforeach;?>
    </tbody>
  </table>
</div>

<ul id="toggleUl">
  <li id="customersOffers" class="active">Offers</li>
</ul>
<div style="clear: both"></div>
<div id="customersOffers-div" class="toggle">
  <form method="post" action="<?php echo url_for('user/addOffer?slug='.$user->getSlug()); ?>">
    <?php echo $userHasOfferForm; ?>
    <input type="submit" value="Add" />
  </form>
  
  <table>
    <thead>
      <tr>
        <th>Package</th>
        <th>Active ?</th>
        <th>Paid ?</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $x=0; ?>
      <?php foreach($user->getSfGuardUser()->getUserHasOffer() as $uhp) : ?>
        <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
          <td><?php echo $uhp->getOffer()->getName();?></td>
          <td>
            <?php if($uhp->getIsActive()) : ?>
              yes
            <?php else: ?>
              no
            <?php endif;?>
          </td>
          <td>
            <?php if($uhp->getIsPaid()) : ?>
              yes
            <?php else: ?>
              no
            <?php endif; ?>
          </td>
          <td class="actions">
            <?php if($uhp->getIsActive()) : ?>
              <?php echo link_to('Desactivate', 'user/disableOffer?id='.$uhp->getId())?> -
            <?php else: ?>
              <?php echo link_to('Activate', 'user/enableOffer?id='.$uhp->getId())?> -
            <?php endif;?>
            
            <?php if(!$uhp->getIsPaid()) : ?>
              <?php echo link_to('Mark as paid', 'user/payedOffer?id='.$uhp->getId())?>
            <?php else: ?>
              <?php echo link_to('Mark as unpaid', 'user/unpayedOffer?id='.$uhp->getId())?>
            <?php endif;?>
          </td>
        </tr>
        <?php $x++; ?>
      <?php endforeach;?>
    </tbody>
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
        url: "<?php echo url_for('formationSession/loadCustomerFormationSession?id='.$user->getSfGuardUser()->getId()); ?>",
        dataType: 'json',
        colModel : [
        {display: '<?php echo __('Id'); ?>', name : 'id', width: 30, sortable : true, align: 'left'},
        {display: '<?php echo __('Type'); ?>', name : 'date_start', width: 150, sortable : false, align: 'left'},
        {display: '<?php echo __('Grade'); ?>', name : 'date_end', width: 150, sortable : false, align: 'left'},
        {display: '<?php echo __('Date'); ?>', name : 'capacity', width: 150, sortable : false, align: 'left'},
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