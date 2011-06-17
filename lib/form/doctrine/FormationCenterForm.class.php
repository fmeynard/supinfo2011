<?php

/**
 * FormationCenter form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FormationCenterForm extends BaseFormationCenterForm
{
  public function configure()
  {
    unset($this['image'], $this['slug'], $this['agency_id']);
    
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
