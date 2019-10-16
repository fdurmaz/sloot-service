<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6779915d7de04f2632f7f28e6f751033
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Helper\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Helper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system/classes',
        ),
    );

    public static $classMap = array (
        'Helper\\Htmlhelper' => __DIR__ . '/../..' . '/system/classes/Htmlhelper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6779915d7de04f2632f7f28e6f751033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6779915d7de04f2632f7f28e6f751033::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6779915d7de04f2632f7f28e6f751033::$classMap;

        }, null, ClassLoader::class);
    }
}
