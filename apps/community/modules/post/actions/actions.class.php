<?php

/**
 * post actions.
 *
 * @package    d
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->community_posts = Doctrine_Core::getTable('CommunityPost')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->community_post = Doctrine_Core::getTable('CommunityPost')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->community_post);
    
    $this->form = new CommunityCommentForm();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CommunityPostForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CommunityPostForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($community_post = Doctrine_Core::getTable('CommunityPost')->find(array($request->getParameter('id'))), sprintf('Object community_post does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityPostForm($community_post);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($community_post = Doctrine_Core::getTable('CommunityPost')->find(array($request->getParameter('id'))), sprintf('Object community_post does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityPostForm($community_post);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($community_post = Doctrine_Core::getTable('CommunityPost')->find(array($request->getParameter('id'))), sprintf('Object community_post does not exist (%s).', $request->getParameter('id')));
    $community_post->delete();

    $this->redirect('post/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $community_post = $form->save();

      $this->redirect('post/edit?id='.$community_post->getId());
    }
  }
}
