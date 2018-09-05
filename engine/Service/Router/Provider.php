<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8/30/2018
 * Time: 09:47
 */

namespace Engine\Service\Router;


use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{

    /***
     * @var string
     */
    public $serviceName = 'router';

    /**
     * @return mixed
     */
    public function init()
    {
        $router = new Router('http://localhost:8080/PHP/My%20Projects/cms/');

        $this->di->set($this->serviceName, $router);
    }
}