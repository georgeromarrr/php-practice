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
      <p class="py-5">5. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.</p>

      <!-- exercise input -->
      <p class="fst-italic fw-bold py-1">Array:</p>
      <div class="d-flex justify-content-center pb-1">

        <!-- input code starts here -->
        <?php

          print_r(array(-1, 0, 1, 2, -1, -4));
          echo '<br><br>';
          print_r(array(-2, 0, 2, -3, 2, 4, 8, 10));
          echo '<br><br>';
          print_r(array(-25,-10,-7,-3,2,4,8,10));
        ?>
        <!-- input code ends here -->
        
      </div>

      <!-- exercise output -->
      <p class="fst-italic fw-bold py-5">Output:</p>
      <div class="d-flex justify-content-center pb-5">

        <!-- php code starts here -->
        <?php
          function three_Sum_zero($arr)
          {
            $count = count($arr) - 2;
            $result = [];
            for ($x = 0; $x < $count; $x++) {
              if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] == 0) {
                array_push($result, "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = 0");
              }
            }
            return $result;
          }

          print_r(three_Sum_zero(array(-1, 0, 1, 2, -1, -4)));
          echo '<br><br>';
          print_r(three_Sum_zero(array(-3, 0, 3, -4, 5, 4, 8, 10)));
          echo '<br><br>';
          print_r(three_Sum_zero(array(-25,-10,-7,-3,2,4,8,10)));
        ?>
        <!-- php code ends here -->
        
      </div>

      <div class="d-flex justify-content-end py-5">
        <!-- prev button -->
        <button
          type="button"
          class="btn btn-secondary rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-practice/exercise_4.php'"
        >
        <i class="bi bi-chevron-left"></i><span class="px-1 pb-btn-1">prev</span>
        </button>

        <!-- next button -->
        <button
          type="button"
          class="btn btn-success rounded-pill px-3 mx-2 d-flex align-items-center"
          onclick="window.location.href='/php-practice/exercise_6.php'"
        >
         <span class="px-1 pb-btn-1">next</span> <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

  </body>
</html>