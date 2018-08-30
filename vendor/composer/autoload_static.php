<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf4ae68d74381a67d1f6b372c1e96610
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf4ae68d74381a67d1f6b372c1e96610::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf4ae68d74381a67d1f6b372c1e96610::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
