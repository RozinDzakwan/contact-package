<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb03b582a70c0fa28a8b9db8f7b5bdc6
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rozin\\Contact\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rozin\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb03b582a70c0fa28a8b9db8f7b5bdc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb03b582a70c0fa28a8b9db8f7b5bdc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb03b582a70c0fa28a8b9db8f7b5bdc6::$classMap;

        }, null, ClassLoader::class);
    }
}
