<?php

/**
 * Agency filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAgencyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address_bis' => new sfWidgetFormFilterInput(),
      'phone'       => new sfWidgetFormFilterInput(),
      'mail'        => new sfWidgetFormFilterInput(),
      'fax'         => new sfWidgetFormFilterInput(),
      'slug'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'address'     => new sfValidatorPass(array('required' => false)),
      'address_bis' => new sfValidatorPass(array('required' => false)),
      'phone'       => new sfValidatorPass(array('required' => false)),
      'mail'        => new sfValidatorPass(array('required' => false)),
      'fax'         => new sfValidatorPass(array('required' => false)),
      'slug'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agency_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agency';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'address'     => 'Text',
      'address_bis' => 'Text',
      'phone'       => 'Text',
      'mail'        => 'Text',
      'fax'         => 'Text',
      'slug'        => 'Text',
    );
  }
}
