<?php

/**
 * CommunityComment form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommunityCommentForm extends BaseCommunityCommentForm
{
  public function configure()
  {
    unset(
      $this['date'],
      $this['user_id'],
      $this['post_id']
    );
  }
  
  public function save($con = null)
  {
    if($this->getObject()->isNew())
    {
      $this->getObject()->setPostId($this->getOption('communityPost')->getId());
      $this->getObject()->setUserId(sfContext::getInstance()->getUser()->getGuardUser()->getId());
    }
    
    parent::save($con);
  }
}
