<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php

require 'db.php';

if(isset($_POST['btn-register'])){
	$username = $MySQLi_CON->real_escape_string(trim($_POST['username']));
	$topic = $MySQLi_CON->real_escape_string(trim($_POST['topic']));
	$tarehe = $MySQLi_CON->real_escape_string(trim($_POST['tarehe']));
	$content = $MySQLi_CON->real_escape_string(trim($_POST['content']));

		$check_content = $MySQLi_CON->query("SELECT * FROM advice WHERE content='$content'");
		$count=$check_content->num_rows;
		if ($count==0) {
			$query = "INSERT INTO advice(username,topic,tarehe,content) VALUES('$username','$topic','$tarehe','$content')";
			if($MySQLi_CON->query($query)){
				
				$messo = "<div class='alert alert-success col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
				<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thank you for the advice</div>"; header("refresh:3;advice.php");
				$_SESSION['userSession'] = $content;
				
			}else {
			
				$messo = "<div class='alert alert-danger col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while giving advice please try again! </div>"; header("refresh:3;advice.php");
			}
		} else{
		
			$messo = "<div class='alert alert-danger col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Advice $content already exists please check ! </div>"; header("refresh:3;advice.php");
		}

}	



$MySQLi_CON->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sowing Big advice</title>
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="asset/css/datepicker3.css" rel="stylesheet">
	<link href="asset/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Agricultural </span>Advices</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<a class="navbar-brand nav pull-right" href="#"><?php echo $row['userName']; ?> </a>
				<!-- <a class="navbar-brand nav pull-right" href="#">Advice</a>
				<a class="navbar-brand nav pull-right" href="#">Home</a> -->
				
				
				
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
            <li class="active"><a href="home.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="advice.php"></em>Post Advice Plantation</a></li>
            <li><a href="questions.php">Farmers' Questions</a></li>
            <li><a href="feedback.php">Answer Questions</a></li>
            
           <li class="dropdown">
                                <a href="logout.php" role="button" class="dropdown-brand" data-toggle="dropdown"> <i class="icon-user"></i> 
                                Logout<i class="caret"></i>
                                </a>
                               
                            </li>
        </ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Advice</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Post Advice</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div style="align-content: center;" ><?php if (isset($messo)){ echo $messo;} ?>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									 <form class="form-signin" method="post" id="register-form">
									<div class="col-xs-10 col-md-10">
										 <div class="form-group">
        <input type="text" class="form-control" placeholder="Full Name" name="username" required  />
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Topic" name="topic" required  />
        </div>
<div class="form-group">
        	<input type="date" class="form-control" placeholder="Enter Date" name="tarehe" required  />
        <span id="check-e"></span>
        </div>
										<div class="form-group">
          <label class="col-sm-6 control-label">Type your advice here</label>
          <div class="col-sm-12">
          <textarea name="content" id="editor"></textarea>
          </div>
          </div>
          <div class="right-w3l">
                            <input type="submit" name="btn-register" class="btn-primary form-control bg-theme1" value="Submit response">
                        </div>
</form>
    </div>
    
</div></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
						
						
						
						
					</div>
				</div><!--End .articles-->
				
				
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Designed by <a href="bedagoml.github.io/online-CV">Bedah</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
