<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>

<!-- navbar -->
<header >
    
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="#" data-abc="true"><strong>Music</strong></span></a>
        
	
 
 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> -->
    
   <div class="collapse navbar-collapse" id="navbarColor02">
 
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="#" data-abc="true">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">contact</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Pricing</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Social</a> </li>
        </ul>
        <form onsubmit="event.preventDefault()" class="form-inline my-2 my-lg-0"> <input class="form-control mr-sm-2" type="text" placeholder="Search"> <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> </form>
    </div>
   
</nav>
</header>
<br>

<div class="wrapper">
    <br>
    <div class="sidebar" >
        
    <button class="btn btn-success " style="width:99%;" data-toggle="modal" data-target="#exampleModal" >+New Instrument</button>
    
    
    <ul>
            <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-user"></i>Users</a></li>
            <li><a href="#"><i class="fa fa-line-chart"></i>Timeline</a></li>
            <li><a href="#"><i class="fa fa-comment-o"></i>Comments</a></li>
            <li><a href="#"><i class="fa fa-gears"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fa fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <!-- <div class="header" style="background-color=white;"></div>    -->
        <div class="info">
   <!--------------------------------------------------------------------->
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-5">
            <div class="col">
                    <div class="card btn bg-white mb-3 p-0" href="#modal-product" data-bs-toggle="modal">
                        <div style=" height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('music.jpg');"></div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-truncate fs-4 fw-bolder mb-3">Card title</h5>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                        </div>
                    </div>
            </div>

            <div class="col">
                    <div class="card btn bg-white mb-3 p-0" href="#modal-product" data-bs-toggle="modal" >
                        <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('music.jpg');"></div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-truncate fs-4 fw-bolder mb-3">Card title</h5>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                        </div>
                    </div>
            </div>
            
            <div class="col">
                    <div class="card btn bg-white mb-3 p-0" href="#modal-product" data-bs-toggle="modal">
                        <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('music.jpg');"></div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-truncate fs-4 fw-bolder mb-3">Card title</h5>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                            <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                        </div>
                    </div>
            </div>





  


      </div>
    </div>
    
</div>
<!----->





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 <!--------------------------------------------------------------------->

<link rel="stylesheet" href="style.css">





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>








</html>