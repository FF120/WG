<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>Publications and Courses</title>
		<link href="/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/Public/js/jquery.min.js"></script>
		<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/Public/css/researchfield.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/Public/css/publication.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
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
				<img src="/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/Public/images/icon.png" alt=""/></span>
				<nav>
					<ul class="res">
						<li><a href="<?php echo U('Homepage/homepage');?>" >Home Page</a></li>
						<li><a href="<?php echo U('Researchfield/researchfield');?>" >Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>" class="active">Publications and Courses</a></li>
						<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
						<li><a href="<?php echo U('Homepage/manage');?>">Manage</a></li>
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
				<form enctype="multipart/form-data" action="<?php echo U('Homepage/savePersonalInfo');?>" method="post">

				<div class="save">
					<input name="submit" type="submit" value="Save">
				</div>
				<input id="upload" type="file" name="myPhoto"/>
				<div class="col-md-6 pic">
					
				    <img src="/Public/images/profile.jpg" class="img-responsive"/>
				</div>
				<div class="col-md-6 resume">
					<table border="0">
						<tr><th>name</th></tr>
						<tr><td><input type="text" value="<?php echo ($name); ?>" maxlength="30" name="name"/></td></tr>
						<tr><th>title</th></tr>
						<tr><td><input type="text"  value="<?php echo ($title); ?>" name="title"/></td></tr>
						<tr><th>address</th></tr>
						<tr><td><input type="text"  value="<?php echo ($address); ?>" name="address"/></td></tr>
						<tr><th>phone</th></tr>
						<tr><td><input type="text"  value="<?php echo ($phone); ?>" maxlength="11" name="phone"/></td></tr>
						<tr><th>email</th></tr>
						<tr><td><input type="email"  value="<?php echo ($email); ?>" name="email"/></td></tr>
					</table>

				</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="row research">
				<h1>Courses Taught</h1>
				<form enctype="multipart/form-data" action="<?php echo U('Publication/saveCoursesTaught');?>" method="post">
				<textarea class="autoHeight" name="Courses_Taugh" id="Courses_Taugh" rows="10" cols="60">
				<?php echo ($courses_taugh); ?></textarea>
				<input name="submit" type="submit" value="Save">
				</form>
			</div>
		</div>
		
		<div class="col-md-7 right">
			<div class="head">
				<img src="/Public/images/pub.jpg" alt=""/>
				<font>Publications and Courses</font>
			</div>
			<fieldset>  
                <legend>
                	<font>Journal Papers</font>
                </legend>
				<form enctype="multipart/form-data" action="<?php echo U('Publication/saveJournalPapers');?>" method="post">
                <textarea  class="autoHeight" name="Journal_Papers" id="Journal_Papers" rows="10" cols="60">
				<?php echo ($journal_papers); ?> </textarea>
        	<input name="submit" type="submit" value="Save">
					</form>
			</fieldset>
        	<hr>
        	<fieldset>  
                <legend>
                	<font>Technical Papers</font>
                </legend>
				<form enctype="multipart/form-data" action="<?php echo U('Publication/saveTechnicalPapers');?>" method="post">
                <textarea  class="autoHeight" name="Technical_Papers" id="Technical_Papers" rows="10" cols="60">
				<?php echo ($technical_papers); ?> </textarea>
        	<input name="submit" type="submit" value="Save">
					</form>
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
	<script type="text/javascript">
		CKEDITOR.editorConfig = function( config ) {
			config.language = 'es';
			config.uiColor = '#F7B42C';
			config.height = 300;
			config.toolbarCanCollapse = true;
		};

		CKEDITOR.replace( 'Courses_Taugh' );
		CKEDITOR.replace( 'Journal_Papers' );
		CKEDITOR.replace( 'Technical_Papers' );
	</script>
</html>