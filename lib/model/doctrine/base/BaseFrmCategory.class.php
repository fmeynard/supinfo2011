<?php

/**
 * BaseFrmCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property clob $description
 * @property integer $rank
 * @property Doctrine_Collection $FrmForum
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method clob                getDescription() Returns the current record's "description" value
 * @method integer             getRank()        Returns the current record's "rank" value
 * @method Doctrine_Collection getFrmForum()    Returns the current record's "FrmForum" collection
 * @method FrmCategory         setId()          Sets the current record's "id" value
 * @method FrmCategory         setName()        Sets the current record's "name" value
 * @method FrmCategory         setDescription() Sets the current record's "description" value
 * @method FrmCategory         setRank()        Sets the current record's "rank" value
 * @method FrmCategory         setFrmForum()    Sets the current record's "FrmForum" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseFrmCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('frm_Category');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('rank', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('FrmForum', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}