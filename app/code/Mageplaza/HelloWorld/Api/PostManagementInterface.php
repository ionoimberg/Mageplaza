<?php
namespace Mageplaza\HelloWorld\Api;


interface PostManagementInterface {


    /**
     * GET for Post api
     * @param string $param
     * @return string
     */

    public function getPost($param);
}
