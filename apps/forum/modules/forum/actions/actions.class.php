<?php

/**
 * forum actions.
 *
 * @package    d
 * @subpackage forum
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class forumActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->frm_categorys = Doctrine_Core::getTable('FrmCategory')
      ->createQuery('a')
      ->execute();
  }

   public function executeShow(sfWebRequest $request)
  {
      $this->frm_forum = Doctrine_Core::getTable('FrmForum')->find(array($request->getParameter('id')));
  }

  public function executeShowtopic(sfWebRequest $request)
  {
      $this->frm_topic = Doctrine_Core::getTable('FrmTopic')->find(array($request->getParameter('id')));
  }

  public function executeListedit(sfWebRequest $request)
  {
    $this->frm_categorys = Doctrine_Core::getTable('FrmCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FrmCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FrmCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($frm_category = Doctrine_Core::getTable('FrmCategory')->find(array($request->getParameter('id'))), sprintf('Object frm_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmCategoryForm($frm_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($frm_category = Doctrine_Core::getTable('FrmCategory')->find(array($request->getParameter('id'))), sprintf('Object frm_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new FrmCategoryForm($frm_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($frm_category = Doctrine_Core::getTable('FrmCategory')->find(array($request->getParameter('id'))), sprintf('Object frm_category does not exist (%s).', $request->getParameter('id')));
    $frm_category->delete();

    $this->redirect('forum/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $frm_category = $form->save();

      $this->redirect('forum/edit?id='.$frm_category->getId());
    }
  }
}
