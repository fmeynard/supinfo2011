<?php

/**
 * Offer filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOfferFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'short_description' => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'price'             => new sfWidgetFormFilterInput(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'is_active'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_package_only'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'formation_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormationType'), 'add_empty' => true)),
      'slug'              => new sfWidgetFormFilterInput(),
      'packages_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Package')),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'short_description' => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'is_active'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_package_only'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'formation_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormationType'), 'column' => 'id')),
      'slug'              => new sfValidatorPass(array('required' => false)),
      'packages_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Package', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('offer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addPackagesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.PackageHasOffer PackageHasOffer')
      ->andWhereIn('PackageHasOffer.package_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Offer';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'name'              => 'Text',
      'short_description' => 'Text',
      'description'       => 'Text',
      'price'             => 'Number',
      'category_id'       => 'ForeignKey',
      'is_active'         => 'Boolean',
      'is_package_only'   => 'Boolean',
      'formation_type_id' => 'ForeignKey',
      'slug'              => 'Text',
      'packages_list'     => 'ManyKey',
    );
  }
}
