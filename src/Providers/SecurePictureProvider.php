<?php

namespace NooraniMm\SecurePicture\Providers;

use Illuminate\Support\ServiceProvider;
use NooraniMm\SecurePicture\Services\SecureImageService;

class SecurePictureProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('secure-image', function ($app) {
            $key = env('APP_KEY');
            return new SecureImageService($key);
        });
    }
}