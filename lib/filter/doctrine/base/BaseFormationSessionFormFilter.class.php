<?php

/**
 * FormationSession filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormationSessionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(),
      'formation_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormationType'), 'add_empty' => true)),
      'agency_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => true)),
      'capacity'          => new sfWidgetFormFilterInput(),
      'date_start'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'date_end'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'formation_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormationType'), 'column' => 'id')),
      'agency_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Agency'), 'column' => 'id')),
      'capacity'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'date_start'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_end'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('formation_session_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormationSession';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'name'              => 'Text',
      'formation_type_id' => 'ForeignKey',
      'agency_id'         => 'ForeignKey',
      'capacity'          => 'Number',
      'date_start'        => 'Date',
      'date_end'          => 'Date',
    );
  }
}
