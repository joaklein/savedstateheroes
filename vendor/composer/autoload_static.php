<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite65d9e2063ce26db614e6371ba1fe32e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite65d9e2063ce26db614e6371ba1fe32e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite65d9e2063ce26db614e6371ba1fe32e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite65d9e2063ce26db614e6371ba1fe32e::$classMap;

        }, null, ClassLoader::class);
    }
}
