<?php

namespace ChrisGruen\SimpleNews\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ContentRepository extends Repository
{
    public function findActualContent()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('status', 1),
                $query->equals('display', 'actual'),
                )
            )
            ->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
            return $query->execute();
    }
    
    public function findArchiveContent()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('status', 1),
                $query->equals('display', 'archive'),
                )
            )
            ->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
            return $query->execute();
    }
    
    public function findDraftContent()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('status', 1),
                $query->equals('display', 'draft'),
                )
            )
            ->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
            return $query->execute();
    }
    
    public function findByUid($uid)
    {
        return $this->findByIdentifier($uid);
    }
    
}
