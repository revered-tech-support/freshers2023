<?php
namespace Revered\Equipment\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'equipment';

	protected $_cacheTag = 'equipm';

	protected $_eventPrefix = 'equipment';

	protected function _construct()
	{
		$this->_init('Revered\Equipment\Model\ResourceModel\Post');
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