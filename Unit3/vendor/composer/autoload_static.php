<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4745f3d26ffed914c61b445aa46deaf2
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4745f3d26ffed914c61b445aa46deaf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4745f3d26ffed914c61b445aa46deaf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4745f3d26ffed914c61b445aa46deaf2::$classMap;

        }, null, ClassLoader::class);
    }
}
