<!doctype html>
<html lang="en" class="mdl-js">

<head>
  <meta charset="utf-8">
  <meta name="description" content="The VAT Calc">
  <meta name="author" content="Ziankevich">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

  <link rel="stylesheet" href="css/style.css?v=1.0">

  <!-- material design -->
  <link rel="stylesheet" href="/node_modules/material-design-lite/material.min.css">
  <script src="/node_modules/material-design-lite/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->

  <title>VAT Calc</title>

</head>

<body class="mdl-app mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

  <div class="mdl-layout__container has-scrolling-header">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header has-tabs is-upgraded is-small-screen">

      <main class="mdl-layout__content">

        <div class="mdl-layout__tab-panel is-active" id="vatcalc">

          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__title">
                <h4>pln vat calc v1.0</h4>
              </div>
              <div class="mdl-card__supporting-text mdl-grid js_inputsDiv">

                <!-- Zl -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--2-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="plnWithVAT">
                  <label class="mdl-textfield__label" for="sample4">Zl</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- Zl - VAT -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--1-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="plnWithoutVAT">
                  <label class="mdl-textfield__label" for="sample4">Zl (-VAT)</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- USD -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--2-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="usdWithVAT">
                  <label class="mdl-textfield__label" for="sample4">$</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- USD - VAT -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--1-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="usdWithoutVAT">
                  <label class="mdl-textfield__label" for="sample4">$ (-VAT)</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- BYN -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--2-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="bynWithVAT">
                  <label class="mdl-textfield__label" for="sample4">BYN</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- BYN - VAT -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--1-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="bynWithoutVAT">
                  <label class="mdl-textfield__label" for="sample4">BYN (-VAT)</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- Zl / USD -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--4-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="usdToZlValue" value="4.226">
                  <label class="mdl-textfield__label" for="sample4">Zl/$</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <!-- BYN / USD -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col mdl-cell--4-offset">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="usdToBYNValue" value="4.226">
                  <label class="mdl-textfield__label" for="sample4">BYN/$</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
              <i class="material-icons">settings</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
              <li class="mdl-menu__item">Lorem</li>
              <li class="mdl-menu__item" disabled>Ipsum</li>
              <li class="mdl-menu__item">Dolor</li>
            </ul>
          </section>

        </div>

      </main>

    </div>
  </div>

  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="js/index.js"></script>
</body>

</html>