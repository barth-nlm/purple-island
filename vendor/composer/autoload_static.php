<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit019ef99c970eeb5b423292b7f9e3c189
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit019ef99c970eeb5b423292b7f9e3c189::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit019ef99c970eeb5b423292b7f9e3c189::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
