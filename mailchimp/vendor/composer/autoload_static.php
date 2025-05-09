<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4631e7ae4a2f6a3795a92a813440087
{
    public static $files = array (
        'f4d10ed4b7b76c603a1641a8e07ede95' => __DIR__ . '/../..' . '/includes/admin/admin-notices.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mailchimp\\WordPress\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mailchimp\\WordPress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mailchimp_Admin' => __DIR__ . '/../..' . '/includes/class-mailchimp-admin.php',
        'Mailchimp_Data_Encryption' => __DIR__ . '/../..' . '/includes/class-mailchimp-data-encryption.php',
        'Mailchimp_Form_Submission' => __DIR__ . '/../..' . '/includes/class-mailchimp-form-submission.php',
        'Mailchimp_List_Subscribe_Form_Blocks' => __DIR__ . '/../..' . '/includes/blocks/class-mailchimp-list-subscribe-form-blocks.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4631e7ae4a2f6a3795a92a813440087::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4631e7ae4a2f6a3795a92a813440087::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4631e7ae4a2f6a3795a92a813440087::$classMap;

        }, null, ClassLoader::class);
    }
}
