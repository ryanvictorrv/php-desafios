<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5eef1d8db01598a4d1ed8d6de40a695
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryanvictor\\Doisnumerossomamumvaloralvo\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryanvictor\\Doisnumerossomamumvaloralvo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5eef1d8db01598a4d1ed8d6de40a695::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5eef1d8db01598a4d1ed8d6de40a695::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5eef1d8db01598a4d1ed8d6de40a695::$classMap;

        }, null, ClassLoader::class);
    }
}
