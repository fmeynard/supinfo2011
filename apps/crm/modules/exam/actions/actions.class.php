<?php

/**
 * exam actions.
 *
 * @package    d
 * @subpackage exam
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class examActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }
  
  /**
   * Executes load exam action
   *
   * @param sfWebRequest $request
   */
  public function executeLoadExam(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));

    $pager     = new FlexigridPager($request, ExamTable::getByAgencyQuery($this->agency));
    $response  = $pager->getDefaultStd();
    $pager     = $pager->init();

    $i=0;

    foreach($pager->getResults() as $item)
    {
      $response->rows[$i]['id'] = $item->getId();
      $response->rows[$i]['cell'] = array(
        $item->getId(),
        $item->getFormationType()->getName(),
        $item->getDate(),
        $item->getCapacity(),
        $this->getPartial('rowExamActions',array('item'=>$item)),
        );
      $i++;
    }

    return $this->renderText(json_encode($response));
  }
  
  /**
   * Executes new exam action
   *
   * @param sfWebReques $request
   */
  public function executeNewExam(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new ExamForm(NULL, array('agency'=>$agency));
  }
  
  /**
   * Executes create exam action
   *
   * @param sfWebRequest $request
   */
  public function executeCreateExam(sfWebRequest $request)
  {
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
    
    $this->form = new ExamForm(NULL, array('agency'=>$agency));
    $this->processExamForm($request, $this->form);
    
    $this->setTemplate('new');
  }
  
  /**
   * Executes edit exam action
   *
   * @param sfWebRequest $request
   */
  public function executeEditExam(sfWebRequest $request)
  {
    $this->forward404Unless($exam = ExamTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new ExamForm($exam);
  }
  
  /**
   * Executes udpates action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdateExam(sfWebRequest $request)
  {
    $this->forward404Unless($exam = ExamTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new ExamForm($exam);
    $this->processExamForm($request, $this->form);
  }
  
  /**
   * Process exam form
   *
   * @param sfForm        $form
   * @param sfWebRequest  $request
   */
  protected function processExamForm(sfForm $form, sfWebRequest $request)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $form->save();
      $this->redirect('exam/view?id='.$form->getObject()->getId());
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes registration process action
   *
   * @param sfWebRequest $request
   */
  public function executeRegistrationProcess(sfWebRequest $request)
  {
    $this->forward404Unless($exam = ExamTable::getInstance()->find($request->getParameter('id')));
    
    $exam->registrationProcess();
    
    $this->redirect('exam/view?id='.$exam->getId());
  }
  
  /**
   * Executes create user exam
   * 
   * @param sfWebRequest $request
   */
  public function executeCreateExamUser(sfWebRequest $request)
  {
    $this->forward404Unless($exam = ExamTable::getInstance()->find($request->getParameter('id')));
    
    $this->form = new ExamUserRegistrationForm(null, array('exam'=>$exam));
    $this->form->bind($request->getParameter($this->form->getName()));
    if($this->form->isValid())
    {
      $this->form->save();
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  
  /**
   * Executes delete exam user action
   *
   * @param sfWebRequest $request
   */
  public function executeDeleteExamUser(sfWebRequest $request)
  {
    $this->forward404Unless($examUser = FormationHasUser::getInstance()->find($request)->getParameter('id'));
    
    $examId = $examUser->getExamId();
    $examUser->delete();
    
    $this->redirect('exam/view?id='.$examId);
  }
}
