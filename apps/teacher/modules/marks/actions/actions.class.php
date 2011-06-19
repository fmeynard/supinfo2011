<?php

/**
 * marks actions.
 *
 * @package    d
 * @subpackage marks
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class marksActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formation_has_teachers = Doctrine_Core::getTable('FormationHasTeacher')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FormationHasTeacherForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FormationHasTeacherForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formation_has_teacher = Doctrine_Core::getTable('FormationHasTeacher')->find(array($request->getParameter('id'))), sprintf('Object formation_has_teacher does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationHasTeacherForm($formation_has_teacher);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formation_has_teacher = Doctrine_Core::getTable('FormationHasTeacher')->find(array($request->getParameter('id'))), sprintf('Object formation_has_teacher does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationHasTeacherForm($formation_has_teacher);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formation_has_teacher = Doctrine_Core::getTable('FormationHasTeacher')->find(array($request->getParameter('id'))), sprintf('Object formation_has_teacher does not exist (%s).', $request->getParameter('id')));
    $formation_has_teacher->delete();

    $this->redirect('marks/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formation_has_teacher = $form->save();

      $this->redirect('marks/edit?id='.$formation_has_teacher->getId());
    }
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
      $this->redirect('marks/graduateSession?id='.$this->formationSession->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }

    $this->setTemplate('graduateSession');
  }
}
