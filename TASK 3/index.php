<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
<title>Cake - Bakery</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .btn-custom {
      background-color: #f592b1;
      border-color: #f592b1;
    }

    .btn-custom:hover {
      background-color: #f1799f !important;
      border-color: #f1799f !important;
    }

    .register-link {
      color: #f592b1 !important; /* Use !important to ensure style override */
      font-weight: 600;
      text-decoration: none;
    }

    .register-link:hover {
      text-decoration: underline;
    }

    .vh-100 {
      background-image: url('img/home-slider/slider-2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      overflow: hidden;
      position: relative;
    }

    .top-left-image {
      position: absolute;
      top: 10px;
      left: 10px;
      height: 50px;
      width: auto;
    }

    .form-container {
      width: 400px;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      padding: 30px;
      margin-top: 70px;
      margin-left: auto; /* Align form container to the right */
    }

    .align-items {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .form-container p {
      margin-top: 20px;
      margin-bottom: 0;
      color: white;
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <img src="img/logo-2.png" alt="Logo" class="top-left-image">
    <div class="container py-5 h-100 align-items">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-7 col-lg-5 col-xl-4 form-container">
          <form action="login.php" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13" style="color:white"> <i
                  class="bi bi-person-circle"></i> Username</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username"
                autocomplete="off" placeholder="enter your e-mail" style="border-radius:25px ;" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23" style="color:white"><i
                  class="bi bi-chat-left-dots-fill"></i> Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password"
                autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" />
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Sign in" name="login"
                class="btn btn-custom btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
            </div>
          </form>
          <p class="text-center">Don't have any account?  <a href="register.php" class="register-link"> Register Here</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous">
  </script>
</body>

</html>
