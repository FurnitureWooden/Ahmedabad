<html>
<head>

<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100&family=Jost:ital,wght@1,300;1,500;1,662&display=swap" rel="stylesheet">
</head>
<?php

$con = mysqli_connect('localhost','root');
error_reporting(E_ERROR | E_PARSE); 
/*if($con){
	echo "Conenction successful";
}else{
	echo " No Conenction";
}*/                                                                  
                                                                                                                                                                                                 
mysqli_select_db($con,'userdata');                                                   

$user =$_POST['user'];
$email = $_POST['email']; 
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

?>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><img src="images/hanuman.png" class="mr-3"><b>J</b>ay <b>D</b>ada <b>F</b>urniture</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsenavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        
		 <li class="nav-item">
          <a class="nav-link" href="about.php">About </a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
		
		  
      </ul>
      
    </div>
  
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cs1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cs2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cs3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
   <div class="pt-3 pb-5" >
         <h1 class="text-center">About Us</h1>
   </div>
  <div class="container-fluid">
   <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
	   <img src="images/cs4.jpg" class="img-fluid ml-4 aboutimg" style="border-radius: 4%;">	
	 </div>
	 
	 <div class="col-lg-6 col-md-6 col-12 container-fluid">
	   <h1 class="display-4"><b>This Is Daining Table</b></h1>
       <p class="py-4 aboutp">A Daining table is an item of furniture with a raised flat top and is supported most commonly by 1 or 4 legs used as a surface for working at, eating from or on which to place things. There are also a range of specialized types of  tables.</p>	   
	   <a href="check_1.php" class="btn btn-success mt-3 ">Check More</a>
	 </div>
   </div>
  </div>
</section>

<section class="my-5"> 
    <div class="py-5">
	  <h2 class="text-center">Our Services</h2>
	</div>
	
	<div class="container-fluid">
	 <div class="row">
	  
	   
	   <div class="col-lg-4 col-md-4 col-12">
	     <div class="card our" >
           <img class="card-img-top " src="images/cs8.jpg" alt="Card image">
           <div class="card-body">
           <h4 class="card-title">Office Furniture </h4>
           <p class="card-text">Some example text.</p>
           <a href="check_2.php" class="btn btn-primary">Check More</a>
           </div>
         </div>
	   
	   </div>
	   
	   <div class="col-lg-4 col-md-4 col-12">
	     <div class="card our" >
           <img class="card-img-top " src="images/cs6.jpg" alt="Card image">
           <div class="card-body">
           <h4 class="card-title">Kitchen Furniture </h4>
           <p class="card-text">Some example text.</p>
           <a href="check_3.php" class="btn btn-primary">Check More</a>
           </div>
         </div>
	   
	   </div>
	 
	 
	 <div class="col-lg-4 col-md-4 col-12">
	     <div class="card our" >
           <img class="card-img-top" src="images/cs7.jpg" alt="Card image">
           <div class="card-body">
           <h4 class="card-title">Almari Furniture </h4>
           <p class="card-text">Some example text.</p>
           <a href="check_4.php" class="btn btn-primary">Check More</a>
           </div>
         </div>
	   </div>
	 </div>
	</div>
	
</section>


<section class="my-5">
   <div class="pt-3 pb-5" >
         <h1 class="text-center">Gallery</h1>
   </div>
   
   <div class="container-fluid">
    <div class="row">
	  <!--<div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs3.jpg" class="img-fluid pb-4"> 
	  </div>-->
	  
	  <!--<div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs3.jpg" class="img-fluid pb-4"> 
	  </div>-->
	  
	  <?php
	    $con = mysqli_connect('localhost','root');
		mysqli_select_db($con,'displayupload');
		
		if(isset($_POST['submit']))
		{
			$files = $_FILES['file'];
			//print_r($files);
			
			$filename = $files['name'];
			$fileerror = $file['error'];
			$filetmp = $files['tmp_name'];
			
			$fileext = explode('.',$filename);
			$filecheck = strtolower(end($fileext)); 
			
			$fileextstored = array('png','jpg','jpeg');
			
			
			if(in_array($filecheck,$fileextstored)){
				
				$destinationfile ='upload/'.$filename;
				//print_r($destinationfile);
				
			    move_uploaded_file($files['tmp_name'],'upload/'.$files['name']);
				$filetemppath = 'upload/'.$files['name'];
				
				$q = "INSERT INTO `imguplaod`(`image`) VALUES ('$filetemppath')";
				
				$query = mysqli_query($con,$q);
				
			}
			
			// header("location:index.php");
			// header("Refresh:0; url=index.php");
				
		}
		$displayquery = "select * from imguplaod";
			    $querydisplay = mysqli_query($con,$displayquery);
				
				//$row = mysqli_num_rows($querydisplay);
				
				 while($result = mysqli_fetch_array($querydisplay))
				 {
					 if(empty($result['image']))
					{
						break;
					}
					?>
					
					<div class="col-md-2" >
					 <img src="<?php echo $result['image'];?>" class="pb-4" alt="Girl in a jacket" width="500" height="600" style="border-radius: 10%;">
					</div>
					
					<?php
					
					
				 }


	  ?>
	 
	
	  
	  
	  <!--<div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs3.jpg" class="img-fluid pb-4"> 
	  </div>
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs5.jpg" class="img-fluid pb-4"> 
	  </div>
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs5.jpg" class="img-fluid pb-4"> 
	  </div>
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs5.jpg" class="img-fluid pb-4"> 
	  </div>
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs6.jpg" class="img-fluid pb-3 ml-4"> 
	  </div>
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs6.jpg" class="img-fluid pb-3 ml-2"> 
	  </div>
	  
	  
	  <div class="col-lg-4 col-md-4 col-12">
	    <img src="images/cs6.jpg" class="img-fluid pb-3"> 
	  </div>-->
	  
   </div>
   
</section>

<!-- From-->

<!--<section class="my-5">
   <div class="pt-3 pb-5" >
         <h1 class="text-center">Get In Touch</h1>
   </div>
   
   <div  class="w-50 m-auto"> 
		<form action="userinfo.php" method="post">
		  <div class="form-group">
		    <label>UserName</label>
			<input type="text" name="user" placeholder="Enter The UserName" autocomplete="off" class="form-control">
		  </div>
		  
		  <div class="form-group">
		    <label>Email Id</label>
			<input type="text" name="email" placeholder="Enter The Email Id" autocomplete="off" class="form-control">
		  </div>
		  
		  <div class="form-group">
		    <label>Mobile Number</label>
			<input type="text" name="mobile" placeholder="Enter The Mobile Number" autocomplete="off" class="form-control">
		  </div>
		  
		  <div class="form-group">
		    <label>Comments</label>
			<textarea class="form-control" name="comment" placeholder="Enter Comments"></textarea>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>
   </div>
</section> -->
   
 
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-5 col-lg-7 text-center text-md-left mb-4 mb-md-0">
          <h4 class="mb-0 ">Get connected with us on social networks!</h4>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5" >

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Jay Dada Furniture</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>All Kind Of Furniture Will Be Made As Per Your Request.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="check_3.php">Kitchen</a>
        </p>
        <p>
          <a href="check_1.php">Dining Table</a>
        </p>
        <p>
          <a href="#!">Bed Room</a>
		  
        </p>
        <p>
          <a href="#!">Sofa</a>
        </p>
        
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        

      </div>
      <!-- Grid column -->
	                          
      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home "></i> Ahamdabad, Gujrat, India </p>
        <p>
          <i class="fas fa-envelope "></i> patelshaileshbhai2526@gmail.com</p>
        <p>
          <i class="fas fa-phone "></i> + 91 &nbsp 902 365 4447</p>
        <p>
          <i class="fas fa-print "></i> + 91 &nbsp 999 874 0544</p>
		  
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

 
  


  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: #6351ce;">© 2022 Copyright.All rights reserved by <a href="#">Coder's Brid</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
 

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>