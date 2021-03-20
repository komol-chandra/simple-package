<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit620dde4523758f24cacfaf9b45618eb4
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit620dde4523758f24cacfaf9b45618eb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit620dde4523758f24cacfaf9b45618eb4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit620dde4523758f24cacfaf9b45618eb4::$classMap;

        }, null, ClassLoader::class);
    }
}
