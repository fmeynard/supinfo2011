<?php

/**
 * category actions.
 *
 * @package    d
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->community_categorys = Doctrine_Core::getTable('CommunityCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->community_category = Doctrine_Core::getTable('CommunityCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->community_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CommunityCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CommunityCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($community_category = Doctrine_Core::getTable('CommunityCategory')->find(array($request->getParameter('id'))), sprintf('Object community_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityCategoryForm($community_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($community_category = Doctrine_Core::getTable('CommunityCategory')->find(array($request->getParameter('id'))), sprintf('Object community_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CommunityCategoryForm($community_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($community_category = Doctrine_Core::getTable('CommunityCategory')->find(array($request->getParameter('id'))), sprintf('Object community_category does not exist (%s).', $request->getParameter('id')));
    $community_category->delete();

    $this->redirect('category/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $community_category = $form->save();

      $this->redirect('category/edit?id='.$community_category->getId());
    }
  }
}
