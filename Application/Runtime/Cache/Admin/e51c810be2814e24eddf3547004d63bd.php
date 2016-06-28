<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>Manage</title>
		<link href="/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/Public/js/jquery.min.js"></script>
		<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/Public/css/manage.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
<body>
<!--header start here-->
<div class="header">
    <div class="container header-main">      	
			<div class="logo">
				<img src="/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/Public/images/icon.png" alt=""/></span>
				<nav>	
					<ul class="res">
							<li><a href="<?php echo U('Homepage/homepage');?>">Home Page</a></li>
							<li><a href="<?php echo U('Researchfield/researchfield');?>">Research Fields</a></li>
							<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
							<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
							<li><a href="<?php echo U('Manage/manage');?>"  class="active">Manage</a></li>
					</ul>
				</nav>

			<!-- script-for-menu -->
				<script>
				   $( "span.menu" ).click(function() {
					 $( "ul.res" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
			<!-- /script-for-menu -->
			</div>
			<div class="clearfix"> </div>	 	
	</div>
</div>
<!--header end here-->

<!--main start here-->
<div class="main">
    <div class="container reset">
		 <h1>reset password</h1>
		 <h2>You can reset a complicated password for security here</h2>
		<form class="row_5" enctype="multipart/form-data" action="<?php echo U('Manage/pdo');?>" method="post">
			<div class="row">
				<input name="pass1"type="text" class="text" value="Original Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Original Password';}">
			</div>
			<div class="row">
			<input name="pass2" type="text" class="text" value="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'New Password';}">
			</div>
			<div class="row">
			<input name="submit" type="submit" id="submit" value="Submit">  
			</div>
        </form>
	</div>
 </div>
<!--main end here-->

<!--copyright start here-->
<div class="bottom">
	<div class="container bottom-nav">
		<span>
			<ul>
			<li class="li1"><a href="<?php echo U('Homepage/homepage');?>">Home Page</a></li>
				<li><a href="<?php echo U('Researchfield/researchfield');?>">Research Fields</a></li>
				<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
				<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
				<li><a href="<?php echo U('Homepage/manage');?>">Manage</a></li>
			</ul>
		</span>
		</br></br>
		<div class="copyright">
		<span>Copyright © Caoru 2015</span>
		</div>
	</div>
</div>
<!--copyright end here-->
</body>
</html>