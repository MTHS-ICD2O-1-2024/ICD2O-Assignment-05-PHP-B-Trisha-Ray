<!DOCTYPE html>
<!-- ICS2O-Unit2-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="product of even and odd numbers using loops, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>product of even and odd numbers using loops, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">product of even and odd numbers using loops, in PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/multiplication.jpeg" alt="multiplication" />
      </div>

      <div class="page-content-php">
        <div id="user-info">
          <?php
          $firstNumber = (int)$_GET["numberone"];
          $secondNumber = (int)$_GET["numbertwo"];

          if ($firstNumber > $secondNumber) {
            $temp = $firstNumber;
            $firstNumber = $secondNumber;
            $secondNumber = $temp;
          }

          $checkFirst = $firstNumber;
          while ($checkFirst >= 2) {
            $checkFirst = $checkFirst - 2;
          }
          $firstIsEven = ($checkFirst == 0);

          $checkSecond = $secondNumber;
          while ($checkSecond >= 2) {
            $checkSecond = $checkSecond - 2;
          }
          $secondIsEven = ($checkSecond == 0);

          if ($firstIsEven && $secondIsEven) {
            $product = 1;
            $currentNumber = $firstNumber;

            while ($currentNumber <= $secondNumber) {
              $checkCurrent = $currentNumber;
              while ($checkCurrent >= 2) {
                $checkCurrent = $checkCurrent - 2;
              }
              if ($checkCurrent == 0) {
                $product = $product * $currentNumber;
              }
              $currentNumber++;
            }

            echo "<h4>Even numbers between $firstNumber and $secondNumber multiplied give: $product</h4>";
          } else if (!$firstIsEven && !$secondIsEven) {
            $product = 1;
            $currentNumber = $firstNumber;

            while ($currentNumber <= $secondNumber) {
              $checkCurrent = $currentNumber;
              while ($checkCurrent >= 2) {
                $checkCurrent = $checkCurrent - 2;
              }
              if ($checkCurrent != 0) {
                $product = $product * $currentNumber;
              }
              $currentNumber++;
            }

            echo "<h4>Odd numbers between $firstNumber and $secondNumber multiplied give: $product</h4>";
          } else {
            echo "<h4>Please enter two even numbers or two odd numbers.</h4>";
          }
          ?>
        </div>

        <div class="page-content-answer">
          <br>
          <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" href="./index.php">Go Back</a>
        </div>
      </div>
    </main>
  </div>
</body>

</html>