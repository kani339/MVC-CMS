<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 9/11/2018
 * Time: 20:43
 */

namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;

class Provider extends AbstractProvider
{
    /***
     * @var string
     */
    public $serviceName = 'request';

    /**
     * @return mixed
     */
    function init()
    {
       $request = new Request();

       $this->di->set($this->serviceName, $request);
    }

}