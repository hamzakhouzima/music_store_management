<?php
include 'scripts.php';

if(!isset( $_SESSION['username'])&&!isset($_SESSION['password'])) header("location:login.php");  
?>









 
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <title>Music Is The Answer</title>
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
            

<div class="text-light mt-2"  style="margin-left:190px;white-space: nowrap;">
 <strong>   <?php echo'hello '.$_SESSION['username'].' do you want to ';?> </strong>
</div>

<form class="mt-0" method="post"  id="logout">
            <button  type="submit" class="btn btn-dark bg-dark" name="logout" >Logout</button>
      
</form>
        </ul>


    </div>
   
</nav>
</header>
<br>

<!-- <div class="wrapper"> -->
    <br>
<!--     
    <div class="main_content">
        <div class="info"> -->

<!---->

<!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('backgroundx.jpg');
    height: 400px;
  ">
  <div class="mask" > <!---style="background-color: rgba(0, 0, 0, 0);"--->
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Music Is The Answer</h1>
        <h4 class=" mb-3 ">Keep it Electronic</h4>
        <button class="btn btn-success"  onclick="event2();reset_form()"   data-toggle="modal" data-target="#exampleModal">+Add new instrument</button>
        <form method="post"  id="logoutmedia" style="display:none;">
            <button  type="submit" class="btn btn-dark bg-dark" name="logout" >Logout</button>
      
</form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-bar-chart-fill"></i> <?php statistics(1);?> Products Remains in warehouse</h5>
        <p class="card-text"></p>
        <a href="#main-div" class="btn btn-primary" id="btn-scroll">See Stock</a>
      </div>
    </div>   
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-person-fill"></i> <?php statistics(2); echo' Users Are Signed up';  ?></h5>
        
        <a href="#main-div" class="btn btn-primary">See Stock</a>
      </div>
      
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-arrow-up-square-fill"></i><br><?php echo'Most Expensive: '; statistics(3);echo' Dh';   ?></h5> 
        <p class="card-text"></p>
        <a href="#main-div" class="btn btn-primary">See Stock</a>
      </div>
      
    </div>
  </div>
</div>

   <!----------------------------------------------------col-md-6  mt-5->-------------------->
   <div class=" container-fluid row  col-lg-12  mt-4 " id="main-div"> 

            <?php
            $data = get_product();
            while ($row = mysqli_fetch_assoc($data)) {
              
                
                $id= $row["id"]; 

            ?>
            
            <div class="col-lg-4" id="<?php echo$row["id"]; ?>"> 
           
            
                <div class="card btn bg-white mb-3 p-0" href="#modal-product"  data-bs-toggle="modal" >
                    <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('music.jpg');"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-truncate fs-4 fw-bolder mb-3"><?php echo $row['name']?></h5>
                        <p class="card-text text-start"><span class="fw-bold text-muted">Type: <?php echo $row['type']?></span></p>
                        <p class="card-text text-start"><span class="fw-bold text-muted">Quantity: <?php echo $row['quantity']?></span></p>
                        <p class="card-text text-start"><span class="fw-bold text-muted">Price: <?php echo $row['price']?> Dh</span></p>
                        <p class="card-text text-start"><span class="fw-bold text-muted">Description:<?php echo $row['description']?></span></p>
                    <button class="btn btn-danger " name="delete"><a class="text-light" href="delete.php?deleteid=<?php echo $id ?>">Delete</a></button>
                    <button  class="btn btn-success" name="modify"   data-toggle="modal" data-target="#exampleModal" onclick="getData('<?php echo $row['id']?>','<?php echo $row['name']?>','<?php echo $row['type']?>','<?php echo $row['quantity']?>','<?php echo $row['price']?>','<?php echo $row['description']?>')" >Modify</button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>





  


      </div>
    </div>
    
</div>
<!----->




<form action="scripts.php" method="post" id="product-form"> <!---->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add To Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="product_id" name="id" >
      <label class="form-label"  >Product Name</label>
       <input type="text" name="product_name" id="name" class="form-control form-control-lg" placeholder="Product Name"/>
       <label class="form-label"  >Product Price</label>
       <input type="text" name="price" id="price" class="form-control form-control-lg" placeholder="Product Price"/>
       <label class="form-label"  >Quantity</label>
       <input type="text" name="quantity" id="quantity" class="form-control form-control-lg" placeholder=" Quantity"/>
       
<!-------->
<div class="mb-3">
								<label class="form-label">Type</label>
								<select class="form-select" name="type" id="type" >
									<option value="">Please select</option>
									<option value="string">String</option>
									<option value="keyboards">Keyboards</option>
									<option value="drums">Drums</option>
									
								</select>
							</div>
                            <div class="mb-3">
  <label for="description" class="form-label" >Description</label>
  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description"></textarea>
</div>

<!-------->
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit_form" class="btn btn-primary" id="product-save-btn"  >Save changes</button>
        <button type="submit"  name="update-product" class="btn btn-primary" id="product-update-btn" >update</button>
       
        <!-- <button type="submit" name="update" class="btn btn-warning task-action-btn" id="product-update-btn"  >Update</a> -->
      </div>
    </div>
  </div>
</div>
</form>

 <!--------------------------------------------------------------------->


   
    
 
 
 
 
 <!--------------------------------------------------------------------->

<link rel="stylesheet" href="style.css">

<script  src="actions.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>







</html>