<?php
namespace Revered\New\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'kuldeep';
	protected $_eventObject = 'collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Revered\New\Model\Post', 'Revered\New\Model\ResourceModel\Post');
	}

}
