<?php

namespace NooraniMm\SecurePicture\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string encrypt(string $imagePath)
 * @method static false|string decrypt(string $encrypted_content)
 * @method static false|string decryptByPath(string $image_path)
 * @method static void storeAsEncrypted(string $imagePath, string $output)
 * @method static void storeAsDecrypted(string $encrypted_content, string $output)
 * @method static void decryptedByPathAndStore(string $image_path, string $output)
 */
class SecureImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'secure-image';
    }
}