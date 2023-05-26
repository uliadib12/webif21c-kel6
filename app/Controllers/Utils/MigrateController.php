<?php

namespace App\Controllers\Utils;

use App\Controllers\BaseController;
use App\Key\Key;
use phpseclib3\Crypt\RSA;
use Throwable;


class MigrateController extends BaseController
{
    public function getMigrate()
    {
        $this->RSA_auth(
            $this->request->getPost('private_key'),
            Key::getPublicKey(),
            function() {
                $migrate = \Config\Services::migrations();

                try {
                    echo json_encode($migrate->findMigrations());
                } catch (Throwable $e) {
                    $this->response->setStatusCode(400);
                    echo $e->getMessage();
                }
            });
    }

    public function migrate()
    {   
        $this->RSA_auth(
            $this->request->getPost('private_key'), 
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

    public function rollback()
    {
        $this->RSA_auth(
            $this->request->getPost('private_key'), 
            Key::getPublicKey(),
            function() {
                $migrate = \Config\Services::migrations();

                try {
                    $batch = $this->request->getPost('batch');
                    if($batch != null && is_numeric($batch)) {
                        if($migrate->regress($batch[0]) == false) {
                            echo "failed: ". $migrate->getLastBatch();
                        }
                        else {
                            echo "success: " . $migrate->getLastBatch();
                        }
                    }
                    else {
                        echo "please provide batch number";
                    }
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
