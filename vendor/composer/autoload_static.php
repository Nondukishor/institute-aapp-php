<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd825850c83fd4bef4a6a1356a3660c88
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pondit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd825850c83fd4bef4a6a1356a3660c88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd825850c83fd4bef4a6a1356a3660c88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
