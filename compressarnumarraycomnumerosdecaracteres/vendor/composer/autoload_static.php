<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26d06cdbc72d7db797d8d6b344e0d346
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryanvictor\\Compressarnumarraycomnumerosdecaracteres\\' => 52,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryanvictor\\Compressarnumarraycomnumerosdecaracteres\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26d06cdbc72d7db797d8d6b344e0d346::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26d06cdbc72d7db797d8d6b344e0d346::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26d06cdbc72d7db797d8d6b344e0d346::$classMap;

        }, null, ClassLoader::class);
    }
}
