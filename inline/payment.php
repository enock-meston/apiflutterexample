<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>

<body>

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <div class="row d-flex justify-content-center ">
        <div class="col-md-6">
            <h1>MoMo API inline </h1>
            <form>
                <div>
                    Your order is Rwf 100
                </div>
                <button type="button" id="start-payment-button" class="btn btn-primary" onclick="makePayment()">Pay
                    Now</button>
            </form>
        </div>
    </div>

    <script>
    function makePayment() {
        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-3160e427ae03c7ba414e9490839fc10c-X",
            tx_ref: "titanic-48981487343MDI0NzMx",    // here to identify transation inorder to differentiate two or more transation
            amount: 100,
            currency: "RWF",
            payment_options: "mobilemoneyrwanda",
            redirect_url: "http://localhost:8080/apiflutterexample/inline/success.php",
            meta: {
                consumer_id: 23,
                consumer_mac: "92a3-912ba-1192a",
            },
            customer: {
                email: "ndagijimanaenock11@gmail.com",
                phone_number: "0723993376",
                name: "Enock Ndagijimana",
            },
            customizations: {
                title: "nigoote Payment",
                description: "Payment for an awesome cruise",
                logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
            },
        });
    }
    </script>
</body>

</html>