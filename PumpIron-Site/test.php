<!DOCTYPE html>
<html>

    <head class="color">

        <title>Help</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--<script defer src="./scriptHelp.js"></script>-->

        <?php
            include "logo.php"
        ?>

    </head>
    
    <body class="backgroundImg">

        <div class="p-3 container-fluid">
            <div style = "height: 150px; display: flex; align-items: center; justify-content: center;">
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light">Help</h1>
    
            </div>
        </div>

        <div class="container">
            
            <form id="form" action = "detailsHelp.php" method="POST">

            <button type="submit" class="btn text-light mx-auto" style="background-color: #f80505;">Send</button>

            </form>
        </div>

        <?php
            include "footer.php";
        ?>

    </body>
</html>