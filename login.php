<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      
        

        <title>Demo-3</title>

        <link rel="icon" href="assets/img/favicon.png">

        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv/html5shiv.min.js"></script>
        <![endif]-->

       
        <link rel="stylesheet" href="assets/css/app/views/product1.css" />    
		<link rel="stylesheet" href="assets/css/app/main.css" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">

        <link rel="stylesheet" href="assets/css/jquery.desoslide.css">

        </head>
		
		<body>
				
				
				
		<style>		
			
			div.main{
				background: #0264d6; /* Old browsers */
			background: -moz-radial-gradient(center, ellipse cover,  #0264d6 1%, #1c2b5a 100%); /* FF3.6+ */
			background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#0264d6), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
			background: -webkit-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
			background: -o-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Opera 12+ */
			background: -ms-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* IE10+ */
			background: radial-gradient(ellipse at center,  #0264d6 1%,#1c2b5a 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
			height:calc(100vh);
			width:100%;
			}			
			
			
			
			.container1 {
			 left: 40%;
			position: fixed;
			top: 50%;
			transform: translate(-30%, -60%);
			}

			.top_head{
				
				
				color: #fff;
				margin-bottom: 10%;
			}
			
			.line{
				border-bottom: 2px solid #2ecc71;
			}
			
			.input1 {
				border: none;
				font-family: 'Open Sans', Arial, sans-serif;
				font-size: 14px;
				line-height: 1.5em;
				padding: 0;
				-webkit-appearance: none;
			}
			
			
			/* ---------- LOGIN ---------- */

				#login form{
					width: 250px;
				}
				#login, .logo{
					display:inline-block;
					/* width:40%; */
				}
				#login{
				
				  padding: 0px 22px;
				  // width: 59%;
				}
				.left-log{
					border-right:1px solid #fff;
				}
				.logo{
					
				color:#fff;
				font-size:20px;
				  line-height: 40px;
				}

				#login form span.fa {
					background-color: #e6e6e6;
					border-radius: 3px 0px 0px 3px;
					color: #000;
					display: block;
					float: left;
					height: 50px;
					font-size:24px;
					line-height: 50px;
					text-align: center;
					width: 50px;
				}

				#login form input {
					height: 50px;
				}
				fieldset{
					padding:0;
					border:0;
					margin: 0;

				}
				#login form input[type="text"], input[type="password"] {
					background-color: #fff;
					border-radius: 0px 3px 3px 0px;
					color: #000;
					margin-bottom: 1em;
					padding: 0 16px;
					width: 200px;
				}

				#login form input[type="submit"] {
				  border-radius: 3px;
				  -moz-border-radius: 3px;
				  -webkit-border-radius: 3px;
				  background-color: #000000;
				  color: #eee;
				  font-weight: bold;
				  /* margin-bottom: 2em; */
				  text-transform: uppercase;
				  padding: 5px 10px;
				  height: 30px;
				}

				#login form input[type="submit"]:hover {
					background-color: #d44179;
				}

				#login > p {
					text-align: center;
				}

				#login > p span {
					padding-left: 5px;
				}
				.middle {
				  display: flex;
				  width: 600px;
				}
				.Copyright_login{
					  position: fixed;
					  color:#8c9cad;
					  padding:10px;
						bottom: 0;
						left: 0;
				}
				.developer{
					
					    position: fixed;
						bottom: 0;
						right: 0;
						color:#8c9cad;
						padding:10px;
				}
				
		</style>		
		
	<div class="main">	

		<div class="container1">	
		
			<div class="row">
			
				<div class="col-lg-12">
					
					<h4 class="top_head ">Al-Jawdah Ceramic Tiles  Product Specification Application </h4>
					
					
					
					<div class="col-md-6 left-log">
				
							<div class="logo">AL-JAWDAH GROUP OF COMPANIES.						  
							</div> 
							  <div>
							  <img src='assets/img/logo/ceramiclogo.png'  width='120' height='100'>
							  <img src='assets/img/logo/aotc1.png'  width='100' height='80'>
							  </div>
						  
					
					</div>
					
					
					
					
					
					<div class="col-md-6">
					
							  <div id="login">

									<form action="javascript:void(0);" method="get">

									

										<p ><span class="fa fa-user"></span><input type="text" class="input1" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
										<p><span class="fa fa-lock"></span><input type="password" class="input1" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
										
														
										<button class="btn btn-success ">Login</button>
									 
									</form>
								

							  </div> <!-- end login -->
					
					</div>
				
					
				
				</div>
				
				
			</div>
		
		</div>
		<div class="Copyright_login">Copyright Co. Name 2021.</div>
		<div class="developer">Developed by Sk Jalal </div>
		</div><!--main ends-->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			
				
	
	
        <script src="assets/js/vendor/jquery/jquery.js"></script>
        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/vendor/highlight/highlight.pack.js"></script>

        <script src="assets/js/jquery.desoslide.min.js"></script>
        <script src="assets/js/app/product1.js"></script>

    </body>
</html>