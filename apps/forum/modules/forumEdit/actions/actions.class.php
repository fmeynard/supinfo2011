<?php

/**
 * forumEdit actions.
 *
 * @package    d
 * @subpackage forumEdit
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class forumEditActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->frm_forums = Doctrine_Core::getTable('FrmForum')
                        ->createQuery('a')
                        ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new FrmForumForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new FrmForumForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($frm_forum = Doctrine_Core::getTable('FrmForum')->find(array($request->getParameter('id'))), sprintf('Object frm_forum does not exist (%s).', $request->getParameter('id')));
        $this->form = new FrmForumForm($frm_forum);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($frm_forum = Doctrine_Core::getTable('FrmForum')->find(array($request->getParameter('id'))), sprintf('Object frm_forum does not exist (%s).', $request->getParameter('id')));
        $this->form = new FrmForumForm($frm_forum);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($frm_forum = Doctrine_Core::getTable('FrmForum')->find(array($request->getParameter('id'))), sprintf('Object frm_forum does not exist (%s).', $request->getParameter('id')));
        $frm_forum->delete();

        $this->redirect('forumEdit/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $frm_forum = $form->save();

            $this->redirect('forumEdit/edit?id=' . $frm_forum->getId());
        }
    }

}
