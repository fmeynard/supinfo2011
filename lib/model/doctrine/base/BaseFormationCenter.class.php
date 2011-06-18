<?php

/**
 * BaseFormationCenter
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $agency_id
 * @property string $image
 * @property string $address
 * @property string $address_bis
 * @property integer $capacity
 * @property Agency $Agency
 * @property Doctrine_Collection $FormationSession
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getName()             Returns the current record's "name" value
 * @method integer             getAgencyId()         Returns the current record's "agency_id" value
 * @method string              getImage()            Returns the current record's "image" value
 * @method string              getAddress()          Returns the current record's "address" value
 * @method string              getAddressBis()       Returns the current record's "address_bis" value
 * @method integer             getCapacity()         Returns the current record's "capacity" value
 * @method Agency              getAgency()           Returns the current record's "Agency" value
 * @method Doctrine_Collection getFormationSession() Returns the current record's "FormationSession" collection
 * @method FormationCenter     setId()               Sets the current record's "id" value
 * @method FormationCenter     setName()             Sets the current record's "name" value
 * @method FormationCenter     setAgencyId()         Sets the current record's "agency_id" value
 * @method FormationCenter     setImage()            Sets the current record's "image" value
 * @method FormationCenter     setAddress()          Sets the current record's "address" value
 * @method FormationCenter     setAddressBis()       Sets the current record's "address_bis" value
 * @method FormationCenter     setCapacity()         Sets the current record's "capacity" value
 * @method FormationCenter     setAgency()           Sets the current record's "Agency" value
 * @method FormationCenter     setFormationSession() Sets the current record's "FormationSession" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseFormationCenter extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formation_center');
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
        $this->hasColumn('agency_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('address_bis', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('capacity', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Agency', array(
             'local' => 'agency_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('FormationSession', array(
             'local' => 'id',
             'foreign' => 'formation_center_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}