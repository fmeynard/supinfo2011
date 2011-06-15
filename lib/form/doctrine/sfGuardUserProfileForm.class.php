<?php

/**
 * sfGuardUserProfile form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserProfileForm extends BasesfGuardUserProfileForm
{
  public function configure()
  {
    unset($this['sf_guard_user_id']);
    unset($this['type']);
    unset($this['slug']);
    
    if($this->getOption('agency'))
    {
      unset($this['agency_id']);
    }
  }
  
  public function save($con = null)
  {
    parent::save($con);
  }
}
