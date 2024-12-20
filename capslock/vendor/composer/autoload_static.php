<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28022db4c48d204c4ded64e20c31577c
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryanvictor\\Capslock\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryanvictor\\Capslock\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit28022db4c48d204c4ded64e20c31577c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28022db4c48d204c4ded64e20c31577c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28022db4c48d204c4ded64e20c31577c::$classMap;

        }, null, ClassLoader::class);
    }
}
