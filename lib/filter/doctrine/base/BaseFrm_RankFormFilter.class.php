<?php

/**
 * Frm_Rank filter form base class.
 *
 * @package    d
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFrm_RankFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nb_posts' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image'    => new sfWidgetFormFilterInput(),
      'title'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nb_posts' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image'    => new sfValidatorPass(array('required' => false)),
      'title'    => new sfValidatorPass(array('required' => false)),
      'slug'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('frm_rank_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Frm_Rank';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'nb_posts' => 'Number',
      'image'    => 'Text',
      'title'    => 'Text',
      'slug'     => 'Text',
    );
  }
}
