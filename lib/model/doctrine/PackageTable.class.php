<?php

/**
 * PackageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PackageTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PackageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Package');
    }
    
    /**
     * Get all query
     *
     * @return Doctrine_Query
     */
    static public function getAllQuery()
    {
      return Doctrine_Query::create()->from('Package');
    }
}