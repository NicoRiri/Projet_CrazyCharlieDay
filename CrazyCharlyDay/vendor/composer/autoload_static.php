<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fe97c5665d239a4f3c857c5b1e30c00
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NetVOD\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NetVOD\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fe97c5665d239a4f3c857c5b1e30c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fe97c5665d239a4f3c857c5b1e30c00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fe97c5665d239a4f3c857c5b1e30c00::$classMap;

        }, null, ClassLoader::class);
    }
}
