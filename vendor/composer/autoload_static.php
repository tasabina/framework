<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8c01692de58ffb5e80cd7658450fd54
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fw\\' => 3,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fw\\' => 
        array (
            0 => __DIR__ . '/..' . '/fw',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Valitron' => 
            array (
                0 => __DIR__ . '/..' . '/vlucas/valitron/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8c01692de58ffb5e80cd7658450fd54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8c01692de58ffb5e80cd7658450fd54::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita8c01692de58ffb5e80cd7658450fd54::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
