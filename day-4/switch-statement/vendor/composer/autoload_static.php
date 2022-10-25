<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff20c2d4b6f264050b677ca98b980667
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitff20c2d4b6f264050b677ca98b980667::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff20c2d4b6f264050b677ca98b980667::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff20c2d4b6f264050b677ca98b980667::$classMap;

        }, null, ClassLoader::class);
    }
}
