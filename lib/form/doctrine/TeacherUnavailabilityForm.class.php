<?php

/**
 * TeacherUnavailability form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TeacherUnavailabilityForm extends BaseTeacherUnavailabilityForm
{
  public function configure()
  {
    unset($this['sf_guard_user_id']);
    
    sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setSfGuardUserId($this->getOption('user')->getId());
    }
    
    parent::save($con);
  }
}
