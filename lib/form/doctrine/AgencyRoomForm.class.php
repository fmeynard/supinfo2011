<?php

/**
 * AgencyRoom form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AgencyRoomForm extends BaseAgencyRoomForm
{
  public function configure()
  {
    unset($this['agency_id'], $this['slug']);
    
    sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setAgencyId($this->getOption('agency')->getId());
    }
    
    parent::save($con);
  }
}
