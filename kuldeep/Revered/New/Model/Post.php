<?php
namespace Revered\New\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'kuldeep';

	protected $_cacheTag = 'kuldeep_';

	protected $_eventPrefix = 'kuldeep_k';

	protected function _construct()
	{
		$this->_init('Revered\New\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
