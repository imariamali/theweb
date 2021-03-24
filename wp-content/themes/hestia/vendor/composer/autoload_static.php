<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29b48f6a36e113e939dde482786dbbfa
{
    public static $files = array (
        '3c811c5eee2f69449ba771bff79ea54a' => __DIR__ . '/..' . '/codeinwp/ti-about-page/load.php',
        'f8d67938f2acd4847c9f112049168b79' => __DIR__ . '/..' . '/codeinwp/ti-white-label/load.php',
        '7869ca515c4ceca547c62b2a83a7f62a' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
        '19201bcde042bd01d694ceb01e4d0efb' => __DIR__ . '/..' . '/codeinwp/ti-about-page/load.php',
        'fcbf29e5d7ab766a6d238fa954d70ae8' => __DIR__ . '/..' . '/codeinwp/ti-onboarding/load.php',
        '26bd710e19d56cb959fcc5903e310d68' => __DIR__ . '/..' . '/codeinwp/ti-white-label/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit29b48f6a36e113e939dde482786dbbfa::$classMap;

        }, null, ClassLoader::class);
    }
}
