<?php
class GraduateParticipationForm extends FormationHasUserForm
{
  public function configure()
  {
    $this->disableLocalCSRFProtection();
    
    unset(
      $this['formation_session_id'],
      $this['user_id'],
      $this['is_valid']
    );
  }
  
  public function save($con = null)
  {
    parent::save($con);
  }
}