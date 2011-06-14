<?php

/**
 * PackageLine form base class.
 *
 * @method PackageLine getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePackageLineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'image'      => new sfWidgetFormInputText(),
      'package_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Package'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 64)),
      'image'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'package_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Package'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('package_line[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PackageLine';
  }

}
