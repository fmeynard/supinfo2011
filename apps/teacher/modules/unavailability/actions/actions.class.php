<?php

/**
 * unavailability actions.
 *
 * @package    d
 * @subpackage unavailability
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class unavailabilityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->teacher_unavailabilitys = Doctrine_Core::getTable('TeacherUnavailability')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  { 
    $this->form = new TeacherUnavailabilityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TeacherUnavailabilityForm(null, array('user'=>sfContext::getInstance()->getUser()->getGuardUser()));

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($teacher_unavailability = Doctrine_Core::getTable('TeacherUnavailability')->find(array($request->getParameter('id'))), sprintf('Object teacher_unavailability does not exist (%s).', $request->getParameter('id')));
    $this->form = new TeacherUnavailabilityForm($teacher_unavailability);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($teacher_unavailability = Doctrine_Core::getTable('TeacherUnavailability')->find(array($request->getParameter('id'))), sprintf('Object teacher_unavailability does not exist (%s).', $request->getParameter('id')));
    $this->form = new TeacherUnavailabilityForm($teacher_unavailability);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($teacher_unavailability = Doctrine_Core::getTable('TeacherUnavailability')->find(array($request->getParameter('id'))), sprintf('Object teacher_unavailability does not exist (%s).', $request->getParameter('id')));
    $teacher_unavailability->delete();

    $this->redirect('unavailability/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();

      $this->redirect('unavailability/edit?id='.$form->getObject()->getId());
    }
  }
}
