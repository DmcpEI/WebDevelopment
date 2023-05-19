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
    
                <h1 style="font-size: 250%;" class="mx-auto text-center text-light">Are you sure about your message?</h1>
    
            </div>
        </div>

        <div class="container pt-4">

            <div class="row justify-content-center text-light">
                <h4>Name: </h4> <p><?php echo $_POST["name"]?></p>
                <h4>Email Address: </h4> <p><?php echo $_POST["email"]?></p>
                <h4>Gym Location: </h4> <p><?php echo $_POST["gymlocation"]?></p>
                <h4>Message: </h4> <br> <p><?php echo $_POST["message"]?></p>
            </div>

        </div>

        <form action="db/saveHelpMessage.php" method="POST">

            <input type = "hidden" name= "name" value= "<?php echo $_POST["name"] ?>">
            <input type = "hidden" name= "email" value= "<?php echo $_POST["email"] ?>">
            <input type = "hidden" name= "gymlocation" value= "<?php echo $_POST["gymlocation"] ?>">
            <input type = "hidden" name= "message" value= "<?php echo $_POST["message"] ?>">

            <div style="width: 40%;" class="mx-auto d-flex justify-content-center">
                <button type="submit" class="btn text-light" style="background-color: #f80505; width: 80%;">Confirm</button>
            </div> 
        </form>

        <br>

    </body>

</html>