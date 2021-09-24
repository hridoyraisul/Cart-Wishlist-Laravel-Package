<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8dea47c0b3860a3d608783ab97ca42f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RaisulHridoy\\CartWishList\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RaisulHridoy\\CartWishList\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8dea47c0b3860a3d608783ab97ca42f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8dea47c0b3860a3d608783ab97ca42f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8dea47c0b3860a3d608783ab97ca42f::$classMap;

        }, null, ClassLoader::class);
    }
}
