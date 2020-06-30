<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="{{ asset('/ui/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet"  href="{{asset('/ui/css/style.css')}}">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post" action="{{URL::to('/store')}}">
              {{csrf_field()}}
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="name" class="form-control" placeholder="Name" required autofocus>
                <label for="inputUserame">Name</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="date" id="inputPassword" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                <label for="inputPassword">Date of Birth</label>
              </div>
              
              <div class="form-label-group">
                <input type="number" id="inputConfirmPassword" name="salary" class="form-control" placeholder="Salary" required>
                <label for="inputConfirmPassword">Salary</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
             <!-- <a class="d-block text-center mt-2 small" href="#">Sign In</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>-->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>