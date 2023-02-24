<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdad9017704e9e28a7daf305c2b0d47f1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdad9017704e9e28a7daf305c2b0d47f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdad9017704e9e28a7daf305c2b0d47f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
