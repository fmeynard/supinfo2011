<?php

/**
 * sfGuardUserProfileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserProfileTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserProfileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUserProfile');
    }
    
    /**
     * get last user 
     * 
     * @param integer $id Agency id
     *
     * @return Doctrine_Collection
     */
    public function getLastUser($agency_id = false)
    {
      return $this->getLastUserQuery($agency_id)->execute();
    }
    
    /**
     * get last user query
     *
     * @return Doctrine_Query
     */
    protected function getLastUserQuery() {
      return Doctrine_Query::create()
                ->from('sfGuardUserProfile p')
                ->leftJoin('p.sfGuardUser u')
                ->leftJoin('p.Agency a')
                ->orderBy('u.created_at DESC')
                ->limit(10);
    }
    
    /**
     * Get all employees
     * 
     * @param Doctrine_Query $q
     *
     * @return Doctrine_Query
     */
    public function getAllEmployees(Doctrine_Query $q)
    {
      return $q->leftJoin($q->getRootAlias().'.Agency a')
                ->addWhere($q->getRootAlias().'.type = ?',sfGuardUserProfile::TYPE_EMPLOYEE);
    }
    
    /**
     * Get Agency Customers Query
     *
     * @param Agency $agency
     *
     * @return Doctrine_Query
     */
    static public function getAgencyCustomersQuery(Agency $agency)
    {
      return Doctrine_Query::create()
              ->from('sfGuardUserProfile p')
              ->leftJoin('p.Agency a')
              ->leftJoin('p.sfGuardUser u')
              ->where('p.type = ? AND a.id = ?', array(sfGuardUserProfile::TYPE_CUSTOMER, $agency->getId()));
    }
}