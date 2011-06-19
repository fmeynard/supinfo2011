<?php

/**
 * TeacherUnavailability form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TeacherUnavailabilityForm extends BaseTeacherUnavailabilityForm
{
  public function configure()
  {
      unset($this['user_id']);
  }
}
