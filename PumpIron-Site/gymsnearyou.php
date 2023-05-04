<!DOCTYPE html>
<html>

    <head class="color">

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
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light">Gyms Near You</h1>
    
            </div>
        </div>

        <div class="form-outline mx-auto" style="width: 50%;">
            <input type="search" id="form1" class="form-control border border-2 border-danger" placeholder="Type a city" aria-label="Search" />
        </div>

        <br>

        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>City Gym 1</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">Localization<br>---<br>Contacts<br>---<br>Opening Hours</div>
              </div>
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>City Gym 2</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">Localization<br>---<br>Contacts<br>---<br>Opening Hours</div>
              </div>
              <div class="col">
                <div class="p-3 border rounded-4 border-3 border-danger bg-light" style="font-size: 155%;"><strong>City Gym 3</strong></div>
                <br>
                <div class="p-3 border rounded-4 border-2 border-danger bg-light">Localization<br>---<br>Contacts<br>---<br>Opening Hours</div>
              </div>
            </div>
        </div>

        <?php
            include "footer.php";
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>

</html>