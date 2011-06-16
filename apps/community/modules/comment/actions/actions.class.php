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
    // CommunityCommentTable::getInstance()
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
    $this->forward404Unless($communityPost = CommunityPostTable::getInstance()->find($request->getParameter('postId')));

    $this->form = new CommunityCommentForm(NULL, array(
        'communityPost' => $communityPost,
      ));

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
    //$request->checkCSRFProtection();

    $this->forward404Unless($community_comment = Doctrine_Core::getTable('CommunityComment')->find(array($request->getParameter('id'))), sprintf('Object community_comment does not exist (%s).', $request->getParameter('id')));
    $community_comment->delete();

    $this->redirect('post/show/?id=' . $request->getParameter('post_id'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();

      $this->redirect('post/show?id='.$form->getObject()->getPostId());
    }
  }
}
