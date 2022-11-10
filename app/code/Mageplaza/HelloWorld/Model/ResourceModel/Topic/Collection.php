<?php
// The collection model is considered a resource model which allow us to filter and fetch a collection table data.
namespace Mageplaza\HelloWorld\Model\ResourceModel\Topic;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Mageplaza\Helloworld\Model\Topic', 'Mageplaza\Helloworld\Model\ResourceModel\Topic');
    }
}
