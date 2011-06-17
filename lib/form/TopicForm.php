<?php

/**
 * FrmTopic form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TopicForm extends FrmTopicForm
{
  public function configure()
  {
     parent::configure();
     $topic = new FrmPostForm($this->getObject(), );
     unset($topic['Title']);
     $this->embedMergeForm('topic', $topic);
     sfWidgetFormSchema::setDefaultFormFormatterName('Div');
  }

  public function save($con = null)
  {
   parent::save($con);
    

  }
}
?>
