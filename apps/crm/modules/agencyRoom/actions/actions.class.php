<?php

/**
 * agencyRoom actions.
 *
 * @package    d
 * @subpackage agencyRoom
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class agencyRoomActions extends sfActions
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
   * Executes list agency rooms 
   *
   * @param sfWebRequest $request
   */
  public function executeListAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load agency rooms 
   *
   * @param sfWebRequest $request
   */
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
  
  /**
   * Executes new agency room
   *
   * @param sfWebRequest $request
   */
  public function executeNewAgencyRoom(sfWebRequest $request)
  { 
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new AgencyRoomForm(array(), array('agency'=>$this->agency));
  }
  
  /**
   * Executes create agency room
   *
   * @param sfWebRequest $request
   */
  public function executeCreateAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new AgencyRoomForm(array(), array('agency'=>$this->agency));
    $this->processAgencyRoomForm($request, $this->form);
    
    $this->setTemplate('newAgencyRoom');
  }
  
  /**
   * Executes edit agency room
   *
   * @param sfWebRequest $request
   */
  public function executeEditAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new AgencyRoomForm($this->AgencyRoom);
  }
  
  /**
   * Executes update agency room
   *
   * @param sfWebRequest $request
   */
  public function executeUpdateAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new AgencyRoomForm($this->AgencyRoom);
    $this->processAgencyRoomForm($request, $this->form);
    
    $this->setTemplate('editAgencyRoom');
  }
  
  /**
   * Execute delete agency room
   * 
   * @param sfWebRequest $request
   */
  public function executeDeleteAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
    
    $slugAgency = $this->AgencyRoom->getAgency()->getSlug();
    $this->AgencyRoom->delete();
    
    $this->redirect('agencyRoom/listAgencyRoom?slug='.$slugAgency);
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
      $this->redirect('agencyRoom/viewAgencyRoom?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes view agency room
   *
   * @param sfWebRequest $request
   */
  public function executeViewAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->AgencyRoom = AgencyRoomTable::getInstance()->find($request->getParameter('id')));
  }
}
