<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda5890587198736a76b09eb7961fb983
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda5890587198736a76b09eb7961fb983::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda5890587198736a76b09eb7961fb983::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
