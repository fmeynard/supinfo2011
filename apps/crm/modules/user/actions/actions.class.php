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
  
  /**
   * Executes list customers action
   *
   * @param sfWebRequest $request
   */
  public function executeListCustomers(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load customers action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadCustomers(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = Doctrine::getTable('Agency')->find($request->getParameter('id')));

    $pager = new FlexigridPager($request, sfGuardUserProfileTable::getAgencyCustomersQuery($this->agency));
    $response = $pager->getDefaultStd();
    $pager = $pager->init();

    $i=0;

    foreach($pager->getResults() as $item)
    {
      $response->rows[$i]['id'] = $item->getId();
      $response->rows[$i]['cell'] = array(
        $item->getId(),
        $item->getFullname(),
        $item->getMail(),
        $item->getMobile(),
        $item->getPhone(),
        $this->getPartial('rowCustomerActions', array('item'=>$item)),
        );
      $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes list employees action
   *
   * @param sfWebRequest $request
   */
  public function executeListEmployees(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load employees action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadEmployees(sfWebRequest $request)
  {
     $this->forward404Unless($this->agency = Doctrine::getTable('Agency')->find($request->getParameter('id')));
     $pager = new FlexigridPager($request, sfGuardUserProfileTable::getAgencyEmployeesQuery($this->agency));
     $response = $pager->getDefaultStd();
     $pager = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item){
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getFullname(),
                $item->getMail(),
                $item->getMobile(),
                $item->getPhone(),
                $this->getPartial('rowEmployeeActions',array('item'=>$item)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes new employee action
   *
   * @param sfWebRequest $request
   */
  public function executeNewEmployee(sfWebRequest $request)
  { 
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    $this->form = new EmployeeForm(array(), array('agency'=>$this->agency));
  }
  
  /**
   * Executes create employee action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateEmployee(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    $this->form = new EmployeeForm(array(), array('agency'=>$this->agency));
    $this->processEmployeeForm($request, $this->form);
    
    $this->setTemplate('newEmployee');
  }
  
  /**
   * Process vehicle form
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processEmployeeForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('user/viewEmployee?slug='.$form->getObject()->getProfile()->getSlug());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes view employee action
   *
   * @param sfWebRequest $request
   */
  public function executeViewEmployee(sfWebRequest $request)
  {
    $this->forward404Unless($this->user = sfGuardUserProfileTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes new customer 
   *
   * @param sfWebRequest $request
   */
  public function executeNewCustomer(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new CustomerForm(array(), array('agency'=>$this->agency));
  }
  
  /**
   * Executes create customer action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateCustomer(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
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
