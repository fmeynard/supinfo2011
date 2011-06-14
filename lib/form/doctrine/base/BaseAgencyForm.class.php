<?php

/**
 * Agency form base class.
 *
 * @method Agency getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAgencyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'address_bis' => new sfWidgetFormInputText(),
      'phone'       => new sfWidgetFormInputText(),
      'mail'        => new sfWidgetFormInputText(),
      'fax'         => new sfWidgetFormInputText(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 64)),
      'address'     => new sfValidatorString(array('max_length' => 255)),
      'address_bis' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'mail'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fax'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Agency', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('agency[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agency';
  }

}
