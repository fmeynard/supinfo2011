<?php

require_once dirname(__FILE__).'/../lib/vehicleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/vehicleGeneratorHelper.class.php';

/**
 * vehicle actions.
 *
 * @package    d
 * @subpackage vehicle
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicleActions extends autoVehicleActions
{
  /**
   * Executes vehicles action
   *
   * @param sfWebRequest $request
   */
  public function executeVehicles(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));

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
              $this->getPartial('rowVehicleActions',array('item'=>$item)),
          );
          $i++;
   }
   return $this->renderText(json_encode($response));
  }

  /**
   * Executes new vehicle action
   *
   * @param sfWebRequest $request
   */
  public function executeNewVehicle(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));

    $this->form = new AgencyVehicleForm(NULL, array('agencyId'=>$this->agency->getId()));
  }

  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateVehicle(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
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
    $this->forward404Unless($this->vehicle = VehicleTable::getBySlug($request->getParameter('slug')));
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
      $this->redirect('vehicle/viewVehicle?slug='.$form->getObject()->getSlug());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}
