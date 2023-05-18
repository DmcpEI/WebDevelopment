<!DOCTYPE html>
<html>

    <head class="color">

        <title>Help</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />

        <?php
            include "logo.php"
        ?>

    </head>
    
    <body class="backgroundImg">

        <div class="p-3 container-fluid">
            <div style = "height: 150px; display: flex; align-items: center; justify-content: center;">
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light" onclick="window.location.href='db/getAllHelpMessage.php'" >Help</h1>
    
            </div>
        </div>

        <div class="container">
            
            <form id="form" action = "detailsHelp.php" method="POST">

                <div style = "width: 99%;" class="input-control">
                    <label for="name" class="form-label text-light">Name*</label>
                    <input id = "name" name = "name" autofocus class="form-control" type="text" placeholder="John Doe">
                    <div class = "error"></div>
                </div>

                <div style = "width: 99%;" class="input-control">
                    <label for="email" class="form-label text-light">Email address*</label>
                    <input type="text" id="email" name = "email" class="form-control" placeholder="name@example.com">
                    <div class = "error"></div>
                </div>

                <div style = "width: 99%;" class="input-control">
                    <label for="gymLocations" class="form-label text-light">Gym Location</label>
                    <select name="gymlocation" class="form-select" aria-label="Default select example">
                        <option selected> Select...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="form-label text-light">Message*</label>
                    <div style="width: 100%; display: table;">
                        <div style="display: table-row">
                            <div class="input-control" style="display: table-cell; width: 90%;">
                                <input type="text" id="message" name = "message" class="form-control"  placeholder="Write your message here">
                                <div class = "error"></div>
                            </div>
                            &nbsp;
                            <div style="display: table-cell;">
                                <button type="submit" class="btn text-light mx-auto" style="background-color: #f80505;">Send</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <?php
            include "footer.php";
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>        
        <script src="./scriptHelp.js"></script>

    </body>
</html>