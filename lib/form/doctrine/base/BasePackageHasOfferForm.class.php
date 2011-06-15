<?php

/**
 * PackageHasOffer form base class.
 *
 * @method PackageHasOffer getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePackageHasOfferForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'package_id' => new sfWidgetFormInputHidden(),
      'offer_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'package_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('package_id')), 'empty_value' => $this->getObject()->get('package_id'), 'required' => false)),
      'offer_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('offer_id')), 'empty_value' => $this->getObject()->get('offer_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('package_has_offer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PackageHasOffer';
  }

}
