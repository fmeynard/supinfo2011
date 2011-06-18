<?php

/**
 * NewFormationSessionParticipation form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewFormationSessionParticipationForm extends FormationHasUserForm
{
  public function configure()
  {
    unset(
      $this['is_valid'],
      $this['grade'],
      $this['formation_session_id']
      );
    
    //$this->setWidget('user_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)));
    $this->setWidget('user_id', new sfWidgetFormChoice(
          array(
            'choices' => FormationSessionTable::getAvailableCustomers($this->getOption('formationSession')), 
//            'add_empty' => true
          )
        ));
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setFormationSessionId($this->getOption('formationSession')->getId());
      $this->getObject()->setIsValid(true);
    }
    
    parent::save($con);
  }
}
