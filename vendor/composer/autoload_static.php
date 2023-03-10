<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfc8d2f47790735032f0e74542d7b536
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ahmetsabri\\FatihLaravelSearch\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ahmetsabri\\FatihLaravelSearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Ahmetsabri\\FatihLaravelSearch\\Searchable' => __DIR__ . '/../..' . '/src/Searchable.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfc8d2f47790735032f0e74542d7b536::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfc8d2f47790735032f0e74542d7b536::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfc8d2f47790735032f0e74542d7b536::$classMap;

        }, null, ClassLoader::class);
    }
}
