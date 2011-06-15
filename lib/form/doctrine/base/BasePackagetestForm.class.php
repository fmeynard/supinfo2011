<?php

/**
 * Packagetest form base class.
 *
 * @method Packagetest getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePackagetestForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'short_description' => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'price'             => new sfWidgetFormInputText(),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'image'             => new sfWidgetFormInputText(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'slug'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 64)),
      'short_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'price'             => new sfValidatorNumber(),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'image'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'slug'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Packagetest', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('packagetest[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Packagetest';
  }

}
