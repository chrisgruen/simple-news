<?php

namespace ChrisGruen\SimpleNews\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SimpleNewsRepository extends Repository
{
    public function findByUid($uid)
    {
        return $this->findByIdentifier($uid);
    }
    
}
