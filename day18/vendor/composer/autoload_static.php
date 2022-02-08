<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00b8ab2e634e223ce14e48d133e5384c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00b8ab2e634e223ce14e48d133e5384c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00b8ab2e634e223ce14e48d133e5384c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00b8ab2e634e223ce14e48d133e5384c::$classMap;

        }, null, ClassLoader::class);
    }
}
