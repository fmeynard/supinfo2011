<?php

/**
 * Vehicle form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VehicleForm extends BaseVehicleForm
{
  /*
   * Configure form display
   */
  public function configure()
  {
    unset(
            $this['next_verif_start'],
            $this['next_verif_end'],
            $this['slug']
    );
  }

  /*
   * Override save method
   */
  public function save($con = NULL)
  {
    //$this->getObject()->setNextVerifStart(date('Y/m/d'));
    if($this->getObject()->isNew())
    {
      if(!$this->getObject()->getYear())
      {
        $this->getObject()->setYear(date('Y/m/d'));
      }

      if(!$this->getObject()->getPurchaseDate())
      {
        $this->getObject()->setPurchaseDate('Y/m/d');
      }
    }

    parent::save($con);
  }
}
