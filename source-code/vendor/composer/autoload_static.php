<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite46ba39d2f7199b22110031037b52cfa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite46ba39d2f7199b22110031037b52cfa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite46ba39d2f7199b22110031037b52cfa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
