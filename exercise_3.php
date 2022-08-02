<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>rmrgrg</title>

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- css -->
    <?php include 'style.php'; ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/php-projects/index.php">PHP Practice</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="/php-projects/index.php"
                >Home</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container pt-5 mt-5">

      <!-- exercise title -->
      <p class="py-5">3. Write a PHP function to display JSON decode errors.</p>

      <!-- json error function -->
      <?php
        function jsonError($jsonString){
          $json[] = $jsonString;
          echo "Decoding: " . $jsonString;
          json_decode($jsonString);
          echo "<br>Error: ";

          switch (json_last_error()) {
            case JSON_ERROR_NONE:
              echo "No errors";
              break;
            case JSON_ERROR_DEPTH:
              echo "Maximum stack depth exceeded";
              break;
            case JSON_ERROR_STATE_MISMATCH:
              echo "Invalid or malformed JSON";
              break;
            case JSON_ERROR_CTRL_CHAR:
              echo "Control character error";
              break;
            case JSON_ERROR_SYNTAX:
              echo "Syntax error";
              break;
            case JSON_ERROR_UTF8:
              echo "Malformed UTF-8 characters";
              break;
            default:
              echo "Unknown error";
              break;
          }

          echo "<br>";
          echo $json;
          echo "<br><br><br>";
          }
      ?>

      <!-- exercise output -->
      <p class="fst-italic fw-bold py-1">JSON Decode errors:</p>
      <div class="d-flex justify-content-center pb-5">

        <!-- php code starts here -->
        <div>
          <?php jsonError("{'Romar':'1999','George':'1998','Johnny':'1991','Bravo':'1990','Kristine':'1998','Joy':'1997'}"); ?>

          <?php jsonError('[\"Hello\", 3.14, true, \"name\": \"Joe\"]'); ?>

          <?php jsonError('{"color1": "Red Color"}'); ?>
        </div>
        <!-- php code ends here -->
        
      </div>

      <div class="d-flex justify-content-end py-5">
        <!-- prev button -->
        <button
          type="button"
          class="btn btn-secondary rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-projects/exercise_2.php'"
        >
        <i class="bi bi-chevron-left"></i><span class="px-1 pb-btn-1">prev</span>
        </button>

        <!-- next button -->
        <button
          type="button"
          class="btn btn-success rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-projects/exercise_4.php'"
        >
         <span class="px-1 pb-btn-1">next</span> <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

  </body>
</html>