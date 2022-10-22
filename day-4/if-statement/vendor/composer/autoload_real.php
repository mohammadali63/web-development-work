<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1ca0ac3a36250c2a29f4fe747a40bf1b
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

        spl_autoload_register(array('ComposerAutoloaderInit1ca0ac3a36250c2a29f4fe747a40bf1b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1ca0ac3a36250c2a29f4fe747a40bf1b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1ca0ac3a36250c2a29f4fe747a40bf1b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
