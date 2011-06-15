<?php

/**
 * Packagetest filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePackagetestFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'short_description' => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'price'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'image'             => new sfWidgetFormFilterInput(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'slug'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'short_description' => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'is_active'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'image'             => new sfValidatorPass(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'slug'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('packagetest_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Packagetest';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'name'              => 'Text',
      'short_description' => 'Text',
      'description'       => 'Text',
      'price'             => 'Number',
      'is_active'         => 'Boolean',
      'image'             => 'Text',
      'category_id'       => 'ForeignKey',
      'slug'              => 'Text',
    );
  }
}
