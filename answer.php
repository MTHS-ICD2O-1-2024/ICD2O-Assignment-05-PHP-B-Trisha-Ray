<!DOCTYPE html>
<!-- ICS2O-Unit2-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Multiplication with while loops, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Multiplication with while loops, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Multiplication with while loops, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/loop.png" alt="loop" />
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

          $tempFirst = $firstNumber;
          while ($tempFirst >= 2) {
            $tempFirst = $tempFirst - 2;
          }
          $firstIsEven = ($tempFirst == 0);

          $tempSecond = $secondNumber;
          while ($tempSecond >= 2) {
            $tempSecond = $tempSecond - 2;
          }
          $secondIsEven = ($tempSecond == 0);

          if ($firstIsEven && $secondIsEven) {
            $product = 1;
            $i = $firstNumber;
            while ($i <= $secondNumber) {
              $tempI = $i;
              while ($tempI >= 2) {
                $tempI = $tempI - 2;
              }
              if ($tempI == 0) {
                $product = $product * $i;
              }
              $i++;
            }
            echo "Even numbers between $firstNumber and $secondNumber multiplied give: $product";
          } else if (!$firstIsEven && !$secondIsEven) {
            $product = 1;
            $i = $firstNumber;
            while ($i <= $secondNumber) {
              $tempI = $i;
              while ($tempI >= 2) {
                $tempI = $tempI - 2;
              }
              if ($tempI != 0) {
                $product = $product * $i;
              }
              $i++;
            }
            echo "Odd numbers between $firstNumber and $secondNumber multiplied give: $product";
          } else {
            echo "Please enter two even numbers or two odd numbers.";
          }
          ?>
        </div>
        <div class="page-content-answer">
          <a href="./index.php">Return...</a>
        </div>
      </div>
    </main>
  </div>
</body>

</html>