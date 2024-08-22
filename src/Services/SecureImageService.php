<?php

namespace NooraniMm\SecurePicture\Services;

class SecureImageService
{
    private $_key;
    private $_cipher;

    public function __construct($key)
    {
        $this->_key = $key;
        $this->_cipher = 'aes-256-cbc';
    }

    public function encrypt(string $imagePath): string
    {
        $content = file_get_contents($imagePath);

        $ivLength = openssl_cipher_iv_length($this->_cipher);
        $iv = openssl_random_pseudo_bytes($ivLength);

        $encrypt_data = openssl_encrypt($content, $this->_cipher, $this->_key, 0, $iv);

        return base64_encode($iv.$encrypt_data);
    }

    public function decrypt(string $imagePath): false|string
    {
        $encrypted_data = base64_decode($imagePath);

        $ivLength = openssl_cipher_iv_length($this->_cipher);
        $iv = substr($encrypted_data, 0, $ivLength);
        $encrypted_data = substr($encrypted_data, $ivLength);

        return openssl_decrypt($encrypted_data, $this->_cipher, $this->_key, 0, $iv);
    }
}