<?php

namespace ChrisGruen\SimpleNews\Domain\Model;


class SimpleNews extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * @var string
     */
    protected $title;
    
    /**
     * @var string
     */
    protected $bodytext;
    
    /**
     * @var string
     */
    protected $teaser;
    
    /**
     * @var int
     */
    protected $sort;
    

    /**
     *
     * @return \ChrisGruen\ChessManager\Domain\ModelPlayer
     */
    public function __construct()
    {

    }
    
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set name
     *
     * @param string $title title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
       
    /**
     * Get bodytext
     *
     * @return string
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }
    
    /**
     * Set bodytext
     *
     * @param string $bodytext bodytext
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;
    }
    
    /**
     * Get teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }
    
    /**
     * Set teaser
     *
     * @param string $teaser teaser
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }
    
    /**
     * Get sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }
    
    /**
     * Set sort
     *
     * @param string $sort sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

}