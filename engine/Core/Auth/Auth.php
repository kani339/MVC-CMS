<?php


namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    /***
     * @var bool
     */
    public $authorized = false;
    protected $user;


    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->user;
    }


    /**
     * User authorized
     * @param $user
     */
    public function authorize($user)
    {
        Cookie::set('auth.authorized', true);
        Cookie::set('auth.user', $user);

        $this->authorized   = true;
        $this->user         = $user;
    }


    /**
     * User unauthorization
     * @return void
     */
    public function unAuthorize()
    {
        Cookie::delete('auth.authorized');
        Cookie::delete('auth.user');

        $this->authorized   = false;
        $this->user         = null;
    }


    /**
     * @return string
     */
    public static function salt()
    {
        return (string) rang(1000000, 9999999);
    }


    /**
     * @param $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }


}