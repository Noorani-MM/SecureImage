<?php

namespace NooraniMm\SecurePicture\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string encrypt(string $imagePath)
 * @method static false|string decrypt(string $imagePath)
 * @method static void storeAsEncrypted(string $imagePath, string $output)
 * @method static void storeAsDecrypted(string $imagePath, string $output)
 */
class SecureImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'secure-image';
    }
}