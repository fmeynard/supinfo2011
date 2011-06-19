<?php
class CustomerForumForm extends sfGuardUserForm
{
  public function configure()
  {
    parent::configure();

    $uprof = new sfGuardUserProfileForm($this->object->Profile);
    unset($uprof['user_id'], $this['is_active'], $uprof['agency_id']);

    $this->embedMergeForm('Profile', $uprof);

    sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }

  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->getProfile()->setType(sfGuardUserProfile::TYPE_CUSTOMER);
    }

    parent::save($con);
  }
}
?>