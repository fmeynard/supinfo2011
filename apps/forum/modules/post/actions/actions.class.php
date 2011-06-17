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
    $this->frm_posts = Doctrine_Core::getTable('FrmPost')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FrmPostForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->forward404Unless($topic = FrmTopicTable::getInstance()->find($request->getParameter('idTopic')));

     $this->form = new FrmPostForm(NULL, array(
        'topic' => $topic,
      ));

      $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($frm_post = Doctrine_Core::getTable('FrmPost')->find(array($request->getParameter('id'))), sprintf('Object frm_post does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmPostForm($frm_post);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($frm_post = Doctrine_Core::getTable('FrmPost')->find(array($request->getParameter('id'))), sprintf('Object frm_post does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmPostForm($frm_post);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($frm_post = Doctrine_Core::getTable('FrmPost')->find(array($request->getParameter('id'))), sprintf('Object frm_post does not exist (%s).', $request->getParameter('id')));
    $frm_post->delete();

    $this->redirect('post/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $frm_post = $form->save();

      $this->redirect('forum/index');
    }
  }
}
