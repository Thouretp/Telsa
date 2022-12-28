@include('configAuth')
<?php
// require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'timout' => 2.0,
]);
try{
    $response = $client->request('GET','https://accounts.google.com/.well-known/openid-configuration');
    $discoveryJSON = json_decode((string)$response->getBody());
    $tokenEndPoint = $discoveryJSON->token_endpoint;
    $userinfoEndPoint = $discoveryJSON->userinfo_endpoint;
    $response = $client->request('POST',$tokenEndPoint, [
        'form_params' => [
            'code' => $_GET['code'],
            'client_id' => GOOGLE_ID,
            'client_secret' => GOOGLE_SECRET,
            'redirect_uri' => 'http://localhost:8282/connect',
            'grant_type' => 'authorization_code'
        ]
    ]);
    $accessToken = json_decode($response->getBody())->access_token;
    $response = $client->request('GET', $userinfoEndPoint,[
        'headers' => [
            'Authorization' => 'Bearer' . $accessToken
        ]
    ]);
    $response = json_decode($response->getBody());
    if($response->email_verified === true) {
        session_start();
        $_SESSION['email'] = $response->email;
        header('Location: /secret');
        exit();
    }


} catch (\GuzzleHttp\Exception\ClientException $exception) {
    dd($exception->getMessage());
}
dd((string)$response->getBody());