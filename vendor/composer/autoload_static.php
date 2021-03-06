<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f094e84178837d1c9e6ce2a0712f13a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TK_WORDPRESS_OPTIMIZER\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TK_WORDPRESS_OPTIMIZER\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f094e84178837d1c9e6ce2a0712f13a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f094e84178837d1c9e6ce2a0712f13a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
