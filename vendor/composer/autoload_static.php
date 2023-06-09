<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb18528ce4aa3a8b3a312079fd86a6662
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Com\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Com\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb18528ce4aa3a8b3a312079fd86a6662::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb18528ce4aa3a8b3a312079fd86a6662::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb18528ce4aa3a8b3a312079fd86a6662::$classMap;

        }, null, ClassLoader::class);
    }
}
