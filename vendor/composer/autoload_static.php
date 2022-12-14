<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb18dc2e541ef40c6fb27a895405b2a14
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Anitesh\\First\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Anitesh\\First\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb18dc2e541ef40c6fb27a895405b2a14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb18dc2e541ef40c6fb27a895405b2a14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb18dc2e541ef40c6fb27a895405b2a14::$classMap;

        }, null, ClassLoader::class);
    }
}
