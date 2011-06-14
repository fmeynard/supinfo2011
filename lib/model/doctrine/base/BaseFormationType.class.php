<?php

/**
 * BaseFormationType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $FormationSession
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getName()             Returns the current record's "name" value
 * @method Doctrine_Collection getFormationSession() Returns the current record's "FormationSession" collection
 * @method FormationType       setId()               Sets the current record's "id" value
 * @method FormationType       setName()             Sets the current record's "name" value
 * @method FormationType       setFormationSession() Sets the current record's "FormationSession" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseFormationType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formation_type');
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
        $this->hasMany('FormationSession', array(
             'local' => 'id',
             'foreign' => 'formation_type_id'));
    }
}