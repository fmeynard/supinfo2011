<?php

/**
 * BaseCommunityPost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $content
 * @property integer $category_id
 * @property boolean $is_active
 * @property integer $user_id
 * @property CommunityCategory $CommunityCategory
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $CommunityComment
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getTitle()             Returns the current record's "title" value
 * @method clob                getContent()           Returns the current record's "content" value
 * @method integer             getCategoryId()        Returns the current record's "category_id" value
 * @method boolean             getIsActive()          Returns the current record's "is_active" value
 * @method integer             getUserId()            Returns the current record's "user_id" value
 * @method CommunityCategory   getCommunityCategory() Returns the current record's "CommunityCategory" value
 * @method sfGuardUser         getSfGuardUser()       Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getCommunityComment()  Returns the current record's "CommunityComment" collection
 * @method CommunityPost       setId()                Sets the current record's "id" value
 * @method CommunityPost       setTitle()             Sets the current record's "title" value
 * @method CommunityPost       setContent()           Sets the current record's "content" value
 * @method CommunityPost       setCategoryId()        Sets the current record's "category_id" value
 * @method CommunityPost       setIsActive()          Sets the current record's "is_active" value
 * @method CommunityPost       setUserId()            Sets the current record's "user_id" value
 * @method CommunityPost       setCommunityCategory() Sets the current record's "CommunityCategory" value
 * @method CommunityPost       setSfGuardUser()       Sets the current record's "sfGuardUser" value
 * @method CommunityPost       setCommunityComment()  Sets the current record's "CommunityComment" collection
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseCommunityPost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('community_post');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 64, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 64,
             ));
        $this->hasColumn('content', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('type', 'MySIAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('CommunityCategory', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('CommunityComment', array(
             'local' => 'id',
             'foreign' => 'post_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}