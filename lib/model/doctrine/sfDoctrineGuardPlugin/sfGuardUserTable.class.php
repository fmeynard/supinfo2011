<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUser');
    }
    
    /**
     * Get marks average
     *
     * @param Doctrine_Collection $usersCollection
     *
     * @return Array
     */
    static public function getMarksAverage($type, Doctrine_Collection $usersCollection)
    {
      $averages = array();
      $users    = array();
      
      foreach($usersCollection as $user)
      {
        $avg = $user->getMarksAverage($type);
        if($avg > 0)
        {
          $averages[$user->getSfGuardUser()->getId()] = $user->getMarksAverage($type);
          $users[$user->getSfGuardUser()->getId()]    = $user->getFullname();
        }
      }
      
      arsort($averages);
      
      return array('averages'=>$averages,'users'=>$users);
    }
}