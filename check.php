<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>register</title>


  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="icons/service-icone-4.png" alt="" width="72" height="72">
      <h2>Register form</h2>
      <p class="lead">Become a member</p>
    </div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Personal information</h4>

      <form class="needs-validation" novalidate method="POST" action="includes/register.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstname">First name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="uni">University/Collage</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="uni" name="uni" placeholder="example @Mzuzu University" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email
          </label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address for updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Streat 4 Area 49, Dubai">
          <div class="invalid-feedback">
            Please enter your residence address.
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="city">City</label>
            <select class="custom-select d-block w-100" id="city" name="city" required>
              <option value="">select...if not available select nearest location</option>
              <option value="Blantyre">Blantyre</option>
              <option value="Lilongwe">Lilongwe</option>
              <option value="Mzuzu">Mzuzu</option>
              <option value="Karonga">Karonga</option>

            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="dob">Date of bith</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="" required>
            <div class="invalid-feedback">
              date of birth required
            </div>
          </div>
          <div class="col-md-2 mb-1">
            <label for="gender">Gender</label>
            <select class="custom-select d-block w-100" name="gender" id="gender" required>
              <option value="">select..</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-2 mb-1">
            <label for="role">Role</label>
            <select class="custom-select d-block w-100" id="role" name="role" required>
              <option value="applicant">student</option>
            </select>

          </div>
        </div>
        <hr class="mb-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password">password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="password" required>
            <div class="invalid-feedback">
              password is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="verify">verify password</label>
            <input type="text" class="form-control" id="verify" name="verify" placeholder="verify password" required>
            <div class="invalid-feedback">
              verification is required
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Register &amp Continue </button>
        <a href="index.html" class='btn' style='width:20; margin-top:-0px;  margin-bottom:8px;color:blue;'>&laquo;previous</a>
      </form>
    </div>
  </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form-validation.js"></script>
</body>

</html>