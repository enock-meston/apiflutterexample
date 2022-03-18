


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoMo payment</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h2>MoMo API with Flutterwave</h2>

        <div class="row d-flex justify-content-center "> 
            <div class="col-md-6">
                <h3>SignUp Form</h3>
                <form action="payAction.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ammount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>
                    <input type="submit" name="btn" class="btn btn-success" value="Go to Pay">
                </form>
            </div>
    </div>
</body>

</html>