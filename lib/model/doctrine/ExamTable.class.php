<?php

/**
 * ExamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ExamTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ExamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Exam');
    }
    
    /**
     * Get exams query for the given $agency
     * 
     * @param Agency $query
     * 
     * @return Doctrine_Query
     */
    static public function getByAgencyQuery(Agency $agency)
    {
      return Doctrine_Query::create()
              ->from('Exam e')
              ->leftJoin('e.Agency a')
              ->where('a.id = ?', $agency->getId());
    }
}