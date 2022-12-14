<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b510bc57f5b164fce8079f70f7e9e54
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b510bc57f5b164fce8079f70f7e9e54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b510bc57f5b164fce8079f70f7e9e54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b510bc57f5b164fce8079f70f7e9e54::$classMap;

        }, null, ClassLoader::class);
    }
}
