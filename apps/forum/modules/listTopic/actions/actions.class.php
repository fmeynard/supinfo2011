<?php

/**
 * listTopic actions.
 *
 * @package    d
 * @subpackage listTopic
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class listTopicActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->frm_topics = Doctrine_Core::getTable('FrmTopic')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FrmTopicForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FrmTopicForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($frm_topic = Doctrine_Core::getTable('FrmTopic')->find(array($request->getParameter('id'))), sprintf('Object frm_topic does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmTopicForm($frm_topic);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($frm_topic = Doctrine_Core::getTable('FrmTopic')->find(array($request->getParameter('id'))), sprintf('Object frm_topic does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmTopicForm($frm_topic);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($frm_topic = Doctrine_Core::getTable('FrmTopic')->find(array($request->getParameter('id'))), sprintf('Object frm_topic does not exist (%s).', $request->getParameter('id')));
    $frm_topic->delete();

    $this->redirect('listTopic/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $frm_topic = $form->save();

      $this->redirect('listTopic/edit?id='.$frm_topic->getId());
    }
  }
}
