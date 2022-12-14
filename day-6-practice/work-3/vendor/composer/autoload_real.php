<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf2393d29cb0dd99d714c70d7a393e4df
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

        spl_autoload_register(array('ComposerAutoloaderInitf2393d29cb0dd99d714c70d7a393e4df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf2393d29cb0dd99d714c70d7a393e4df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf2393d29cb0dd99d714c70d7a393e4df::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
