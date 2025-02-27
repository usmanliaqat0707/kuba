<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b09f8b04e90c6973c875ca6085cf87d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'O' => 
        array (
            'Orbixtartechnologies\\Sip\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Orbixtartechnologies\\Sip\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b09f8b04e90c6973c875ca6085cf87d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b09f8b04e90c6973c875ca6085cf87d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b09f8b04e90c6973c875ca6085cf87d::$classMap;

        }, null, ClassLoader::class);
    }
}
