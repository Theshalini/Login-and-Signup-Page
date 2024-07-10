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
  <style>
    .btn-custom {
      background-color: #f592b1;
      border-color: #f592b1;
    }

    .btn-custom:hover {
      background-color: #f1799f !important;
      border-color: #f1799f !important;
    }

    .text-custom {
      color: #f592b1 !important;
      font-weight: 600;
      text-decoration: none;
    }

    .text-custom:hover {
      text-decoration: underline;
    }

    .vh-100 {
      background-image: url('img/home-slider/slider-9.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; /* Adjust height as needed */
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
      width: 90%; /* Adjusted width for responsiveness */
      max-width: 400px; /* Max width of the container */
      background: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px; /* Reduced margin-top */
      margin-left: auto; /* Align to right */
      margin-right: 5%; /* Added margin to shift towards right */
      color: white;
    }

    .form-outline {
      margin-bottom: 1rem;
    }

    .form-label {
      color: white;
    }

    .form-control {
      border-radius: 25px;
      background-color: transparent;
      color: white;
      border: 1px solid white;
      font-size: 1rem; /* Adjust font size as needed */
      padding: 12px; /* Adjust padding as needed */
    }


    .form-control::placeholder {
      color: white; /* Placeholder text color */
      opacity: 0.8; /* Placeholder opacity */
    }

    .btn-custom {
      width: 100%;
      border-radius: 30px;
      font-weight: 600;
      padding: 12px; /* Adjust padding as needed */
      font-size: 1.1rem; /* Adjust font size as needed */
    }
  </style>
</head>

<body>

  <section class="vh-100">
  <img src="img/logo-2.png" alt="Logo" class="top-left-image">
    <div class="container py-3 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-7 col-lg-5 col-xl-4 form-container">
          <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
          <form action="add.php" method="post">
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Your Name</label>
              <input type="text" id="form3Example1c" class="form-control form-control-lg py-2" name="name" autocomplete="off" placeholder="Enter your name" />
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Your Email</label>
              <input type="email" id="form3Example3c" class="form-control form-control-lg py-2" name="username" autocomplete="off" placeholder="Enter your email" />
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
              <input type="password" id="form3Example4c" class="form-control form-control-lg py-2" name="password" autocomplete="off" placeholder="Enter your password" />
            </div>

            <div class="d-flex justify-content-center mb-3">
              <input type="submit" value="Register" name="register" class="btn btn-custom btn-lg text-light py-2" />
            </div>
          </form>
          <p class="text-center">Already have an account? <a href="index.php" class="text-custom">Login</a></p>
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
