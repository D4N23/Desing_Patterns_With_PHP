<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2734ddf60ce464a9be6e2d565128d581
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danilo\\DesingPatterns\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danilo\\DesingPatterns\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2734ddf60ce464a9be6e2d565128d581::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2734ddf60ce464a9be6e2d565128d581::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2734ddf60ce464a9be6e2d565128d581::$classMap;

        }, null, ClassLoader::class);
    }
}