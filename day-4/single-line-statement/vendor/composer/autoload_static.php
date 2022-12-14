<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ba5168591c1f61300e06f48bba07b17
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ba5168591c1f61300e06f48bba07b17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ba5168591c1f61300e06f48bba07b17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ba5168591c1f61300e06f48bba07b17::$classMap;

        }, null, ClassLoader::class);
    }
}
