<?php

/**
 * AgencyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AgencyTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AgencyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Agency');
    }
    
    static public function getBySlug($slug)
    {
      return Doctrine_Query::create()->from('Agency a')->where('a.slug = ?',$slug)->fetchOne();
    }
}