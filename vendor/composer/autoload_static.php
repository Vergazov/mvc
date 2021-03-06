<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit294a555c787273335511aee356fcd37b
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/View',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit294a555c787273335511aee356fcd37b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit294a555c787273335511aee356fcd37b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit294a555c787273335511aee356fcd37b::$classMap;

        }, null, ClassLoader::class);
    }
}
