<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookRepo</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
  <div class="header">
  </div>
  <div class="logo">
    <div class="book col text-center ">
      <img class="img-fulid ml-5" width="300" src="{{ asset('storage/forntend/logo/logo_white.png') }}" alt="">
    </div>
  </div>

  <div class="search">
    <input type="search" class="search-box" />
    <span class="search-button">
      <span class="search-icon"></span>
    </span>
  </div>

  <!-- divider -->
  <div class="divider" style="padding: 25px 0px 25px 0;"></div>
  <!-- divider end-->

  @yield('content')

  <!-- scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $('.search-button').click(function () {
      $(this).parent().toggleClass('open');
    });
  </script>
</body>
</html>