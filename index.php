<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="product of even and odd numbers using loops, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
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
      <form action="answer.php" method="get">
        <br />
        Enter the first number
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="numberone" name="numberone" />
          <label class="mdl-textfield__label" for="numberone">enter number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        Enter the second number
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="numbertwo" name="numbertwo" />
          <label class="mdl-textfield__label" for="numbertwo">enter number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>