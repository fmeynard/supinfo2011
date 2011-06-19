<?php
class CustomerForm extends sfGuardUserForm
{
  public function configure()
  {
    parent::configure();
    
    $uprof = new sfGuardUserProfileForm($this->object->Profile, array('agency'=>$this->getOption('agency')));
    unset($uprof['user_id']);
    $this->embedMergeForm('Profile', $uprof);
    
    sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      if($this->getOption('agency'))
      {
        $this->getObject()->getProfile()->setAgencyId($this->getOption('agency')->getId());
      }
      
      $this->getObject()->getProfile()->setType($this->getOption('type', sfGuardUserProfile::TYPE_CUSTOMER));
    }
    
    parent::save($con);
  }
}
?>