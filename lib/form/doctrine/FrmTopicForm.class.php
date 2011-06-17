<?php

/**
 * FrmTopic form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FrmTopicForm extends BaseFrmTopicForm
{
  public function configure()
  {
    unset($this['slug'], $this['updated_at'], $this['created_at'], $this['nb_views'], $this['nb_posts'],  $this['user_id'],  $this['latest_post_id'], $this['forum_id'], $this['is_locked'], $this['is_sticked'] );

    parent::configure();

  }

  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setForumId($this->getOption('forum')->getId());
      $this->getObject()->setUserId(sfContext::getInstance()->getUser()->getGuardUser()->getId());
    }

    parent::save($con);
       $forum = Doctrine::getTable('frmForum')->find($this->getOption('forum')->getId());
       $forum->setNbTopics($forum->getNbTopics()+ 1);
       $forum->save($con);
       
  }
}
