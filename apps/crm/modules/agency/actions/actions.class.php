<?php

require_once dirname(__FILE__).'/../lib/agencyGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/agencyGeneratorHelper.class.php';

/**
 * agency actions.
 *
 * @package    d
 * @subpackage agency
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class agencyActions extends autoAgencyActions
{
  /**
   * Execute view action
   *
   * @param sfWebRequest $request
   */
  public function executeView(sfWebRequest $request)
  {
    $this->setVar('agency',$this->getRoute()->getObject(), true);
  }

  /**
   * Executes vehicles action
   *
   * @param sfWebRequest $request
   */
  public function executeVehicles(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();

    $this->pager = new sfDoctrinePager('Vehicle');
    $this->pager->setQuery(VehicleTable::vehiclesByAgencyQuery($this->agency->getId()));
    $this->pager->setPage($request->getParameter('page'), 1);
    $this->pager->init();
  }
  
  /**
   * Executes  loadVehicles action
   * 
   * @param sfWebRequest $request
   */
  public function executeLoadVehicles(sfWebRequest $request)
  {
    //$this->agency = $this->getRoute()->getObject();
   $this->forward404Unless($this->agency = Doctrine::getTable('Agency')->find($request->getParameter('id')));
   $query = Doctrine_Query::create()->from('Vehicle v')->where('v.agency_id = ?',$this->agency->getId());
   
   $pager = new FlexigridPager($request, $query);
   $response = $pager->getDefaultStd();
   $pager = $pager->init();
   
   $i=0;
   
   foreach($pager->getResults() as $item){
          $response->rows[$i]['id'] = $item->getId();
          $response->rows[$i]['cell'] = array(
              $item->getId(),
              $item->getName(),
              $item->getBrand(),
              $item->getModel(),
              $item->getDateTimeObject('year')->format('Y'),
              $item->getId()
          );
          $i++;
   }
   return $this->renderText(json_encode($response));

   # return action wihout renderig template 
  }

  /**
   * Executes new vehicle action
   *
   * @param sfWebRequest $request
   */
  public function executeNewVehicle(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();

    $this->form = new AgencyVehicleForm(NULL, array('agencyId'=>$this->agency->getId()));
  }

  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateVehicle(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
    $this->form = new AgencyVehicleForm(NULL, array('agencyId'=>$this->agency->getId()));
    $this->processVehicleForm($request, $this->form);

    $this->setTemplate('newVehicle');
  }

  /**
   * Execute view vehicle
   *
   * @param sfWebRequest $request
   */
  public function executeViewVehicle(sfWebRequest $request)
  {
    $this->vehicle = $this->getRoute()->getObject();
  }

  /**
   * Process vehicle form
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processVehicleForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect($this->generateUrl('agency_view_vehicle',$form->getObject()));
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeListCustomers(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
  }
  
  public function executeLoadCustomers(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = Doctrine::getTable('Agency')->find($request->getParameter('id')));
     //$query = Doctrine_Query::create()->from('Vehicle v')->where('v.agency_id = ?',$this->agency->getId());

     $pager = new FlexigridPager($request, sfGuardUserProfileTable::getAgencyCustomersQuery($this->agency));
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
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  public function executeListEmployees(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
  }
  
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
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  public function executeNewEmployee(sfWebRequest $request)
  { 
    $this->agency = $this->getRoute()->getObject();
    $this->form = new EmployeeForm(array(), array('agency'=>$this->agency));
  }
  
  public function executeCreateEmployee(sfWebRequest $request)
  {
    $this->agency = $this->getRoute()->getObject();
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
      $this->redirect($this->generateUrl('view_employee',array(
                                      'agency'=> $form->getObject()->getProfile()->getAgency()->getSlug(),
                                      'slug'  => $form->getObject()->getProfile()->getSlug())
                                      ));
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeViewEmployee(sfWebRequest $request)
  {
    $this->forward404Unless($this->user = sfGuardUserProfileTable::getBySlug($request->getParameter('slug')));
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
  
  public function executeListFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  public function executeLoadFormationCenter(sfWebRequest $request)
  {
     $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
     
     $pager     = new FlexigridPager($request, FormationCenterTable::getByAgencyQuery($this->agency));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getName(),
                $item->getAddress(),
                $item->getCapacity(),
                $this->getPartial('rowFormationCenterActions',array('item'=>$item)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  public function executeNewFormationCenter(sfWebRequest $request)
  { 
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationCenterForm(array(), array('agency'=>$this->agency));
  }
  
  public function executeCreateFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationCenterForm(array(), array('agency'=>$this->agency));
    $this->processFormationCenterForm($request, $this->form);
    
    $this->setTemplate('newFormationCenter');
  }
  
  public function executeEditFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationCenter = FormationCenterTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationCenterForm($this->formationCenter);
  }
  
  public function executeUpdateFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationCenter = FormationCenterTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationCenterForm($this->formationCenter);
    $this->processFormationCenterForm($request, $this->form);
    
    $this->setTemplate('editFormationCenter');
  }
  
  
  /**
   * Process vehicle form
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processFormationCenterForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('agency/viewFormationCenter?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeViewFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationCenter = FormationCenterTable::getInstance()->find($request->getParameter('id')));
  }
  
  public function executeListAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  public function executeLoadAgencyRoom(sfWebRequest $request)
  {
     $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
     
     $pager     = new FlexigridPager($request, AgencyRoomTable::getByAgencyQuery($this->agency));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getName(),
                $item->getCapacity(),
                $this->getPartial('rowAgencyRoomActions',array('item'=>$item)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  public function executeNewAgencyRoom(sfWebRequest $request)
  { 
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new AgencyRoomForm(array(), array('agency'=>$this->agency));
  }
  
  public function executeCreateAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new AgencyRoomForm(array(), array('agency'=>$this->agency));
    $this->processAgencyRoomForm($request, $this->form);
    
    $this->setTemplate('newAgencyRoom');
  }
  
  public function executeEditAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new AgencyRoomForm($this->AgencyRoom);
  }
  
  public function executeUpdateAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new AgencyRoomForm($this->AgencyRoom);
    $this->processAgencyRoomForm($request, $this->form);
    
    $this->setTemplate('editAgencyRoom');
  }
  
  
  /**
   * Process vehicle form
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processAgencyRoomForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('agency/viewAgencyRoom?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeViewAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
  }
}
