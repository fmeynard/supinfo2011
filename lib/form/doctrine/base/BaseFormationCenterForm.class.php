<?php

/**
 * FormationCenter form base class.
 *
 * @method FormationCenter getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormationCenterForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'agency_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => true)),
      'image'       => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'address_bis' => new sfWidgetFormInputText(),
      'capacity'    => new sfWidgetFormInputText(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 64)),
      'agency_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'required' => false)),
      'image'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address_bis' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'capacity'    => new sfValidatorInteger(array('required' => false)),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'FormationCenter', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('formation_center[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormationCenter';
  }

}
