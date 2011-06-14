<?php

/**
 * Frm_Topic form base class.
 *
 * @method Frm_Topic getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFrm_TopicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'title'          => new sfWidgetFormInputText(),
      'is_sticked'     => new sfWidgetFormInputCheckbox(),
      'is_locked'      => new sfWidgetFormInputCheckbox(),
      'forum_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Forum'), 'add_empty' => true)),
      'latest_post_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Post'), 'add_empty' => true)),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'nb_posts'       => new sfWidgetFormInputText(),
      'nb_views'       => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_sticked'     => new sfValidatorBoolean(array('required' => false)),
      'is_locked'      => new sfValidatorBoolean(array('required' => false)),
      'forum_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Forum'), 'required' => false)),
      'latest_post_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Frm_Post'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'nb_posts'       => new sfValidatorInteger(array('required' => false)),
      'nb_views'       => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Frm_Topic', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('frm_topic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Frm_Topic';
  }

}
