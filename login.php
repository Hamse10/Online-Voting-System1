<!DOCTYPE html>
<html lang="en">

<head>
<!------------------------->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

   

<!-------------------------->



<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IUT Voting System</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:35%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    color: #000000b3;
}

.team{
	margin: 75px 0;
}
h1.ourteam{
	text-align: center;
	font-weight: bold;
	letter-spacing: 2px;
	color: #333;
	padding-bottom: 10px;
}
h1.ourteam:after{
	content: '';
	background: #333;
	display: block;
	height:3px;
	width: 150px;
	margin:10px auto;  
}
.profile{
	margin-top: 25px;
}
.profile .img-box{
	opacity: 1;
	display: block;
	position: relative;

}
.profile h2{
	font-size: 22px;
	font-weight: bold;
	margin-top: 15px;
}

.profile h3{
	font-size: 15px;
	font-weight: bold;
	margin-top: 15px;
}

.img-box:after{
	content: '';
	opacity: 0;
	background-color: rgba(0,0,0,0.6);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
 

a{
	padding: 10px;
}

</style>

<body>

	<!----------->

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

	<!--------->

	<!----------->

	<header class="site-navbar site-navbar-target bg-white" role="banner" style="margin-bottom: 30px;">

        <div class="container" id="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="#login-form" class="nav-link">Login</a></li>
                  <li><a href="#footerr" class="nav-link">footer</a></li>
                  
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="#" ><img src="images/default.png" style="width:5em;"></a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#aboutus" class="nav-link">About</a></li>
                  <li><a href="#outeam" class="nav-link" >Team</a></li>
               
                  
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>
      <br><br><br><br>
	<!--------->


	<!----------->
	<!--------->


	<!----------->
	<!--------->

	<!----------->
	<!--------->


  <main id="main" class=" alert-info">

      <div>
      	
      </div>




  <div class="container2 " id="container2">
  	<div class="row">
  		
               <div class="left col-md-7">
              <img src="images/ballot-box-isometric-WITH-HAND.svg" id="aboutus" style="width:10em;">
             <h1 >ONLINE VOTING SYSTEM</h1>
                 IUT VOTE is a secure online voting platform that makes it easy to run elections .<br>
                We help to achieve more democratic outcomes by better representing the will of the voters
            </div>
            <div class="col-md-1">
            	
            </div>
  

  			<div class="card col-md-4 right">
  				<h3>Kindly login with your provided Credientials</h3>
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>

  	</div>
          
  	</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>




  <!------------------->



    	<section class="team">
    		<div class="container">
    			<h1 class="ourteam" id="outeam">Our Team</h1>
    			<div class="row">
    				<div class="col-md-3 profile text-center">
    					<div class="img-box" >
    						<img src="images/hamse.jpg" style="width: 200px;" class="img-responsive">
    						
    					</div>
    					<h2>Hamza</h2>
    					<h3>IUTian</h3>
    					<p>Insipre to Asprire, with hard work you can</p>

    					        <div>
    								<a href="https://www.facebook.com/hamze.abdalle/" > <i class="fab fa-facebook-f "></i></a>
    							       <a href="#"> <i class="fab fa-whatsapp" ></i></a>
    							    <a href="#"><i class="fab fa-instagram" ></i></a>
    							</div>
    				</div>

    				
                    <div class="col-md-3 profile text-center">
    					<div class="img-box" >
    						<img src="images/julie.jpg" style="width: 200px;" class="img-responsive">
    						
    					</div>
    					<h2>Julie</h2>
    					<h3>IUTian</h3>
    					<p>Insipre to Asprire, with hard work you can</p>

    					        <div>
    								<a href="https://www.facebook.com/profile.php?id=100090628003110" > <i class="fab fa-facebook-f "></i></a>
    							       <a href="#"> <i class="fab fa-whatsapp" ></i></a>
    							    <a href="#"><i class="fab fa-instagram" ></i></a>
    							</div>
    				</div>


    				
    		
    	</section>
      
      <!------------------->

      <!------------------------------------------->

    	 <footer id="footerr">
    	 	© Copyright 2024 IUT Vote. All Rights Reserved.
    	 </footer>
     


</body>









<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>