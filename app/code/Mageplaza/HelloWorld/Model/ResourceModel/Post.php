<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context ) {

        parent::__construct($context);
    }

    // Resource initialization
    protected function _construct()
    {
        // Standard resource model initialization
        $this->_init('mageplaza_helloworld_post', 'post_id');
    }

}
