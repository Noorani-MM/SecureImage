# Secure picture 🔐

Make your image files secure by this package.

## Install package

```bash
composer require noorani-mm/secure-image
```

### Laravel 11, installation

In `bootstrap\providers.php` file add line below.

```php

return [
    // Other providers... 
    \NooraniMm\SecurePicture\Providers\SecureImageProvider::class,
];
```

### Older Laravel installation

in `config/app.php` find `providers` and add line below.

```php
'providers' => [
    // Other providers...
    \NooraniMm\SecurePicture\Providers\SecureImageProvider::class,
    ]
```

# How to use 🛠

### Encryption

```php
use \NooraniMm\SecurePicture\Facades\SecureImage;

$encrypted_content = SecureImage::encrypt('picture.jpg');
```

- If you want to encrypt and store file you should use

```php
use NooraniMm\SecurePicture\Facades\SecureImage;

SecureImage::storeAsEncrypted('picture.jpg', 'encrypted.jpg');
```

### Decryption

```php
use \NooraniMm\SecurePicture\Facades\SecureImage;
$encrypted_data = file_get_contents('encrypted.jpg');
$decrypted_content = SecureImage::decrypt($encrypted_data);
```

- If you want to store decrypted file you should use

```php
use \NooraniMm\SecurePicture\Facades\SecureImage;

$encrypted_content = file_get_contents('encrypted.jpg');
SecureImage::storeAsDecrypted($encrypted_content, 'output.jpg');
```

- If you want to decrypt file by path you should use 

```php
use NooraniMm\SecurePicture\Facades\SecureImage;

$decrypted_data = SecureImage::decryptByPath('encrypted.jpg');
```

- If you want to decrypt and store it by path you should use 

```php
use \NooraniMm\SecurePicture\Facades\SecureImage;

SecureImage::decryptedByPathAndStore('encrypted.jpg', 'output.jpg');
```