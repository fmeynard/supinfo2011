<?php

/**
 * FrmPost form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FrmPostForm extends BaseFrmPostForm
{
  public function configure()
  {
         unset($this['author_name'], $this['updated_at'], $this['created_at'],  $this['user_id'],  $this['topic_id'], $this['forum_id'] );
  }

   public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setForumId($this->getOption('FrmForum')->getId());
      $this->getObject()->setUserId(sfContext::getInstance()->getUser()->getGuardUser()->getId());
    }

    parent::save($con);
  }
}
