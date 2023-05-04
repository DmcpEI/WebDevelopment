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
            <div style = "height: 200px; display: flex; align-items: center; justify-content: center;">
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light">Gym Plans</h1>
    
            </div>
        </div>

        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>Plan 1</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">
                    Price
                    <br>---<br>
                    Features
                    <br><br><br>
                    <a class="text-danger" href="payment.php" style="font-size: xx-large;"><strong>ENROLL NOW</strong></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>Plan 2</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">
                    Price
                    <br>---<br>
                    Features
                    <br><br><br>
                    <a class="text-danger" href="payment.php" style="font-size: xx-large;"><strong>ENROLL NOW</strong></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>Plan 3</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">
                    Price
                    <br>---<br>
                    Features
                    <br><br><br>
                    <a class="text-danger" href="payment.php" style="font-size: xx-large;"><strong>ENROLL NOW</strong></a>
                </div>
              </div>
            </div>
        </div>

        <?php
            include "footer.php";
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>

</html>