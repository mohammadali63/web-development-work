<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f743a4ff4836dc95a798126112b4a05
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f743a4ff4836dc95a798126112b4a05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f743a4ff4836dc95a798126112b4a05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f743a4ff4836dc95a798126112b4a05::$classMap;

        }, null, ClassLoader::class);
    }
}
