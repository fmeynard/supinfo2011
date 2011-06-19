<?php

/**
 * formationSession actions.
 *
 * @package    d
 * @subpackage formationSession
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formationSessionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  /**
   * Executes list formation session
   *
   * @param sfWebRequest $request
   */
  public function executeListFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadFormationSession(sfWebRequest $request)
  {
     $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
     
     $pager     = new FlexigridPager($request, FormationSessionTable::getByAgencyQuery($this->agency));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getDateStart(),
                $item->getDateEnd(),
                $item->getCapacity(),
                $item->getFormationType()->getName(),
                $this->getPartial('rowFormationSessionActions',array('item'=>$item)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes load formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadTeacherFormationSession(sfWebRequest $request)
  {
     $this->forward404Unless($this->teacher = sfGuardUserTable::getInstance()->find($request->getParameter('id')));
     
     $pager     = new FlexigridPager($request, FormationSessionTable::getByTeacherQuery($this->teacher));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getDateStart(),
                $item->getDateEnd(),
                $item->getCapacity(),
                $item->getFormationType()->getName(),
                $this->getPartial('rowFormationSessionActions',array('item'=>$item,'fullActions'=>false)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes load formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadCustomerFormationSession(sfWebRequest $request)
  {
     $this->forward404Unless($this->customer = sfGuardUserTable::getInstance()->find($request->getParameter('id')));
     
     $pager     = new FlexigridPager($request, FormationSessionTable::getByCustomerQuery($this->customer));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getFormationSession()->getId(),
                $item->getFormationSession()->getFormationType()->getName(),
                $item->getGrade(),
                $item->getFormationSession()->getDateStart(),
                $this->getPartial('rowFormationSessionActions',array('item'=>$item,'fullActions'=>false)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes new formation session
   *
   * @param sfWebRequest $request
   */
  public function executeNewFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationSessionForm();
  }
  
  /**
   * Executes create formation session
   *
   * @param sfWebRequest $request
   */
  public function executeCreateFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationSessionForm(array(), array('agency'=>$this->agency));
    $this->processFormationSessionForm($request, $this->form);
    
    $this->setTemplate('newFormationSession');
  }
  
  /**
   * Execute edit formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeEditFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationSessionForm($this->formationSession);
  }
  
  /**
   * Executes udpate formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdateFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationSessionForm($this->formationSession);
    $this->processFormationSessionForm($request, $this->form);
    
    $this->setTemplate('editFormationSession');
  }
  
  /**
   * Process formation session form
   *
   * @param sfWebRequest  $request
   * @param sfForm        $form
   */
  protected function processFormationSessionForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('formationSession/viewFormationSession?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes view formation session
   *
   * @param sfWebRequest $request
   */
  public function executeViewFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->participationForm = new NewFormationSessionParticipationForm(NULL, array('formationSession'=>$this->formationSession));
    $this->vehicleForm       = new NewVehicleRegistrationForm(NULL, array('formationSession'=>$this->formationSession));
    $this->teacherForm       = new NewTeacherRegistrationForm(NULL, array('formationSession'=>$this->formationSession));
  }
  
  /**
   * Executes create participation action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateParticipation(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->addForm = new NewFormationSessionParticipationForm(null, array('formationSession'=>$this->formationSession));
    $this->processParticipationForm($request, $this->addForm);
    
    $this->setTemplate('viewFormationSession');
  }
  
  /**
   * Process formation session form
   *
   * @param sfWebRequest  $request
   * @param sfForm        $form
   */
  protected function processParticipationForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('formationSession/viewFormationSession?id='.$form->getObject()->getFormationSession()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Execute delete participation
   *
   * @param sfWebRequest $request
   */
  public function executeDeleteParticipation(sfWebRequest $request)
  {
    $this->forward404Unless($formationHasUser = FormationHasUserTable::getInstance()->find($request->getParameter('id')));
    $formationSessionId = $formationHasUser->getFormationSessionId();
    
    $formationHasUser->delete();
    
    $this->redirect('formationSession/viewFormationSession?id='.$formationSessionId);
    
    return sfView::NONE;
  }
  
  /**
   * Executes validate participation
   *
   * @param sfWebRequest $request
   */
  public function executeValidateParticipation(sfWebRequest $request)
  {
    $this->forward404Unless($formationHasUser = FormationHasUserTable::getInstance()->find($request->getParameter('id')));
    
    $formationHasUser->validate()->save();
    
    $this->redirect('formationSession/viewFormationSession?id='.$formationHasUser->getFormationSession()->getId());
  }
  
  /**
   * Executes create vehicle registration
   *
   * @param sfWebRequest $request
   */
  public function executeCreateVehicleRegistration(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    $form = new NewVehicleRegistrationForm(NULL, array('formationSession'=>$this->formationSession));
    
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    
    $this->redirect('formationSession/viewFormationSession?id='.$form->getObject()->getFormationSession()->getId());
  }
  
  /**
   * Executes delete vehicle reservation action
   *
   * @param sfWebRequest $request
   */
  public function executeDeleteVehicleReservation(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationHasVehicle = FormationHasVehicleTable::getInstance()->find($request->getParameter('id')));
    
    $formationSessionId = $this->formationHasVehicle->getFormationSessionId();
    $this->formationHasVehicle->delete();
    
    $this->redirect('formationSession/viewFormationSession?id='.$formationSessionId);
    
    return sfView::NONE;
  }
  
  /**
   * Executes create teacher registration action
   * 
   * @param sfWebRequest $request
   */
  public function executeCreateTeacherRegistration(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $form = new NewTeacherRegistrationForm(NULL, array('formationSession'=>$this->formationSession));
    $form->bind($request->getParameter($form->getName()));
    if($form->isValid())
    {
      $form->save();
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    
    $this->redirect('formationSession/viewFormationSession?id='.$form->getObject()->getFormationSession()->getId());
  }
  
  /**
   * Executes delete teacher registration action
   *
   * @param sfWebRequest $request
   */
  public function executeDeleteTeacherRegistration(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationHasTeacher = FormationHasTeacherTable::getInstance()->find($request->getParameter('id')));
    
    $formationSessionId = $this->formationHasTeacher->getFormationSessionId();
    $this->formationHasTeacher->delete();
    
    $this->redirect('formationSession/viewFormationSession?id='.$formationSessionId);
  }
  
  /**
   * Execute graduate session
   *
   * @param sfWebRequest $request
   */
  public function executeGraduateSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new GraduateSessionForm(NULL, array('formationSession'=>$this->formationSession));
  }
  
  /**
   * Execute update grades 
   *
   * @param sfWebRequest $request
   */
  public function executeUpdateGrades(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    $this->form = new GraduateSessionForm(NULL, array('formationSession'=>$this->formationSession));
    $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
    if ($this->form->isValid())
    {
      $this->form->save();
      $this->redirect('formationSession/graduateSession?id='.$this->formationSession->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    
    $this->setTemplate('graduateSession');
  }
}
