<?php

/**
 * UserHasOffer form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserHasOfferForm extends BaseUserHasOfferForm
{
  public function configure()
  {
    unset($this['user_id'], $this['is_active'], $this['is_paid']);
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setUserId($this->getOption('user')->getId());
      $this->getObject()->setIsPaid(fals);
      $this->getObject()->setIsActive(true);
    }
    
    parent::save($con);
  }
}
