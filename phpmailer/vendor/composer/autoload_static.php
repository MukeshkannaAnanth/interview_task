<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b8e1b6cdc29b73b255cf53ea5210185
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b8e1b6cdc29b73b255cf53ea5210185::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b8e1b6cdc29b73b255cf53ea5210185::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b8e1b6cdc29b73b255cf53ea5210185::$classMap;

        }, null, ClassLoader::class);
    }
}
