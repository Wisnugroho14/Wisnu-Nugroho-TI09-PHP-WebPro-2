<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dino Planet | Registration Page </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <img src="assets/img/portfolio/logo-dieng.jpg" alt="Dino Planet" class="brand-image img-circle elevation" width="50%">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form id="form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full Name" name="fullName" id="fullName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="error" id="fullName-error"></div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="error" id="email-error"></div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" id="username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
        <div class="error" id="username-error"></div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="error" id="password-error"></div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="retypePassword" name="retypePassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="error" id="retypePassword-error"></div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12 mb-2">
            <input type="submit" value="Register" class="btn btn-block btn-warning">
          </div>
          <div class="col-12">
            <a href="login.php" class="btn btn-block btn-success">Already have account</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<style>
  .error {
    color: red;
  }
</style> 
<!-- /.register-box -->


<!--js validasi-->
<script src="dist/js/login.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
