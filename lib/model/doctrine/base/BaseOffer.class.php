<?php

/**
 * BaseOffer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property clob $description
 * @property float $price
 * @property integer $category_id
 * @property boolean $is_active
 * @property boolean $is_package_only
 * @property Category $Category
 * @property Doctrine_Collection $Packages
 * @property Doctrine_Collection $PackagesOffers
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getShortDescription()  Returns the current record's "short_description" value
 * @method clob                getDescription()       Returns the current record's "description" value
 * @method float               getPrice()             Returns the current record's "price" value
 * @method integer             getCategoryId()        Returns the current record's "category_id" value
 * @method boolean             getIsActive()          Returns the current record's "is_active" value
 * @method boolean             getIsPackageOnly()     Returns the current record's "is_package_only" value
 * @method Category            getCategory()          Returns the current record's "Category" value
 * @method Doctrine_Collection getPackages()          Returns the current record's "Packages" collection
 * @method Doctrine_Collection getPackagesOffers()    Returns the current record's "PackagesOffers" collection
 * @method Offer               setId()                Sets the current record's "id" value
 * @method Offer               setName()              Sets the current record's "name" value
 * @method Offer               setShortDescription()  Sets the current record's "short_description" value
 * @method Offer               setDescription()       Sets the current record's "description" value
 * @method Offer               setPrice()             Sets the current record's "price" value
 * @method Offer               setCategoryId()        Sets the current record's "category_id" value
 * @method Offer               setIsActive()          Sets the current record's "is_active" value
 * @method Offer               setIsPackageOnly()     Sets the current record's "is_package_only" value
 * @method Offer               setCategory()          Sets the current record's "Category" value
 * @method Offer               setPackages()          Sets the current record's "Packages" collection
 * @method Offer               setPackagesOffers()    Sets the current record's "PackagesOffers" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseOffer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('single_offer');
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
        $this->hasColumn('short_description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('price', 'float', 7, array(
             'type' => 'float',
             'scale' => 2,
             'length' => 7,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('is_package_only', 'boolean', null, array(
             'type' => 'boolean',
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Package as Packages', array(
             'refClass' => 'PackageHasOffer',
             'local' => 'offer_id',
             'foreign' => 'package_id'));

        $this->hasMany('PackageHasOffer as PackagesOffers', array(
             'local' => 'id',
             'foreign' => 'offer_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}