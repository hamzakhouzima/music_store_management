
<?php
    include('scripts.php');
	// print_r($_POST);





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>


   <form class="vh-100 gradient-custom" action="register.php"  method="post">
   
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['message']; 
            unset($_SESSION['message']);
						
					?>
				</div>
			<?php endif ?>

     

      <?php if (isset($_SESSION['confirmation'])): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['confirmation']; 
             unset($_SESSION['confirmation']);
						
					?>
				</div>
			<?php endif ?> 

            <div class="mb-md-5 mt-md-4 pb-5">


              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please enter your informations!</p>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX" >username</label>
                <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" placeholder="username" name="username"/>
                
              </div>

              <div class="form-outline form-white mb-4">
               <label class="form-label" for="typeEmailX" >Email</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email" name="email"/>
                
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX" >password</label>
                <input type="password" id="typeEmailX" class="form-control form-control-lg" placeholder="password" name="password"/>
              </div>

              <div class="form-outline form-white mb-4">
             <label class="form-label" for="typePasswordX">confirme Password</label> 
            <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Confirm Password" name="cpassword"/>
                
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit_registration">register</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Do you have an account? <a href="login.php" class="text-white-50 fw-bold">Sign In</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<style>
  *{
  box-sizing: border-box;
}

body{
  background-image: url("backgroundx.jpg") ; 
  /* -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; */


}
  
  </style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>