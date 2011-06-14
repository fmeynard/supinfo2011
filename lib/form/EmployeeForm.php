<?php
class EmployeeForm extends sfGuardUserProfileForm
{
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setType(sfGuardUserProfile::TYPE_EMPLOYEE);
    }
    
    parent::save($con);
  }
}