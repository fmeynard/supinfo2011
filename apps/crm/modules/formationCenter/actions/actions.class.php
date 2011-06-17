<?php

/**
 * formationCenter actions.
 *
 * @package    d
 * @subpackage formationCenter
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formationCenterActions extends sfActions
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
   * Executes list formation center
   *
   * @param sfWebRequest $request
   */
  public function executeListFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load formation center action
   *
   * @param sfWebRequest $request
   */
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
  
  /**
   * Executes New formation center action
   *
   * @param sfWebRequest $request
   */
  public function executeNewFormationCenter(sfWebRequest $request)
  { 
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationCenterForm(array(), array('agency'=>$this->agency));
  }
  
  /**
   * Executes create formation center action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationCenterForm(array(), array('agency'=>$this->agency));
    $this->processFormationCenterForm($request, $this->form);
    
    $this->setTemplate('newFormationCenter');
  }
  
  /**
   * Executes edit formation center action
   *
   * @param sfWebRequest $request 
   */
  public function executeEditFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationCenter = FormationCenterTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationCenterForm($this->formationCenter);
  }
  
  /**
   * Executes update formation center action
   *
   * @param sfWebRequest $request
   */
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
      $this->redirect('formationCenter/viewFormationCenter?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes view formation center 
   *
   * @param sfWebRequest $request
   */
  public function executeViewFormationCenter(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationCenter = FormationCenterTable::getInstance()->find($request->getParameter('id')));
  }
  
  /**
   * Executes list agency room
   */
  public function executeListAgencyRoom(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
}
