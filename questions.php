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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Farmers' questions</title>
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
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Agriculture </span>Advice</a> &nbsp;&nbsp;&nbsp;&nbsp;
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
            <li><a href="feedback.php">Answer Question</a></li>
            
           <li class="dropdown">
                                <a href="#" role="button" class="dropdown-brand" data-toggle="dropdown"> <i class="icon-user"></i> 
                                <?php echo $row['userName']; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
        </ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Farmers Questions</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Farmers' Questions</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<!-- <div class="col-xs-1 col-md-1 date">
										
									</div> -->
									<div class="col-xs-10 col-md-10">
										<div class="table-responsive">
  
  <table id="load-products" class="table table-bordered table-hover table-striped">
         <thead class="blue lighten-2">
            <h6><tr>
             
              <th>ID</th>
                <th>Farmers Questions</th>
                
                

            </tr><h6>
        </thead>
        
        <tbody>
            
            <?php
      
      require_once 'dbconnect.php';
      $query = "SELECT * FROM question ";

      $stmt = $DBcon->prepare( $query );
      $stmt->execute();
      
      if($stmt->rowCount() > 0) {
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        ?>
        
        <tr>
           <!--  <td><?php echo $username; ?></td>
            <td><?php echo $OB; ?></td>
                <td><?php echo $dat; ?></td>
                <td><?php echo $land; ?></td> -->
             
             
                <td><?php echo $ID; ?></td>
             
               
                <td><?php echo $content; ?></td>
                
           
            </tr>
        <?php
        } 
        
      } else {
        
        ?>
            <tr>
            <td colspan="3">No Data Found</td>
            </tr>
            <?php
        
      }
      ?>
             
        </tbody>
    </table>
    
</div>

    </div>
    
</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
						
						
						
						
					</div>
				</div><!--End .articles-->
				
				
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Designed by <a href="https://www.medialoot.com">Eliz</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

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
