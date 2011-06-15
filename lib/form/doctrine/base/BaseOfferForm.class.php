<?php

/**
 * Offer form base class.
 *
 * @method Offer getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOfferForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'short_description' => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'price'             => new sfWidgetFormInputText(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'is_package_only'   => new sfWidgetFormInputCheckbox(),
      'slug'              => new sfWidgetFormInputText(),
      'packages_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Package')),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 64)),
      'short_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'price'             => new sfValidatorNumber(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'is_package_only'   => new sfValidatorBoolean(array('required' => false)),
      'slug'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'packages_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Package', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Offer', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('offer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Offer';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['packages_list']))
    {
      $this->setDefault('packages_list', $this->object->Packages->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savePackagesList($con);

    parent::doSave($con);
  }

  public function savePackagesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['packages_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Packages->getPrimaryKeys();
    $values = $this->getValue('packages_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Packages', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Packages', array_values($link));
    }
  }

}
