<?php

/**
 * formationSession actions.
 *
 * @package    d
 * @subpackage formationSession
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formationSessionActions extends sfActions
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
   * Executes list formation session
   *
   * @param sfWebRequest $request
   */
  public function executeListFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadFormationSession(sfWebRequest $request)
  {
     $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
     
     $pager     = new FlexigridPager($request, FormationSessionTable::getByAgencyQuery($this->agency));
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item)
     {
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getDateStart(),
                $item->getDateEnd(),
                $item->getCapacity(),
                $item->getFormationType()->getName(),
                $this->getPartial('rowFormationSessionActions',array('item'=>$item)),
            );
            $i++;
     }
     
     return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes new formation session
   *
   * @param sfWebRequest $request
   */
  public function executeNewFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationSessionForm();
  }
  
  /**
   * Executes create formation session
   *
   * @param sfWebRequest $request
   */
  public function executeCreateFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new FormationSessionForm(array(), array('agency'=>$this->agency));
    $this->processFormationSessionForm($request, $this->form);
    
    $this->setTemplate('newFormationSession');
  }
  
  /**
   * Execute edit formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeEditFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationSessionForm($this->formationSession);
  }
  
  /**
   * Executes udpate formation session action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdateFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new FormationSessionForm($this->formationSession);
    $this->processFormationSessionForm($request, $this->form);
    
    $this->setTemplate('editFormationSession');
  }
  
  /**
   * Process formation session form
   *
   * @param sfWebRequest  $request
   * @param sfForm        $form
   */
  protected function processFormationSessionForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('formationSession/viewFormationSession?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes view formation session
   *
   * @param sfWebRequest $request
   */
  public function executeViewFormationSession(sfWebRequest $request)
  {
    $this->forward404Unless($this->formationSession = FormationSessionTable::getInstance()->find($request->getParameter('id')));
  }
}
