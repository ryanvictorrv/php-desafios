<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31535a9d511bd7e6a786847480076ed9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryanvictor\\DesafioNumero\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryanvictor\\DesafioNumero\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31535a9d511bd7e6a786847480076ed9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31535a9d511bd7e6a786847480076ed9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31535a9d511bd7e6a786847480076ed9::$classMap;

        }, null, ClassLoader::class);
    }
}
