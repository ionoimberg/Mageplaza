<?php

namespace Mageplaza\HelloWorld\Block;

class Topic extends \Magento\Framework\View\Element\Template
{
    protected $_topicFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        // inject a factory object,
        \Mageplaza\HelloWorld\Model\TopicFactory $topicFactory
    ) {
        $this->_topicFactory = $topicFactory;
        parent::_construct($context);
    }

    public function _prepareLayout()
    {
        // use factory object to instantiate the model object.
        $topic = $this->_topicFactory-create();
        $collection = $topic->getCollection();

        foreach($collection as $item) {
            var_dump($item->getData());
        }
        exit;
    }
}
