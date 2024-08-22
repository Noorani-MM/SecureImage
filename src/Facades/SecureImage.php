<?php

namespace NooraniMm\SecurePicture\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string encrypt(string $imagePath)
 * @method static false|string decrypt(string $imagePath)
 */
class SecureImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'secure-image';
    }
}