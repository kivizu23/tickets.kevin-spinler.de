<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c1718fe1ae695f29fadf90d756ec69d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kst\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kst\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kst\\Controller' => __DIR__ . '/../..' . '/src/Controller.php',
        'Kst\\Controllers\\PageController' => __DIR__ . '/../..' . '/src/Controllers/PageController.php',
        'Kst\\Controllers\\SqlController' => __DIR__ . '/../..' . '/src/Controllers/SqlController.php',
        'Kst\\Controllers\\UserController' => __DIR__ . '/../..' . '/src/Controllers/UserController.php',
        'Kst\\Models\\Page' => __DIR__ . '/../..' . '/src/Models/Page.php',
        'Kst\\Models\\SqlConnection' => __DIR__ . '/../..' . '/src/Models/SqlConnection.php',
        'Kst\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'Kst\\Router' => __DIR__ . '/../..' . '/src/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c1718fe1ae695f29fadf90d756ec69d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c1718fe1ae695f29fadf90d756ec69d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c1718fe1ae695f29fadf90d756ec69d::$classMap;

        }, null, ClassLoader::class);
    }
}