<?php

namespace Custom\CryptoImp;


use Virgil\CryptoApi\CardCrypto as VirgilCardCrypto;
use Virgil\CryptoApi\PrivateKey;
use Virgil\CryptoApi\PublicKey;

class CardCrypto implements VirgilCardCrypto
{

    /**
     * @param string     $data
     * @param PrivateKey $privateKey
     *
     * @return string
     */
    public function generateSignature($data, PrivateKey $privateKey)
    {
        // TODO: Implement generateSignature() method.
    }


    /**
     * @param string    $signature
     * @param string    $data
     * @param PublicKey $publicKey
     *
     * @return bool
     */
    public function verifySignature($signature, $data, PublicKey $publicKey)
    {
        // TODO: Implement verifySignature() method.
    }


    /**
     * @param PublicKey $publicKey
     *
     * @return string
     */
    public function exportPublicKey(PublicKey $publicKey)
    {
        // TODO: Implement exportPublicKey() method.
    }


    /**
     * @param string $data
     *
     * @return PublicKey
     */
    public function importPublicKey($data)
    {
        // TODO: Implement importPublicKey() method.
    }


    /**
     * @param string $data
     *
     * @return string
     */
    public function generateSHA512($data)
    {
        // TODO: Implement generateSHA512() method.
    }
}
