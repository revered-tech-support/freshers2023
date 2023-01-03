<?php
namespace Revered\Vehicle\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'pro';

	protected $_cacheTag = 'pro_';

	protected $_eventPrefix = 'pro_t';

	protected function _construct()
	{
		$this->_init('Revered\Vehicle\Model\ResourceModel\Post');
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