<?php

namespace ChrisGruen\SimpleNews\Controller;

use ChrisGruen\SimpleNews\Domain\Repository\SimpleNewsRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ChessManagerController extends ActionController
{
    private $newsRepository;
    
    /**
     * Inject the team repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\TeamRepository $teamRepository
     */
    public function injectTeamRepository(SimpleNewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
    
    public function listAction()
    {
        $listActual = $this->newsRepository->findAll();
    }
}

