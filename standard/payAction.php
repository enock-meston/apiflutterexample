<?php
session_start();

if (isset($_POST['btn'])) {
    # code...
    $username = $_POST['username'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
  
    $request = [
        'tx_ref' => time(),
        'amount' => $amount,
        'currency' => 'RWF',
        'payment_options' => 'mobilemoneyrwanda',
        'redirect_url' => 'http://localhost:8080/apiflutterexample/standard/process.php', //edit too
         //edit too
        'customer' => [
            'email' => $email,
            'name' => $username
        ],
        'meta' => [
            'price' => $amount
        ],
        'customizations' => [
            'title' => 'Paying for a sample product',
            'description' => 'sample'
        ]
    ];



    //* Ca;; f;iterwave emdpoint
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($request),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer FLWPUBK_TEST-3160e427ae03c7ba414e9490839fc10c-X',
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

      $res = json_decode($response);
    if($res->status == 'success')
    {
        $link = $res->data->link;
        header('Location: '.$link);
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
    }
    else
    {
        echo 'We can not process your payment';
    }

}


?>