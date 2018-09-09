<?php

/**
 *   List routes
 */


$this->router->add('login', '/PHP/My%20Projects/CMS/admin/login', 'LoginController:form');
$this->router->add('dashboard', '/PHP/My%20Projects/CMS/admin/', 'DashboardController:index');
