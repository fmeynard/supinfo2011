<?php

/**
 * Frm_Rank form base class.
 *
 * @method Frm_Rank getObject() Returns the current form's model object
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFrm_RankForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'nb_posts' => new sfWidgetFormInputText(),
      'image'    => new sfWidgetFormInputText(),
      'title'    => new sfWidgetFormInputText(),
      'slug'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nb_posts' => new sfValidatorInteger(),
      'image'    => new sfValidatorPass(array('required' => false)),
      'title'    => new sfValidatorString(array('max_length' => 30)),
      'slug'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Frm_Rank', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('frm_rank[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Frm_Rank';
  }

}
