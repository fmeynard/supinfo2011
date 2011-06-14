<?php

/**
 * AgencyRoom filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAgencyRoomFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agency_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agency'), 'add_empty' => true)),
      'capacity'  => new sfWidgetFormFilterInput(),
      'slug'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'      => new sfValidatorPass(array('required' => false)),
      'agency_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Agency'), 'column' => 'id')),
      'capacity'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'slug'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agency_room_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AgencyRoom';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'name'      => 'Text',
      'agency_id' => 'ForeignKey',
      'capacity'  => 'Number',
      'slug'      => 'Text',
    );
  }
}
