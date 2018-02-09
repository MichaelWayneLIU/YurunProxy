<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47533751cd4bbbe4877195a70f7e19b9
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yurun\\Util\\' => 11,
            'Yurun\\Until\\' => 12,
            'Yurun\\Proxy\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yurun\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/yurunsoft/yurun-http',
        ),
        'Yurun\\Until\\' => 
        array (
            0 => __DIR__ . '/..' . '/yurunsoft/yurun-event/Src',
        ),
        'Yurun\\Proxy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47533751cd4bbbe4877195a70f7e19b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47533751cd4bbbe4877195a70f7e19b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}