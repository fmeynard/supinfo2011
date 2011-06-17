<?php

/**
 * FormationHasUser form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FormationHasUserForm extends BaseFormationHasUserForm
{
  public function configure()
  {
    $this->setWidget('user_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)));
    
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setFormationSessionId($this->getOption('formationSession')->getId());
    }
    
    parent::save($con);
  }
}
