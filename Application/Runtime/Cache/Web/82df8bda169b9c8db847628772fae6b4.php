<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>Publications and Courses</title>
		<link href="/WilsonGoh_v5/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/WilsonGoh_v5/Public/js/jquery.min.js"></script>
		<link href="/WilsonGoh_v5/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/WilsonGoh_v5/Public/css/researchfield.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/WilsonGoh_v5/Public/css/publication.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!-- text autoHegiht-->
<script type="text/javascript">
	 $(function(){
	  $(".autoHeight").bind("keydown keyup",function(){
	   $(this).autosize();
	  }).show().autosize();
	 });
 
	 $.fn.autosize = function(){
	  $(this).height('0px');
	  var setheight = $(this).get(0).scrollHeight;
	  if($(this).attr("_height") != setheight)
	   $(this).height(setheight+"px").attr("_height",setheight);
	  else
	   $(this).height($(this).attr("_height")+"px");
	 }
</script>
		<!--end text autoHegiht-->
	</head>
<body>
<!--header start here-->
<div class="header">
    <div class="container header-main">      	
			<div class="logo">
				<img src="/WilsonGoh_v5/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/WilsonGoh_v5/Public/images/icon.png" alt=""/></span>
				<nav>
					<ul class="res">
						<li><a href="<?php echo U('Homepage/homepage');?>" >Home Page</a></li>
						<li><a href="<?php echo U('Researchfield/researchfield');?>" >Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>" class="active">Publications and Courses</a></li>
						<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
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
    <div class="container">
      <div class="row">
      	
		<div class="col-md-5 left">
		 	<div class="row profile">
				<div class="col-md-6 pic">
				    <img src="/WilsonGoh_v5/Public/images/profile.jpg" class="img-responsive"/>
				</div>
				<div class="col-md-6 resume">
				<table border="0">
					<tr><th>name</th></tr>
					<tr><td><label for="name"><?php echo ($user['name']); ?></label></td></tr>
					<tr><th>title</th></tr>
					<tr><td><label for="title"><?php echo ($user['title']); ?></label></td></tr>
					<tr><th>address</th></tr>
					<tr><td><label for="address"><?php echo ($user['address']); ?></label></td></tr>
					<tr><th>phone</th></tr>
					<tr><td><label for="phone"><?php echo ($user['phone']); ?></label></td></tr>
					<tr><th>email</th></tr>
					<tr><td><label for="email"><?php echo ($user['email']); ?></label></td></tr>
				</table>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row research">
				<h1>Courses Taught</h1>
				<div readonly="readonly" class="area">
				<?php echo ($courses_taugh); ?>
				</div>
			</div>
		</div>
		
		<div class="col-md-7 right">
			<div class="head">
				<img src="/WilsonGoh_v5/Public/images/pub.jpg" alt=""/>
				<font>Publications and Courses</font>
			</div>
			<fieldset>  
                <legend>
                	<font>Journal Papers</font>
                </legend>  
                <div readonly="readonly">
				<?php echo ($journal_papers); ?> </div>
        	</fieldset>
        	<hr>
        	<fieldset>  
                <legend>
                	<font>Technical Papers</font>
                </legend>  
                <div readonly="readonly">
				<?php echo ($technical_papers); ?> </div>
        	</fieldset>

			
		</div>
		<div class="clearfix"> </div>
	  </div>
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