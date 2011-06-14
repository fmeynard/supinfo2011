<?php

/**
 * Vehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
class Vehicle extends BaseVehicle
{
  public function __toString()
  {
    return $this->getBrand() . ' - ' .$this->getModel() . ' ( '.date('Y',$this->getDateTimeObject('year')->format('Y')).' ) ';
  }
}
