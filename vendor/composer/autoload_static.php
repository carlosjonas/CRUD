<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20d5c96cd47b08cb20e806e5aa625214
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit20d5c96cd47b08cb20e806e5aa625214::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20d5c96cd47b08cb20e806e5aa625214::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20d5c96cd47b08cb20e806e5aa625214::$classMap;

        }, null, ClassLoader::class);
    }
}
