<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b0bb5cfd7476c6cc1845fc57290e1c3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'R' => 
        array (
            'Repositories\\' => 13,
        ),
        'P' => 
        array (
            'Petar\\HealthClinic\\' => 19,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Repositories',
        ),
        'Petar\\HealthClinic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b0bb5cfd7476c6cc1845fc57290e1c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b0bb5cfd7476c6cc1845fc57290e1c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b0bb5cfd7476c6cc1845fc57290e1c3::$classMap;

        }, null, ClassLoader::class);
    }
}
