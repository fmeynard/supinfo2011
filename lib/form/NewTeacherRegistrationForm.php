<?php

/**
 * NewTeacherRegistrationForm form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewTeacherRegistrationForm extends FormationHasTeacherForm
{
  public function configure()
  {
    unset($this['formation_session_id']);
    
    $this->setWidget('teacher_id', new sfWidgetFormChoice(
          array(
            'choices' => FormationSessionTable::getAvailableTeachers($this->getOption('formationSession')),
          )
        ));
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
