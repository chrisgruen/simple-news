<?php

namespace ChrisGruen\SimpleNews\Controller;

use ChrisGruen\SimpleNews\Domain\Repository\ContentRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class SimpleNewsController extends ActionController
{
    private $contentRepository;
    
    /**
     * Inject the team repository
     *
     * @param ChrisGruen\SimpleNews\Domain\Repository\ContentRepository $teamRepository
     */
    public function injectTeamRepository(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }
    
    public function listAction()
    {
        $listActual = $this->contentRepository->findActualContent();
        $this->view->assign('listcontent', $listActual);
    }
    
    public function listarchiveAction()
    {
        $listArchiv = $this->contentRepository->findArchiveContent();
        $this->view->assign('listcontent', $listArchiv);
    }
    
    public function listdraftAction()
    {
        $listDraft = $this->contentRepository->findDraftContent();
        $this->view->assign('listcontent', $listDraft);
    }
}

