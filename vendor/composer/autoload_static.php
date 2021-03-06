<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16597e36dd1bfcd787ed5a8e6d908243
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebPConvert\\' => 12,
            'WebPConvertCloudService\\' => 24,
        ),
        'I' => 
        array (
            'ImageMimeTypeGuesser\\' => 21,
        ),
        'D' => 
        array (
            'DOMUtilForWebP\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebPConvert\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert/src',
        ),
        'WebPConvertCloudService\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert-cloud-service/src',
        ),
        'ImageMimeTypeGuesser\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/image-mime-type-guesser/src',
        ),
        'DOMUtilForWebP\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/dom-util-for-webp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16597e36dd1bfcd787ed5a8e6d908243::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16597e36dd1bfcd787ed5a8e6d908243::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
