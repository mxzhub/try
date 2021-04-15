<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f18150370c006dc1540cbee9694ffff
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UniqueCode\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UniqueCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/UniqueCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f18150370c006dc1540cbee9694ffff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f18150370c006dc1540cbee9694ffff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f18150370c006dc1540cbee9694ffff::$classMap;

        }, null, ClassLoader::class);
    }
}
