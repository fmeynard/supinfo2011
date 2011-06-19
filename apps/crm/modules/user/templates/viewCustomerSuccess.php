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

<div class="customersPackages">
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
      <?php foreach($user->getSfGuardUser()->getUserHasPackage() as $uhp) : ?>
        <tr>
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
          <td>
            <?php if($uhp->getIsActive()) : ?>
              <?php echo link_to('Desactivate', 'user/disablePackage?id='.$uhp->getId())?> -
            <?php else: ?>
              <?php echo link_to('Activate', 'user/enablePackage?id='.$uhp->getId())?> -
            <?php endif;?>
            
            <?php if(!$uhp->getIsPaid()) : ?>
              <?php echo link_to('Mark as paid', 'user/payedPackage?id='.$uhp->getId())?>
            <?php else: ?>
              <?php echo link_to('Mark as not paid', 'user/unpayedPackage?id='.$uhp->getId())?>
            <?php endif;?>
          </td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>

<div class="customersOffers">
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
      <?php foreach($user->getSfGuardUser()->getUserHasOffer() as $uhp) : ?>
        <tr>
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
          <td>
            <?php if($uhp->getIsActive()) : ?>
              <?php echo link_to('Desactivate', 'user/disableOffer?id='.$uhp->getId())?> -
            <?php else: ?>
              <?php echo link_to('Activate', 'user/enableOffer?id='.$uhp->getId())?> -
            <?php endif;?>
            
            <?php if(!$uhp->getIsPaid()) : ?>
              <?php echo link_to('Mark as paid', 'user/payedOffer?id='.$uhp->getId())?>
            <?php else: ?>
              <?php echo link_to('Mark as not paid', 'user/unpayedOffer?id='.$uhp->getId())?>
            <?php endif;?>
          </td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>