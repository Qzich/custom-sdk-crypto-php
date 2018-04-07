<?php

namespace Custom\CryptoImp;


use Virgil\CryptoApi\AccessTokenSigner as VirgilAccessTokenSigner;
use Virgil\CryptoApi\PrivateKey;

class AccessTokenSigner implements VirgilAccessTokenSigner
{

    /**
     * @param string     $data
     * @param PrivateKey $privateKey
     *
     * @return string
     */
    public function generateTokenSignature($data, PrivateKey $privateKey)
    {
        // TODO: Implement generateTokenSignature() method.
    }


    /**
     * @param string $signature
     *
     * @return bool
     */
    public function verifyTokenSignature($signature)
    {
        // TODO: Implement verifyTokenSignature() method.
    }


    /**
     * @return string
     */
    public function getAlgorithm()
    {
        // TODO: Implement getAlgorithm() method.
    }
}
