<?php
class GraduateSessionForm extends sfForm
{
  public function setup()
  {
    $this->disableLocalCSRFProtection();
    $formationSession = $this->getOption('formationSession');

    foreach($formationSession->getValidatedParticipations() as $participation)
    {
      $this->embedForm('participation_'.$participation->getId(), new GraduateParticipationForm($participation));
      $this->widgetSchema['participation_'.$participation->getId()]->setLabel($participation->getSfGuardUser()->getProfile()->getFullname());
    }
    $this->widgetSchema->setNameFormat('grades[%s]');
  }
  
  public function bind(array $taintedValues = null, array $taintedFiles = null)
  { 
    foreach($this->embeddedForms as $name => $form)
    {
      $form->bind($taintedValues[$name]);
    }
  }
  
  public function save($con = null)
  {
    foreach($this->embeddedForms as $name => $form)
    {
      $form->save($con);
    }
  }
  
  public function isValid()
  {
    foreach($this->embeddedForms as $form)
    {
      if(!$form->isValid())
      {
        return false;
      }
    }
    
    return true;
  }
}