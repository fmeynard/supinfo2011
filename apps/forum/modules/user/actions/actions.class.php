<?php

/**
 * user actions.
 *
 * @package    d
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

   /**
   * Executes new customer
   *
   * @param sfWebRequest $request
   */
  public function executeNewCustomer(sfWebRequest $request)
  {
    $this->form = new CustomerForm(array());
  }

  /**
   * Executes create customer action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateCustomer(sfWebRequest $request)
  {
    $this->form = new CustomerForm(array());
    $this->processCustomerForm($request, $this->form);

    $this->setTemplate('newCustomer');
  }

  /**
   * Process vehicle form
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processCustomerForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('user/viewCustomer?slug='.$form->getObject()->getProfile()->getSlug());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

  /**
   * Executes view customer action
   *
   * @param sfWebRequest $request
   */
  public function executeViewCustomer(sfWebRequest $request)
  {
    $this->forward404Unless($this->user = sfGuardUserProfileTable::getBySlug($request->getParameter('slug')));
  }
}
