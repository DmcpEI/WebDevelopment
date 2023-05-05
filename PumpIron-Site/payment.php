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
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light">Payment</h1>
    
            </div>
        </div>

        <div class="container">

            <form id = "form" action = "detailsPayment.php" method="POST">

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id = "card" name = "card" autofocus class="form-control" type="text" placeholder="Card Number">
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id="street" name="street" class="form-control" type="text" aria-label="default input example" placeholder="Street Address">
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <select id="select" name="select" class="form-select" aria-label="Default select example">
                        <option value="0" selected>Country</option>
                        <option value="1">Slovenia</option>
                        <option value="2">Portugal</option>
                        <option value="3">United Kingdom</option>
                    </select>
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id="city" name="city" class="form-control" type="text" aria-label="default input example" placeholder="City / Town / Village">
                    <div class = "error"></div>
                </div>

                <div style="width: 35%;" class="mx-auto mb-5">
                    <div style="display: flex; align-items: center;">
                        <div class="input-control">
                            <input id="province" name="province" style="margin-right: 2%;" class="form-control" type="text" aria-label="default input example" placeholder="Province / Region">
                            <div class = "error"></div>
                        </div>
                        &nbsp;
                        <div class="input-control">
                            <input id="postal" name="postal" style="margin-left: 2%;" class="form-control" type="text" aria-label="default input example" placeholder="Postal Code">
                            <div class = "error"></div>
                        </div>
                    </div>
                </div>

                <div style="width: 40%;" class="mx-auto d-flex justify-content-center">
                    <button type="submit" class="btn text-light" style="background-color: #f80505; width: 80%;">Confirm Payment</button>
                </div>

            </form>

        </div>

        <?php
            include "footer.php";
        ?>   

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>        
        <script src="./scriptPayment.js"></script>

    </body>

</html>