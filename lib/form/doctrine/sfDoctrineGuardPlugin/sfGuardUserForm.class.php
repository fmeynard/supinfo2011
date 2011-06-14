<?php

/**
 * sfGuardUser form.
 *
 * @package    d
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    unset(
      $this['created_at'], 
      $this['updated_at'], 
      $this['last_login'], 
      $this['is_super_admin'], 
      $this['salt'],
      $this['groups_list'],
      $this['permissions_list'],
      $this['algorithm']
    );
  }
}
