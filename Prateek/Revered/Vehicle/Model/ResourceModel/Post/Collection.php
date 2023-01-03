<?php
namespace Revered\Vehicle\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'prateek';
	protected $_eventObject = 'collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Revered\Vehicle\Model\Post', 'Revered\Vehicle\Model\ResourceModel\Post');
	}

}