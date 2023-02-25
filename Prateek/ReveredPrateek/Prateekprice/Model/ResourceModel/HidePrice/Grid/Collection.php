<?php

namespace ReveredPrateek\Prateekprice\Model\ResourceModel\HidePrice\Grid;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Data\Collection\EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Api\Search\AggregationInterface;
use Psr\Log\LoggerInterface;
use ReveredPrateek\Prateekprice\Model\ResourceModel\HidePrice\Collection as HidePriceCollection;


class Collection extends HidePriceCollection implements SearchResultInterface
{
    
    protected $aggregations;

   
    public function __construct(
        EntityFactory $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        EventManagerInterface $eventManager,
        $mainTable,
        $eventPrefix,
        $eventObject,
        $resourceModel,
        AdapterInterface $connection = null,
        AbstractDb $resource = null,
        $model = 'Magento\Framework\View\Element\UiComponent\DataProvider\Document'
    )
    {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->_eventPrefix = $eventPrefix;
        $this->_eventObject = $eventObject;
        $this->_init($model, $resourceModel);
        $this->setMainTable($mainTable);
    }


    public function getAggregations()
    {
        return $this->aggregations;
    }

  
    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }


    public function getAllIds($limit = null, $offset = null)
    {
        return $this->getConnection()->fetchCol($this->_getAllIdsSelect($limit, $offset), $this->_bindParams);
    }

   
    public function getSearchCriteria()
    {
        return null;
    }

  
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        return $this;
    }

    public function getTotalCount()
    {
        return $this->getSize();
    }

  
    public function setTotalCount($totalCount)
    {
        return $this;
    }

   
    public function setItems(array $items = null)
    {
        return $this;
    }
}