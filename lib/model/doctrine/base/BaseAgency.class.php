<?php

/**
 * BaseAgency
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $address_bis
 * @property string $phone
 * @property string $mail
 * @property string $fax
 * @property Doctrine_Collection $AgencyRoom
 * @property Doctrine_Collection $FormationCenter
 * @property Doctrine_Collection $FormationSession
 * @property Doctrine_Collection $Exam
 * @property Doctrine_Collection $Vehicle
 * @property Doctrine_Collection $sfGuardUserProfile
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getName()               Returns the current record's "name" value
 * @method string              getAddress()            Returns the current record's "address" value
 * @method string              getAddressBis()         Returns the current record's "address_bis" value
 * @method string              getPhone()              Returns the current record's "phone" value
 * @method string              getMail()               Returns the current record's "mail" value
 * @method string              getFax()                Returns the current record's "fax" value
 * @method Doctrine_Collection getAgencyRoom()         Returns the current record's "AgencyRoom" collection
 * @method Doctrine_Collection getFormationCenter()    Returns the current record's "FormationCenter" collection
 * @method Doctrine_Collection getFormationSession()   Returns the current record's "FormationSession" collection
 * @method Doctrine_Collection getExam()               Returns the current record's "Exam" collection
 * @method Doctrine_Collection getVehicle()            Returns the current record's "Vehicle" collection
 * @method Doctrine_Collection getSfGuardUserProfile() Returns the current record's "sfGuardUserProfile" collection
 * @method Agency              setId()                 Sets the current record's "id" value
 * @method Agency              setName()               Sets the current record's "name" value
 * @method Agency              setAddress()            Sets the current record's "address" value
 * @method Agency              setAddressBis()         Sets the current record's "address_bis" value
 * @method Agency              setPhone()              Sets the current record's "phone" value
 * @method Agency              setMail()               Sets the current record's "mail" value
 * @method Agency              setFax()                Sets the current record's "fax" value
 * @method Agency              setAgencyRoom()         Sets the current record's "AgencyRoom" collection
 * @method Agency              setFormationCenter()    Sets the current record's "FormationCenter" collection
 * @method Agency              setFormationSession()   Sets the current record's "FormationSession" collection
 * @method Agency              setExam()               Sets the current record's "Exam" collection
 * @method Agency              setVehicle()            Sets the current record's "Vehicle" collection
 * @method Agency              setSfGuardUserProfile() Sets the current record's "sfGuardUserProfile" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseAgency extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('agency');
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
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('address_bis', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
        $this->hasColumn('mail', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('fax', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AgencyRoom', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $this->hasMany('FormationCenter', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $this->hasMany('FormationSession', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $this->hasMany('Exam', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $this->hasMany('Vehicle', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $this->hasMany('sfGuardUserProfile', array(
             'local' => 'id',
             'foreign' => 'agency_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}