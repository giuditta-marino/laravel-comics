<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Link fontawesom -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">


        <!-- Link Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Link css -->
        <link rel="stylesheet" href="/css/app.css">


    </head>
    <body>
        <header>
          <div class="header-top">
            <ul class="no-style">
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
          <div class="header-bottom">
            <nav>
              <div class="logo">
                <img src="" alt="">
              </div>
              <ul class="no-style">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
              <input type="text" name="" value="" placeholder="Search">
            </nav>
          </div>
          <div class="jumbo">
          </div>
        </header>
        <main>
          @yield('content')
        </main>
        <footer>
          <div class="footer-top">
            <div class="col-lg-4">
              <div class="col-lg-4"></div>
              <div class="col-lg-4"></div>
              <div class="col-lg-4"></div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="col lg-6">
              <div class="col-lg-4">
                <button type="button" name="button">sign-up now!</button>
              </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
              <ul class="no-style">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </footer>
    </body>
</html>
