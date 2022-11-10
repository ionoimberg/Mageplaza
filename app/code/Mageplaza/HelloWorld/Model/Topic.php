<?php
// the model file contain overall database logic, it do not execute sql queries.
// getIdentities() method will return a unique id for the model.
// _init() method will define the resource model which will actually fetch the information from the database
namespace Mageplaza\HelloWorld\Model;

class Topic extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
//    ,\Mageplaza\HelloWorld\Model\Api\Data\TopicInterface
{
    const CACHE_TAG = 'mageplaza_topic';

    protected function __construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Topic');
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
