<?php

namespace Engine;

class Cms
{

    private $di;

    public $router;

    /**
     * CMS constructor.
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
        //$this->router->add('home', '/', 'HomeController/index');
        //s$this->router->add('product', '/product/(id)', 'HomeController/index');


        print_r($this->di);

    }

}