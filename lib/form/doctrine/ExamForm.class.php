<?php

/**
 * Exam form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ExamForm extends BaseExamForm
{
  public function configure()
  {
    unset($this['agency_id']);
    
    sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setAgencyId('agency_id');
    }
    
    parent::save($con);
  }
}
