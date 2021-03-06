<?php

/**
 * BaseVehicleType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Vehicle
 * 
 * @method integer             getId()      Returns the current record's "id" value
 * @method string              getName()    Returns the current record's "name" value
 * @method Doctrine_Collection getVehicle() Returns the current record's "Vehicle" collection
 * @method VehicleType         setId()      Sets the current record's "id" value
 * @method VehicleType         setName()    Sets the current record's "name" value
 * @method VehicleType         setVehicle() Sets the current record's "Vehicle" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseVehicleType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehicle_type');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 64,
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Vehicle', array(
             'local' => 'id',
             'foreign' => 'vehicle_type_id'));
    }
}