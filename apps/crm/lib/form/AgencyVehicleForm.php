<?php
class AgencyVehicleForm extends VehicleForm
{

  /**
   * Configure current form
   */
  public function configure()
  {
    unset(
            $this['agency_id']
    );

    parent::configure();
  }


  /**
   * Override save
   *
   * @param Doctrine_Connection $con
   */
  public function save($con = null)
  {
    if($this->getObject()->isNew()) {
      $this->getObject()->setAgencyId($this->getOption('agencyId'));
    }
    
    parent::save();
  }
}
