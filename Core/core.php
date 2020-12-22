<?php

/**
 * (var_)dump variable(s)
 * No params, just get vars from func_get_args function
 */
function dd()
{
    $args = func_get_args();

    if (count($args))
    {
        echo "<pre>";

        foreach ($args as $arg)
        {
            var_dump($arg);
        }

        echo "</pre>";

        die();
    }
}

/**
 * Create an encrypted token and set the token var in the SESSION
 */
function createToken() : void
{
    $token = bin2hex(openssl_random_pseudo_bytes(16));

    // $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    $_SESSION['token'] = openssl_encrypt($token, $_ENV['CIPHERING'], $_ENV['SECRET'], $options, $_ENV['ENCRYPTION_IV']);
}

/**
 * De-crypt a token and compare given token with the one in the SESSION
 * @param $token (string)
 * @return true when tokens compare with each other or false when not
 */
function decryptToken($token)
{
    $options = 0;
    $decryption = openssl_decrypt($token, $_ENV['CIPHERING'], $_ENV['SECRET'], $options, $_ENV['ENCRYPTION_IV']);

    return $token === $decryption;
}

function pluralize($quantity, $singular, $plural=null)
{
    if($quantity==1 || !strlen($singular)) return $singular;
    if($plural!==null) return $plural;

    $last_letter = strtolower($singular[strlen($singular)-1]);
    switch($last_letter) {
        case 'y':
            return substr($singular,0,-1).'ies';
        case 's':
            return $singular.'es';
        default:
            return $singular.'s';
    }
}