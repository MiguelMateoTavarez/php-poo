<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d1cf471b7bd996b363d5c9119de7a2f
{
    public static $files = array (
        'f1bf01d73705b5a44e5e50483a275a9a' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lufia\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lufia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d1cf471b7bd996b363d5c9119de7a2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d1cf471b7bd996b363d5c9119de7a2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d1cf471b7bd996b363d5c9119de7a2f::$classMap;

        }, null, ClassLoader::class);
    }
}