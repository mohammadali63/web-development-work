<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c04754fa4a6d4f39ee7f033fc00b617
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c04754fa4a6d4f39ee7f033fc00b617::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c04754fa4a6d4f39ee7f033fc00b617::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c04754fa4a6d4f39ee7f033fc00b617::$classMap;

        }, null, ClassLoader::class);
    }
}
