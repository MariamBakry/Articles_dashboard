<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1c3c32f31c1fcca7ca0ade71ebe0244
{
    public static $files = array (
        '0b92f9ac84f709f314c58c1c22912ea4' => __DIR__ . '/../..' . '/config/dbconnect.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DbHandler' => __DIR__ . '/../..' . '/Database/DbHandler.php',
        'MySQLHandler' => __DIR__ . '/../..' . '/Database/MySQLHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf1c3c32f31c1fcca7ca0ade71ebe0244::$classMap;

        }, null, ClassLoader::class);
    }
}
