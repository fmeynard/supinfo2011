<?php
class CustomerForm extends sfGuardUserForm
{
  public function configure()
  {
    parent::configure();
    
    $uprof = new sfGuardUserProfileForm($this->object->Profile);
    unset($uprof['user_id']);
    $this->embedMergeForm('Profile', $uprof);
  }
  
  public function save($con = null)
  {
    /*
    if($this->getObject()->isNew())
    {
      $this->getObject()->setAgency()
      $this->getObject()->setType(sfGuardUserProfile::TYPE_EMPLOYEE);
    }
    */
    
    parent::save($con);
  }
}