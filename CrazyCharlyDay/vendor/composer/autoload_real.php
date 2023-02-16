<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8fe97c5665d239a4f3c857c5b1e30c00
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit8fe97c5665d239a4f3c857c5b1e30c00', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8fe97c5665d239a4f3c857c5b1e30c00', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8fe97c5665d239a4f3c857c5b1e30c00::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
