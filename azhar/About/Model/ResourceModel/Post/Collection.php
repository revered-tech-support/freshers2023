<?php
namespace Revered\About\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'azhar';
	protected $_eventObject = 'collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Revered\About\Model\Post', 'Revered\About\Model\ResourceModel\Post');
	}

}