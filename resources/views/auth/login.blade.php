<!DOCTYPE html>
<html>

<head>
  <title>DAS Login</title>

  <!-- Script -->
  <script src="https://kit.fontawesome.com/2d78a8b052.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script type='text/javascript' src="{{ asset('/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/global.css') }}" />
</head>

<body>
  <div class="container-fluid position-relative p-0">

    <div class="d-flex flex-column justify-content-center min-vh-100 bg-main p-5">

      <div class="row flex-column align-items-center">
        <div class="col-xxl-3">
          <img src="https://www.freepnglogos.com/uploads/eagle-png-logo/lakes-eagles-png-logo-14.png"
            class="img-fluid mb-5" style="max-height: 120px; max-width: 120px" alt="">
        </div>
        <div class="col-xxl-3">
          <h1 class="fs-1">Welcome</h1>
        </div>
        <div class="col-xxl-3">
          <h2 class="fs-2">Sign in to continue</h2>
        </div>
        <div>
          <form action="" method="POST" class="w-100 mt-3" id="loginForm">
            <div class="row flex-column align-items-center">
              <div class="col-xxl-3">
                <div class="mb-3 position-relative text-white">
                  <input type="text" class="w-100 ba-secondary border-none p-3 pe-5 rounded" placeholder="Username"
                    name="username" id="username">
                  <span class="position-absolute" style="top: 16px; right:20px;">
                    <i class="fas fa-lg fa-user"></i>
                  </span>
                </div>
              </div>
              <div class="col-xxl-3">
                <div class="mb-5 position-relative text-white">
                  <input type="text" class="w-100 ba-secondary border-none p-3 pe-5 rounded" placeholder="Password"
                    name="password" id="password">
                  <span class="position-absolute" style="top: 16px; right:20px;"><i class="fas fa-lg fa-key"></i></span>
                </div>
              </div>
              <div class="col-xxl-3">
                <input type="submit" value="Login" class="btn btn-primary w-100 py-2 fs-5 fw-bold" />
              </div>
            </div>
          </form>
        </div>
      </div>
</body>



</html>
