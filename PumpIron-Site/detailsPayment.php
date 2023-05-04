<!DOCTYPE html>
<html>

    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />

        <?php
            include "logo.php"
        ?>

    </head>

    <body class="backgroundImg">

        <div class="p-3 container-fluid">
            <div style = "height: 100px; display: flex; align-items: center; justify-content: center;">
    
                <h1 style="font-size: 250%;" class="mx-auto text-center text-light">Are you sure about your payment?</h1>
    
            </div>
        </div>

        <div class="container pt-4">

            <div class="row justify-content-center text-light">
                <h4>Card Number: </h4> <p><?php echo $_POST["card"]?></p>
                <h4>Street Address: </h4> <p><?php echo $_POST["street"]?></p>
                <h4>Contry: </h4> <p><?php echo $_POST["select"]?></p>
                <h4>City/Town/Village: </h4> <p><?php echo $_POST["city"]?></p>
                <h4>Province: </h4> <p><?php echo $_POST["province"]?></p>
                <h4>Postal Code: </h4> <p><?php echo $_POST["postal"]?></p>
            </div>

        </div>

        <div style="width: 40%;" class="mx-auto d-flex justify-content-center">
            <button type="submit" class="btn text-light" style="background-color: #f80505; width: 80%;" onclick="window.location.href='index.php'">Confirm</button>
        </div>

        <br>

    </body>

</html>