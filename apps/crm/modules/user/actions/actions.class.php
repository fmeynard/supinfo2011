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
}
