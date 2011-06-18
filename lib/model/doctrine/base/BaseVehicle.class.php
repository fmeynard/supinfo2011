<?php

/**
 * BaseVehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $brand
 * @property string $model
 * @property timestamp $year
 * @property timestamp $purchase_date
 * @property timestamp $next_verif_start
 * @property timestamp $next_verif_end
 * @property integer $agency_id
 * @property integer $vehicle_type_id
 * @property Agency $Agency
 * @property VehicleType $VehicleType
 * @property Doctrine_Collection $FormationHasVehicle
 * @property Doctrine_Collection $VehicleVerification
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getName()                Returns the current record's "name" value
 * @method string              getBrand()               Returns the current record's "brand" value
 * @method string              getModel()               Returns the current record's "model" value
 * @method timestamp           getYear()                Returns the current record's "year" value
 * @method timestamp           getPurchaseDate()        Returns the current record's "purchase_date" value
 * @method timestamp           getNextVerifStart()      Returns the current record's "next_verif_start" value
 * @method timestamp           getNextVerifEnd()        Returns the current record's "next_verif_end" value
 * @method integer             getAgencyId()            Returns the current record's "agency_id" value
 * @method integer             getVehicleTypeId()       Returns the current record's "vehicle_type_id" value
 * @method Agency              getAgency()              Returns the current record's "Agency" value
 * @method VehicleType         getVehicleType()         Returns the current record's "VehicleType" value
 * @method Doctrine_Collection getFormationHasVehicle() Returns the current record's "FormationHasVehicle" collection
 * @method Doctrine_Collection getVehicleVerification() Returns the current record's "VehicleVerification" collection
 * @method Vehicle             setId()                  Sets the current record's "id" value
 * @method Vehicle             setName()                Sets the current record's "name" value
 * @method Vehicle             setBrand()               Sets the current record's "brand" value
 * @method Vehicle             setModel()               Sets the current record's "model" value
 * @method Vehicle             setYear()                Sets the current record's "year" value
 * @method Vehicle             setPurchaseDate()        Sets the current record's "purchase_date" value
 * @method Vehicle             setNextVerifStart()      Sets the current record's "next_verif_start" value
 * @method Vehicle             setNextVerifEnd()        Sets the current record's "next_verif_end" value
 * @method Vehicle             setAgencyId()            Sets the current record's "agency_id" value
 * @method Vehicle             setVehicleTypeId()       Sets the current record's "vehicle_type_id" value
 * @method Vehicle             setAgency()              Sets the current record's "Agency" value
 * @method Vehicle             setVehicleType()         Sets the current record's "VehicleType" value
 * @method Vehicle             setFormationHasVehicle() Sets the current record's "FormationHasVehicle" collection
 * @method Vehicle             setVehicleVerification() Sets the current record's "VehicleVerification" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseVehicle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehicle');
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
        $this->hasColumn('brand', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             ));
        $this->hasColumn('model', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             ));
        $this->hasColumn('year', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('purchase_date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('next_verif_start', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('next_verif_end', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('agency_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('vehicle_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Agency', array(
             'local' => 'agency_id',
             'foreign' => 'id'));

        $this->hasOne('VehicleType', array(
             'local' => 'vehicle_type_id',
             'foreign' => 'id'));

        $this->hasMany('FormationHasVehicle', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('VehicleVerification', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}