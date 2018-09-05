<?php

namespace Engine;

use Engine\Helper\Common;

class Cms
{

    private $di;

    public $router;

    /**
     * cms constructor.
     * @param $di
     */
    public  function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Runs entire program
     */
    public function run()
    {
        $this->router->add('home', '/PHP/My%20Projects/CMS/', 'HomeController:index');
        $this->router->add('product', '/product/7', 'ProductController:index');
        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

        print_r($routerDispatch);


    }

}