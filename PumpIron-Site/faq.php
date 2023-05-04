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

          <h1 style="font-size: 500%;" class="mx-auto text-center text-light">FAQ's</h1>

      </div>
    </div>

    <div class="p-3 container-fluid">
      <div class="accordion accordion-flush mx-auto border border-3 rounded" id="accordionFlushExample" style = "width: 800px;">
          
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              How can I pay for the subscription?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">You can go to one of the gyms near you and talk to the recepcionist and he/she will guide you on how to complete your subscription to one of our plans, or if you're sure you can pay for your <a href = "gymplans.html">subscription</a> on the site. To see the gym nearest to you you can go to this <a href = "gymsnearyou.html">page</a>.</div>
          </div>
        </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Can I have a personal trainer?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Yes you can, you can have a personal trainer if you ask the recepcionist about it and see which one you would prefer to have.</div>
          </div>
        </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Can't find what you are looking for?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Try sending an email to us and we will respond in no time, just click in the help button down bellow.</div>
          </div>
        </div>

      </div>

    </div>

    <?php
      include "footer.php";
    ?>
  
  </body>
</html>