<?php

/**
 * offers actions.
 *
 * @package    d
 * @subpackage offers
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class offersActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  
  public function executeListCategory(sfWebRequest $request)
  { 
   
  }
  
  public function executeLoadCategory(sfWebRequest $request)
  {
     $pager     = new FlexigridPager($request, CategoryTable::getActiveQuery());
     $response  = $pager->getDefaultStd();
     $pager     = $pager->init();

     $i=0;

     foreach($pager->getResults() as $item){
            $response->rows[$i]['id'] = $item->getId();
            $response->rows[$i]['cell'] = array(
                $item->getId(),
                $item->getName(),
                $item->getShortDescription(),
                $this->getPartial('rowCategoryActions', array('item'=>$item)),
            );
            $i++;
     }

     return $this->renderText(json_encode($response));
  }
  
  public function executeNewCategory(sfWebRequest $request)
  {
    $this->form = new CategoryForm();
  }
  
  public function executeCreateCategory(sfWebRequest $request)
  {
    $this->form = new CategoryForm();
    $this->processCategoryForm($request, $this->form);
    
    $this->setTemplate('newCategory');
  }
  
  public function executeEditCategory(sfWebRequest $request)
  {
    $this->forward404Unless($this->category = CategoryTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new CategoryForm($this->category);
  }
  
  public function executeUpdateCategory(sfWebRequest $request)
  {
    $this->forward404Unless($this->category = CategoryTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new CategoryForm($this->category);
    $this->processCategoryForm($request, $this->form);
    
    $this->setTemplate('editCategory');
  }
  
  public function executeDeleteCategory(sfWebRequest $request)
  {
    $this->forward404Unless($this->category = CategoryTable::getInstance()->find($request->getParameter('id')));
    
    $this->category->delete();
    
    $this->redirect('offers/listCategory');
  }
  
  protected function processCategoryForm(sfRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      
      $this->redirect('offers/editCategory?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  public function executeListOffer(sfWebRequest $request)
  {
    
  }
  
  public function executeLoadOffer(sfWebRequest $request)
  {
    $pager     = new FlexigridPager($request, OffersTable::getInstance()->findAll());
    $response  = $pager->getDefaultStd();
    $pager     = $pager->init();

    $i=0;

    foreach($pager->getResults() as $item){
          $response->rows[$i]['id'] = $item->getId();
          $response->rows[$i]['cell'] = array(
              $item->getId(),
              $item->getName(),
              $item->getShortDescription(),
              $item->getPrice(),
              $item->getCategory()->getName(),
              $this->getPartial('rowCategoryActions', array('item'=>$item)),
          );
          $i++;
    }

    return $this->renderText(json_encode($response));
  }
  
  public function executeNewOffer(sfWebRequest $request)
  {
    $this->form = new OfferForm();
  }
  
  public function executeCreateOffer(sfWebRequest $request)
  {
    $this->form = new OfferForm();
    $this->processOfferForm($request, $this->form);
    $this->setTemplate('newOffer');
  }
  
  public function executeEditOffer(sfWebRequest $request)
  {
    $this->forward404Unless($this->offer = OfferTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new OfferForm($this->offer);
  }
  
  public function executeUpdateOffer(sfWebRequest $request)
  {
    $this->forward404Unless($this->offer = OfferTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new OfferForm($this->offer);
    $this->processOfferForm($request, $this->form);
    $this->setTemplate('editOffer');
  }
  
  public function executeDeleteOffer(sfWebRequest $request)
  {
    $this->forward404Unless($this->offer = OfferTable::getInstance()->find($request->getParameter('id')));
    
    $this->offer->delete();
    
    $this->redirect('offers/listOffer');
  }
  
  protected function processCategoryForm(sfRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      
      $this->redirect('offers/editOffer?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    } 
  }
}
