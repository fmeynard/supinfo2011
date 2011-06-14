<?php

/**
 * Vehicle form base class.
 *
 * @method Vehicle getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehicleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'brand'            => new sfWidgetFormInputText(),
      'model'            => new sfWidgetFormInputText(),
      'year'             => new sfWidgetFormDateTime(),
      'purchase_date'    => new sfWidgetFormDateTime(),
      'next_verif_start' => new sfWidgetFormDateTime(),
      'next_verif_end'   => new sfWidgetFormDateTime(),
      'agency_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => false)),
      'vehicle_type_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VehicleType'), 'add_empty' => false)),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 64)),
      'brand'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'model'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'year'             => new sfValidatorDateTime(array('required' => false)),
      'purchase_date'    => new sfValidatorDateTime(array('required' => false)),
      'next_verif_start' => new sfValidatorDateTime(array('required' => false)),
      'next_verif_end'   => new sfValidatorDateTime(array('required' => false)),
      'agency_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'))),
      'vehicle_type_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VehicleType'))),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Vehicle', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('vehicle[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehicle';
  }

}
