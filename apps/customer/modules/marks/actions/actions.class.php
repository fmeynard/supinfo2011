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
    $this->formation_has_users = Doctrine_Core::getTable('FormationHasUser')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FormationHasUserForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FormationHasUserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formation_has_user = Doctrine_Core::getTable('FormationHasUser')->find(array($request->getParameter('id'))), sprintf('Object formation_has_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationHasUserForm($formation_has_user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formation_has_user = Doctrine_Core::getTable('FormationHasUser')->find(array($request->getParameter('id'))), sprintf('Object formation_has_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new FormationHasUserForm($formation_has_user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formation_has_user = Doctrine_Core::getTable('FormationHasUser')->find(array($request->getParameter('id'))), sprintf('Object formation_has_user does not exist (%s).', $request->getParameter('id')));
    $formation_has_user->delete();

    $this->redirect('marks/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formation_has_user = $form->save();

      $this->redirect('marks/edit?id='.$formation_has_user->getId());
    }
  }
}
