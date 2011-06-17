<?php

/**
 * FrmTopic form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TopicForm extends sfForm
{
  public function setup()
  {
     parent::configure();
     $this->disableLocalCSRFProtection();
     
     $this->embedForm('topic', new FrmTopicForm(null, array('forum'=>$this->getOption('forum'))));
     
     $postForm = new FrmPostForm();
     unset($postForm['title']);
     $this->embedForm('post', $postForm);
     
     $this->widgetSchema->setNameFormat('maintopic[%s]');
  }
  
  public function bind(array $taintedValues = null, array $taintedFiles = null)
  { 
    foreach($this->embeddedForms as $name => $form)
    {
      $form->bind($taintedValues[$name]);
    }
  }
  
  public function isValid()
  {
    foreach($this->embeddedForms as $name => $form)
    {
      if(!$form->isValid())
      {
        return false;
      }
    }
    return true;
  }
  
  public function save($con = null)
  {
    $topicForm  = $this->embeddedForms['topic'];
    $postForm   = $this->embeddedForms['post'];
    
    $topicForm->save($con);
    $postForm->getObject()->setTopicId($topicForm->getObject()->getId());
    $postForm->save($con);
  }
}
?>
