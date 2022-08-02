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
        <a class="navbar-brand" href="/php-practice/index.php">PHP Practice</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="/php-practice/index.php"
                >Home</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container pt-5 mt-5">

      <!-- exercise title -->
      <p class="py-5">2. Write a PHP script to get JSON representation of a value from an
            array.</p>

      <!-- exercise input -->
      <p class="fst-italic fw-bold py-1">Array:</p>
      <div class="d-flex justify-content-center pb-1">

        <!-- input code starts here -->
        <div>
          <p>1. array("Romar", "George", "Kristine", "Joy", "Johnny", "Ruby")</p>
          <p>2. array('Romar'=>'1999', 'George'=>'1998', 'Kristine'=>'1997', 'Joy'=>'1996', 'Johnny'=>'1995', 'Ruby'=>'1994');</p>
        </div>
        <!-- input code ends here -->
        
      </div>

      <!-- exercise output -->
      <p class="fst-italic fw-bold py-5">JSON Representation:</p>
      <div class="d-flex justify-content-center pb-5">

        <!-- php code starts here -->
        <?php
          $fName = array('Romar', 'George', 'Kristine', 'Bravo', 'Johnny', 'Joy');
          $bYear = array('Romar'=>'1999', 'George'=>'1998', 'Kristine'=>'1991', 'Bravo'=>'1990', 'Johnny'=>'1998', 'Joy'=>'1997');
          echo json_encode($fName);
          echo "<br>";
          echo "<br>";
          echo json_encode($bYear);
        ?>
        <!-- php code ends here -->
        
      </div>

      <div class="d-flex justify-content-end py-5">
        <!-- prev button -->
        <button
          type="button"
          class="btn btn-secondary rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-practice/exercise_2.php'"
        >
        <i class="bi bi-chevron-left"></i><span class="px-1 pb-btn-1">prev</span>
        </button>

        <!-- next button -->
        <button
          type="button"
          class="btn btn-success rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-practice/exercise_3.php'"
        >
         <span class="px-1 pb-btn-1">next</span> <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

  </body>
</html>