<?php

namespace Custom\CryptoImpl;


use Virgil\CryptoApi\PrivateKey;
use Virgil\CryptoApi\PrivateKeyExporter as VirgilPrivateKeyExporter;

class PrivateKeyExporter implements VirgilPrivateKeyExporter
{

    /**
     * @param PrivateKey $key
     *
     * @return string
     */
    public function exportPrivateKey(PrivateKey $key)
    {
        // TODO: Implement exportPrivateKey() method.
    }


    /**
     * @param string $data
     *
     * @return PrivateKey
     */
    public function importPrivateKey($data)
    {
        // TODO: Implement importPrivateKey() method.
    }
}
