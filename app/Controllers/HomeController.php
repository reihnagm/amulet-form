<?php

namespace App\Controllers;

use Config\Services;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\DateTime;
use App\Controllers\Base\BaseController;

class HomeController extends BaseController
{
    use ResponseTrait;

    public function index() {
        return view('welcome');
    }

    public function subscription() {

        $req = Services::request();

        $trxId = $req->getPost("trx_id").'-'.uniqid();
        $fullname = $req->getPost('fullname');
        $email = $req->getPost('email');
        $phone = $req->getPost('phone');
        $amount = $req->getPost('amount');
        $notes = $req->getPost('notes');
        $description = $req->getPost('description');
        $amount_include_admin = $req->getPost('amount_include_admin');
        $expire_at = $req->getPost('expire_at');
        $merchant = $req->getPost('merchant');
        $remark = $req->getPost('remark');

        $client = Services::curlrequest();

        $client = new \GuzzleHttp\Client(['verify' => false]);

        try {
            $res = $client->post('https://pg-prod.connexist.id/payment/api/v1/pay/checkout/create',
                [
                    'body' => json_encode([
                        "trxId" => $trxId,
                        "description" => $description,
                        "notes" => $notes,
                        "senderName" => $fullname,
                        "amount" => $amount,
                        "emails" => $email,
                        "phoneNumber" => $phone,
                        "amountIncludeAdmin" => $amount_include_admin,
                        "expiredAt" => $expire_at,
                        "merchant" => $merchant,
                        "remark" => $remark,
                        "callbackUrl" => ""
                    
                    ]),
                    'headers' =>  [
                        'Content-type'  => 'application/json',
                        'Authorization' => 'Basic '.getenv('BASE_64'),
                    ]
                ]
            );  

            $response = $res->getBody()->getContents();
            $result = json_decode($response);
            
           return $this->respond([
                "code" => 200,
                "error" => false,
                "message" => "Successfully subscription",
                "data" => [
                    "url" => $result->body->url
                ]
            ], 200);
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);
                $code = $exception->code;
                $message = $exception->message; 
                return $this->respond([
                    "code" => $code,
                    "message" => $message,
                ], $exception->code);
            } 
        }  catch(\GuzzleHttp\Exception\ServerException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);
                $code = $exception->code;
                $message = $exception->message; 
                return $this->respond([
                    "code" => $code,
                    "message" => $message,
                ], $exception->code);
            } 
        }
    }
}
