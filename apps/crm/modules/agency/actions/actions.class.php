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
    $this->forward404Unless($this->agency = AgencyTable::getBySlug($request->getParameter('slug')));
  }  
}
