<?php

/**
 * VehicleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class VehicleTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object VehicleTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Vehicle');
    }

    /**
     * Get vehicles list by agency
     *
     * @param string $agency_id
     *
     * @return Doctrine_Query
     */
    static public function vehiclesByAgencyQuery($agency_id)
    {
      return Doctrine_Query::create()
              ->from('Vehicle v')
              ->where('v.agency_id = ?', $agency_id);
    }
    
    /**
     * Get by slug
     *
     * @param String $string
     *
     * @return Vehicle
     */
    static public function getBySlug($string)
    {
      return Doctrine_Query::create()
              ->from('Vehicle v')
              ->where('v.slug = ?',$string)
              ->fetchOne();
    }
}