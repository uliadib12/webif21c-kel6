<?php

namespace App\Controllers\Utils;

use App\Controllers\BaseController;
use App\Key\Key;
use phpseclib3\Crypt\RSA;
use Throwable;


class MigrateController extends BaseController
{
    public function migrate()
    {   
        $this->RSA_auth(
            $this->request->getVar('private_key'), 
            Key::getPublicKey(),
            function() {
                $migrate = \Config\Services::migrations();

                try {
                    $migrate->latest();
                    echo "success: " . $migrate->getLastBatch();
                } catch (Throwable $e) {
                    $this->response->setStatusCode(400);
                    echo $e->getMessage();
                }
            });
    }

    private function RSA_auth($privateKey, $publicKey, $onSuccess){
        $public = RSA::loadPublicKey($publicKey);

        $private = RSA::loadPrivateKey($privateKey);

        $message = 'dummy message';
        try{
            // encrypt the message
            $ciphertext = $public->encrypt($message);
    
            // decrypt the message
            $plaintext = $private->decrypt($ciphertext);
    
            if($plaintext == $message) {
                $onSuccess();
            } else {
                $this->response->setStatusCode(400);
                echo 'failed';
            }
        }
        catch(\Exception $e) {
            $this->response->setStatusCode(400);
            echo $e->getMessage();
        }
    }
}
