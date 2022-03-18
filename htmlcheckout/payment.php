

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Sans-Serif;
}

#start-payment-button {
    cursor: pointer;
    position: relative;
    background-color: blueviolet;
    color: #fff;
    max-width: 30%;
    padding: 10px;
    font-weight: 600;
    font-size: 14px;
    border-radius: 10px;
    border: none;
    transition: all .1s ease-in;
}
    </style>
</head>
<body>
    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
  <div>
    Your order is RWF 400
  </div>
  <input type="hidden" name="public_key" value="FLWPUBK_TEST-3160e427ae03c7ba414e9490839fc10c-X" />
  <input type="hidden" name="customer[email]" value="ndagijimanaenock11@gmail.com" />
  <input type="hidden" name="customer[name]" value="enock" />
  <input type="hidden" name="tx_ref" value="bitethtx-019203" />
  <input type="hidden" name="payment_options" value="mobilemoneyrwanda" />
  <input type="hidden" name="amount" value="400" />
  <input type="hidden" name="currency" value="RWF" />
  <input type="hidden" name="meta[token]" value="54" />
  <input type="hidden" name="redirect_url" value="https://demoredirect.localhost.me/" />
  <button type="submit" id="start-payment-button">Pay Now</button>
</form>
</body>
</html>


