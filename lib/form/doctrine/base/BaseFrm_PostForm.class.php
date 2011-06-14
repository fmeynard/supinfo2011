<?php

/**
 * Frm_Post form base class.
 *
 * @method Frm_Post getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFrm_PostForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'content'     => new sfWidgetFormTextarea(),
      'topic_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Topic'), 'add_empty' => true)),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'forum_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Forum'), 'add_empty' => true)),
      'author_name' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'     => new sfValidatorString(array('required' => false)),
      'topic_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Topic'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'forum_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Forum'), 'required' => false)),
      'author_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('frm_post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Frm_Post';
  }

}
