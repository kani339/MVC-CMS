<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8/30/2018
 * Time: 20:56
 */

namespace Engine\Core\Router;


class DispatchedRoute
{
    private $controller;
    private $parameters;

    /**
     * DispatchedRouter constructor.
     * @param $controller
     * @param array $parameters
     */
    public function __construct($controller, $parameters = [])
    {
        $this->controller = $controller;
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}