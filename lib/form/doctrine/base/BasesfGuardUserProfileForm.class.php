<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'sf_guard_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'agency_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => true)),
      'first_name'       => new sfWidgetFormInputText(),
      'last_name'        => new sfWidgetFormInputText(),
      'birthday'         => new sfWidgetFormDateTime(),
      'type'             => new sfWidgetFormInputText(),
      'mail'             => new sfWidgetFormInputText(),
      'phone'            => new sfWidgetFormInputText(),
      'mobile'           => new sfWidgetFormInputText(),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_guard_user_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'agency_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'required' => false)),
      'first_name'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'last_name'        => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'birthday'         => new sfValidatorDateTime(array('required' => false)),
      'type'             => new sfValidatorInteger(array('required' => false)),
      'mail'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'phone'            => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'mobile'           => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'sfGuardUserProfile', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

}
