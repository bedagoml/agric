<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require 'db.php';

if(isset($_POST['btn-register'])){
	$username = $MySQLi_CON->real_escape_string(trim($_POST['username']));
	
	$content = $MySQLi_CON->real_escape_string(trim($_POST['content']));

		$check_content = $MySQLi_CON->query("SELECT * FROM question WHERE content='$content'");
		$count=$check_content->num_rows;
		if ($count==0) {
			$query = "INSERT INTO question(username,content) VALUES('$username','$content')";
			if($MySQLi_CON->query($query)){
				
				$messo = "<div class='alert alert-success col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
				<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thank you for the question, we will get back to you shortly</div>"; header("refresh:3;quiz.php");
				$_SESSION['userSession'] = $content;
				
			}else {
			
				$messo = "<div class='alert alert-danger col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while asking question please try again! </div>"; header("refresh:3;quiz.php");
			}
		} else{
		
			$messo = "<div class='alert alert-danger col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Question $content already exists please check ! </div>"; header("refresh:3;quiz.php");
		}

}	



$MySQLi_CON->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Advice on Agriculture | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Sowing a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/smoothbox.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
</head>
<body>
<!-- Banner-->
<!-- navigation -->
<div >
		<div class="top-nav w3-agiletop">
			<div class="container">
				<div class="navbar-header w3llogo">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 
					<h1><a href="index1.php" style="color: green">Sowing Big</a></h1> 
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="w3menu navbar-left" style="color: orange">
						<ul class="nav navbar">
							<li><a href="index1.php" style="color: orange" >Home</a></li>
							<li><a href="index1.php#about" style="color: orange" >About</a></li> 
							<!-- <li><a href="#news" class="scroll"> News</a></li> -->
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: orange"><span data-letters="Pages">Advices</span><span class="caret"></span></a>
								<ul class="dropdown-menu"> 
									<li><a href="article.php" style="color: orange" >Farmers Advice</a></li>
									<li><a href="quiz.php" style="color: orange" >Ask question</a></li>
									<li><a href="ans.php" style="color: orange" >Answered question</a>
								</ul>
							</li>  
							<!-- <li><a href="#gallery" class="scroll">Gallery</a></li> -->
							<li><a href="#contact" class="scroll" style="color: orange" >Contact</a></li>
						</ul>
					</div>
					<div class="w3ls-bnr-icons social-icon navbar-right" style="color: orange">
						<a href="#" class="social-button twitter" style="color: orange"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button facebook" style="color: orange"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button google" style="color: orange"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble" style="color: orange"><i class="fa fa-dribbble"></i></a> 
					</div>
					<div class="clearfix"> </div>  
				</div>
			</div>	
		</div>
		</div>	
		<!-- //navigation --> 
	
<!-- News-->
<div class="news" id="news">
<div class="container">
<h3>Any Question?</h3>
<div style="align-content: center;" ><?php if (isset($messo)){ echo $messo;} ?>
<form class="form-signin" method="post" id="register-form" style="align-content: center;">
									<div class="col-xs-10 col-md-10">
										<div class="form-group" class="col-xs-5 col-md-4">
        <p>Your Name</p>
        <input type="text" class="form-control" placeholder="Full Name" name="username" required  />
        </div>
										<div class="form-group">
          <label class="col-sm-6 control-label">Type your question here</label>
          <div class="col-md-12 col-sm-12">
          <textarea name="content" id="editor"></textarea>
          </div>
          </div>
           <div class="right-w3l">
                            <input type="submit" name="btn-register" class="btn-primary form-control bg-theme1" value="Submit Question">
                        </div>
</form>
</div>
</div>
<!--/News-->






<!-- contact-->
<div class="contactfull">
	<div class="contact" id="contact">

		<div class="container">
		<h3>CONTACT US</h3>
			<div class="footer-grids">

				<div class="col-md-3 col-sm-6 my-info">
					<h4>About </h4>
					<p>Advice is very paramount in cases of practicality. We give advices alongside resources required by farmers.</p>
					<a href="index1.php#about">Read more</a>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 col-sm-6 information">
					<h4>QUICK LINKS</h4>
					<div class="unorder">
					<p><a href="index1.php"  ><span class="fa fa-angle-right" aria-hidden="true"></span>Home</a></p>
					<p><a  href="index1.php#about"><span class="fa fa-angle-right" aria-hidden="true"></span>About</a></p>
					<p><a  href="article.php"><span class="fa fa-angle-right" aria-hidden="true"></span>Advices</a></p>
					<p><a  href="index1.php#agile-stats"><span class="fa fa-angle-right" aria-hidden="true"></span>Stats </a></p>
					
					<p><a  href="index1.php#gallery"><span class="fa fa-angle-right" aria-hidden="true"></span>Gallery</a></p>
					<p><a  href="#footer"><span class="fa fa-angle-right" aria-hidden="true"></span>Contact</a></p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 menu">
					<h4>Categories</h4>
					<p><a class=" scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Herbicides</a></p>
					<p><a class=" scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Pesticides</a></p>
					<p><a class="scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Insecticides</a></p>
					<p><a class=" scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Fungicides</a></p>
					<p><a class=" scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Chemicals</a></p>
					<p><a class=" scroll" href="#menu"><span class="fa fa-angle-right" aria-hidden="true"></span>Harvest Aids</a></p>
				</div>


				<div class="col-md-3 col-sm-6 iteams">
					<h4>Contact Info</h4>
					<ul class="agile_footer_grid_list">
						<li>Moi University  </li>
							
						<li><span class="fa fa-phone"></span> 0720 000 000</li>
						<li><span class="fa fa-envelope-o"></span><a href="mailto:info@example.com">elizjeptanui@gmail.com</a></li>

					</ul>
				</div>


				<div class="clearfix"></div>

			</div>
			</div>
			</div>

<!-- /Contact-->
<!-- footer -->
	<div class="footer" id="footer">
		<div class="f-bg-w3l">
			<div class="container">
				<div class="col-md-5 w3layouts_footer_grid">
				<div class="col-md-5 w3layouts_footer_grid1">
					<h3>Follow Us On</h3>
					</div>
					<div class="col-md-7 w3layouts_footer_grid2">
					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
					</div>
				</div>
				<!-- <div class="col-md-7 w3layouts_footer_grid">
				<div class="col-md-4 w3layouts_footer_grid1">
				<h3>Subscribe to Our News Letter</h3>
				</div>
				<div class="col-md-8 w3layouts_footer_grid2">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					
				</div>
				</div>
				<div class="clearfix"> </div>
			</div> -->
		</div>
	</div>
	</div>
	<!-- //footer -->
<div class="copyright">
 <p>&copy; Sowing Big 2019. All Rights Reserved | Design by <a href="]" target="blank">Eliz and Bedah</a></p>
 </div>
 <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	
 
<!-- Slider script-->
<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							  <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:false,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
<!-- /Slider script-->
<!-- Number Scroler-->
	<script src="js/numscroller-1.0.js"></script>
<!-- /Number Scroler-->
<!--flexiselDemo1 -->
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay:true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			
<!--//flexiselDemo1 -->
<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	

<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->

</body>
</html>
