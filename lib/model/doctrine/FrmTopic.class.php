<?php

/**
 * FrmTopic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    d
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
class FrmTopic extends BaseFrmTopic
{
    public function getTopicsByDate() {
        $q = Doctrine_Query::create()
                        ->from('FrmTopic f');

        return Doctrine_Core::getTable('FrmTopic')->getTopicsByDate($q);
    }
}