<?php

/**
 * FormationSession form base class.
 *
 * @method FormationSession getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormationSessionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'name'                => new sfWidgetFormInputText(),
      'formation_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormationType'), 'add_empty' => true)),
      'agency_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => true)),
      'formation_center_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormationCenter'), 'add_empty' => true)),
      'agency_room_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AgencyRoom'), 'add_empty' => true)),
      'capacity'            => new sfWidgetFormInputText(),
      'date_start'          => new sfWidgetFormDateTime(),
      'date_end'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'formation_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormationType'), 'required' => false)),
      'agency_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'required' => false)),
      'formation_center_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormationCenter'), 'required' => false)),
      'agency_room_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AgencyRoom'), 'required' => false)),
      'capacity'            => new sfValidatorInteger(array('required' => false)),
      'date_start'          => new sfValidatorDateTime(array('required' => false)),
      'date_end'            => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formation_session[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormationSession';
  }

}
