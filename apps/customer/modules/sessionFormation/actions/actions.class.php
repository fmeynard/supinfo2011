<?php

/**
 * sessionFormation actions.
 *
 * @package    d
 * @subpackage sessionFormation
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sessionFormationActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formation_sessions = Doctrine_Core::getTable('FormationSession')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FormationSessionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FormationSessionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formation_session = Doctrine_Core::getTable('FormationSession')->find(array($request->getParameter('id'))), sprintf('Object formation_session does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationSessionForm($formation_session);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formation_session = Doctrine_Core::getTable('FormationSession')->find(array($request->getParameter('id'))), sprintf('Object formation_session does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationSessionForm($formation_session);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formation_session = Doctrine_Core::getTable('FormationSession')->find(array($request->getParameter('id'))), sprintf('Object formation_session does not exist (%s).', $request->getParameter('id')));
    $formation_session->delete();

    $this->redirect('sessionFormation/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formation_session = $form->save();
      $this->redirect('sessionFormation/edit?id='.$formation_session->getId());
    }
  }

  public function executeSubscribeFormation(sfWebRequest $request)
  {
    $this->forward404Unless($formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));

    $formationHasUser = new FormationHasUser();
    $formationHasUser->setFormationSessionId($formationSession->getId());
    $formationHasUser->setUserId(sfContext::getInstance()->getUser()->getGuardUser()->getId());
    $formationHasUser->setIsValid(false);
    $formationHasUser->save();
    $this->redirect("sessionFormation/index");
  }
}
