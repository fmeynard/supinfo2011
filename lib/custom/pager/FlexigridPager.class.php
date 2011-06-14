<?php
class FlexigridPager
{
  protected $pager = null;

  protected $orderBy    = null;
  protected $orderType  = null;

  protected $query = null;
  protected $qtype = null;
  
  protected $modelName = null;

  public function __construct(sfWebRequest $request, Doctrine_Query $query = null, $modelName = null)
  {
    $this->parseParameters($request, $query, $modelName);
    $this->initPager();
  }

  protected function parseParameters(sfWebRequest $request, Doctrine_Query $query = null, $modelName = null)
  {
    // Pagination parameters 
    $this->currentPage    = $request->getParameter('page', 1); 
    $this->resultsPerPage = $request->getParameter('rp', 10);

    // Sort parameters 
    $this->orderBy   = $request->getParameter('sortname', false); 
    $this->orderType = $request->getParameter('sortorder', 'ASC');

    // Query parameters 
    $this->query = $request->getParameter('query', ''); 
    $this->qtype = $request->getParameter('qtype', 'name');
    
    // Define modelName
    $this->modelName = ($modelName) ? $modelName : 'Entity';
    
    // Define Doctrine_Query
    $this->query = ($query) ? $query : null;
  }
  
  protected function initPager()
  {
    $this->pager = new sfDoctrinePager($this->modelName, $this->resultsPerPage);
    $this->pager->setPage($this->currentPage);
    $this->pager->setQuery($this->getQuery());
  }

  protected function getQuery()
  {
    if(!$this->query)
    {
      $this->query = $this->pager->getQuery();
    }
    
    if($this->orderBy)
    {
      $this->query->orderBy($this->query->getRootAlias().'.'.$this->orderBy . ' ' . $this->orderType);
    }
    
    return $this->query;
  }

  public function getDefaultStd()
  {
    $response = new stdClass();
    $response->page = $this->currentPage;
    $response->total = $this->pager->getLastPage();
    
    return $response;
  }

  public function init()
  {
    $this->pager->init();
    
    return $this->pager;
  }
}