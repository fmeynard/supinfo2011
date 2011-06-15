<?php

/**
 * FrmForum form base class.
 *
 * @method FrmForum getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFrmForumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'rank'           => new sfWidgetFormInputText(),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FrmCategory'), 'add_empty' => true)),
      'latest_post_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FrmPost'), 'add_empty' => true)),
      'nb_posts'       => new sfWidgetFormInputText(),
      'nb_topics'      => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
      'rank'           => new sfValidatorInteger(array('required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FrmCategory'), 'required' => false)),
      'latest_post_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FrmPost'), 'required' => false)),
      'nb_posts'       => new sfValidatorInteger(array('required' => false)),
      'nb_topics'      => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'FrmForum', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('frm_forum[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FrmForum';
  }

}
