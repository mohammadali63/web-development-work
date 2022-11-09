<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfecc7dde49a81cf1ca5cf90c35ce97fc
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

        spl_autoload_register(array('ComposerAutoloaderInitfecc7dde49a81cf1ca5cf90c35ce97fc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfecc7dde49a81cf1ca5cf90c35ce97fc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfecc7dde49a81cf1ca5cf90c35ce97fc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
