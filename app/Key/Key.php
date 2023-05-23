<?php

namespace App\Key;

class Key
{
    public static function getPublicKey()
    {
        $publicKey = '-----BEGIN PUBLIC KEY-----
        MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxFdukXdLuE4I/cdptiRA
        PXiEu2lKicBK7mBKSrC2aDOVQt0Z2n1Puz7EfT5xKrQj3nZ+6QVKQ+MfIRm4w31U
        0ZeLACII+4wkf+8anGqx7YofUNJreMo8rbnqgEU/NTS3aEncHA7th6Fv1Rtt0ZkU
        vGZQlBBVNBNaEmdJo0ozoX0zmhY0qHwsumvDsfyYlmdUfqeihgR7fTut0YFnFl5D
        UC8QUcX5D1q2t03LU6uUkLH9K99Or9HLGxNioyGY5ma/TtB0hy6TBs0/3B9pehOd
        GHbiWoUATKtqRQn6BFwIMv+NeCCLTRhMK8sA3/tj+N8Yvg0DYAB4GY+iceeKPJ1p
        wQIDAQAB
        -----END PUBLIC KEY-----';

        return $publicKey;
    }
}
