<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50a08c6feabe9844149d1f76031bb54d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'amstedmaxion\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'amstedmaxion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'amstedmaxion\\alert\\Alert' => __DIR__ . '/../..' . '/src/alert/Alert.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50a08c6feabe9844149d1f76031bb54d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50a08c6feabe9844149d1f76031bb54d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50a08c6feabe9844149d1f76031bb54d::$classMap;

        }, null, ClassLoader::class);
    }
}
