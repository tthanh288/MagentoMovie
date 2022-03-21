<?php
namespace Magenest\Movie\Model;
class Salesorder extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'magenest_movie_movie';

    protected function _construct()
    {
        $this->_init('Magenest\Movie\Model\ResourceModel\Salesorder');
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
