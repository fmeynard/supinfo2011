<?php

/**
 * comment actions.
 *
 * @package    d
 * @subpackage comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->community_comments = Doctrine_Core::getTable('CommunityComment')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->community_comment = Doctrine_Core::getTable('CommunityComment')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->community_comment);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CommunityCommentForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CommunityCommentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($community_comment = Doctrine_Core::getTable('CommunityComment')->find(array($request->getParameter('id'))), sprintf('Object community_comment does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityCommentForm($community_comment);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($community_comment = Doctrine_Core::getTable('CommunityComment')->find(array($request->getParameter('id'))), sprintf('Object community_comment does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityCommentForm($community_comment);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($community_comment = Doctrine_Core::getTable('CommunityComment')->find(array($request->getParameter('id'))), sprintf('Object community_comment does not exist (%s).', $request->getParameter('id')));
    $community_comment->delete();

    $this->redirect('comment/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $community_comment = $form->save();

      $this->redirect('comment/edit?id='.$community_comment->getId());
    }
  }
}
