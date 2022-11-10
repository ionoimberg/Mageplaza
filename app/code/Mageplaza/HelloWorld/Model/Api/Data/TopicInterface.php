<?php

// Before create model, we need to create the interface for it. This interface plays an important role
// when it comes time to exporting CRUD models to Magento service contracts based API.

namespace Mageplaza\HelloWorld\Model\Api\Data;

interface TopicInterface
{
    public function getId();
    public function setId();

    public function getTitle();
    public function setTitle();

    public function getContent();
    public function setContent();

    public function getCreationTime();
    public function setCreationTime();
}
