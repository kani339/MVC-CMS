<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
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

        try {

            $this->router->add('home', '/PHP/My%20Projects/CMS/', 'HomeController:index');
            $this->router->add('news', '/PHP/My%20Projects/CMS/news', 'HomeController:news');


            $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

            if ($routerDispatch == null)
            {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }

            // split $routerDispatch(controller, method) by two vlaues and and them to variables
            list($class, $action) = explode(':', $routerDispatch->getController(), 2);

            $controller = '\\Cms\\Controller\\' . $class;
            $parameter = $routerDispatch->getParameters();
            call_user_func_array([ new $controller($this->di), $action], $parameter);


        } catch(\Exception $e) {
            echo $e->getMessage();
            exit;
        }

    }

}