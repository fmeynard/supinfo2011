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
    $this->lastUsers = sfGuardUserProfileTable::getInstance()->getLastUser();
  }
  
  public function executeNewCustomer(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
    
    $this->form = new CustomerForm(array(), array('agency'=>$this->agency));
  }
  
  public function executeCreateCustomer(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
    $this->form = new CustomerForm(array(), array('agency'=>$this->agency));
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
      $this->redirect($this->generateUrl('view_customer',array(
                                      'agency'=> $form->getObject()->getProfile()->getAgency()->getSlug(),
                                      'slug'  => $form->getObject()->getProfile()->getSlug())
                                      ));
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeViewCustomer(sfWebRequest $request)
  {
    $this->forward404Unless($this->user = sfGuardUserProfileTable::getBySlug($request->getParameter('slug')));
  }
}
