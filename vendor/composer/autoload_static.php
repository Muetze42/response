<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95154e7d01c3c70733d03a13ed4ec43f
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NormanHuth\\Response\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NormanHuth\\Response\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit95154e7d01c3c70733d03a13ed4ec43f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95154e7d01c3c70733d03a13ed4ec43f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95154e7d01c3c70733d03a13ed4ec43f::$classMap;

        }, null, ClassLoader::class);
    }
}