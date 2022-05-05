<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  <link href="../form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container">

    <div class="col-md-rder-md-1">
      <h4 class="mb-3">Register Organisation</h4>
      <form class="needs-validation" novalidate method="POST" action="../includes/org.php">
        <div class="row">

          <div class="col-md-6 mb-3">
            <label for="org_id">Organisation id</label>
            <input type="text" class="form-control" id="org_id" name="org_id" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid org-id is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="Organisation">Organisation name</label>
            <input type="text" class="form-control" id="Organisation" name="Organisation" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid Organisation name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="Description">Description</label>
          <div class="input-group">
            <textarea type="text" class="form-control" id="Description" name="Description" placeholder="Username" required> </textarea>

            <div class="invalid-feedback" style="width: 100%;">
              Description is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Orgaisation Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="organisation@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1st street victoria avenue, haile selasie road" required>
          <div class="invalid-feedback">
            Please enter your organisation address.
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="City">City</label>
            <select class="form-control" id="City" name="City" required>
              <option value="">Choose...</option>
              <option value="Blantyre">Blantyre</option>
              <option value="Lilongwe">Lilongwe</option>
              <option value="Mzuzu">Mzuzu</option>

            </select>
            <div class="invalid-feedback">
              Please select a valid City.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="area">area</label>
            <select class="form-control" id="area" name="area" required>
              <option value="">Choose...</option>
              <option value="Limbe">Limbe</option>
              <option value="Bangwe">Bangwe</option>
              <option value="Ndilande">Ndilande</option>

            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Human resource officer details</h4>
        <hr class="mb-4">

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="f_name">First name</label>
            <input type="text" class="form-control" id="f_name" name="f_name" placeholder="" required>
            <div class="invalid-feedback">
              Hr name is required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="l_name">Last name</label>
            <input type="text" class="form-control" id="l_name" name="l_name" placeholder="" required>
            <div class="invalid-feedback">
              l-name is required
            </div>
          </div>
          <div class="col-md-6 mb-6">
            <label for="remail">H.R.O Email</label>
            <input type="email" class="form-control" id="remail" name="remail" placeholder="hr@example.com" required>
            <div class="invalid-feedback">
              Please enter a valid email address.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="default">Default password</label>
            <input type="text" class="form-control" id="default" name="default" value="defaulthr123" placeholder="" required>
            <div class="invalid-feedback">
              default password required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
              <option value="hr">Human Resource officer</option>
            </select>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="default2">Default username</label>
            <input type="text" class="form-control" id="default2" name="default2" placeholder="" required>
            <div class="invalid-feedback">
              default password required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" id="submit" type="submit" name="submit">Continue to register</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Online Recruitment</p>
    <ul class="list-inline">

    </ul>
  </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../form-validation.js"></script>
</body>

</html>