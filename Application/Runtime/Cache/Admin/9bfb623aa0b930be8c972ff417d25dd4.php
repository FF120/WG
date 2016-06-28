<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>ResearchFields</title>
		<link href="/WG-master/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/WG-master/Public/js/jquery.min.js"></script>
		<link href="/WG-master/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/WG-master/Public/css/detail.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<img src="/WG-master/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/WG-master/Public/images/icon.png" alt=""/></span>
				<nav>
					<ul class="res">
						<li><a href="<?php echo U('Homepage/homepage');?>" >Home Page</a></li>
						<li><a href="<?php echo U('Researchfield/researchfield');?>" class="active">Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
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
    <div class="container content">
			<div class="head">
				<img src="/WG-master/Public/images/topic.jpg" alt=""/>
				<font>Current Research Topics</font>
			</div>

			<div class="detail">
				<form enctype="multipart/form-data" action="<?php echo U('Researchfield/saveArticle');?>" method="post">
			<input name="article_title" type="text" value="<?php echo ($article['title']); ?>">
		 	<textarea  class="autoHeight" name="article_body" id="" rows="30" cols="60">
			<?php echo ($article['content']); ?>
		 	</textarea>
					<input type="hidden" name="article_id" value="<?php echo ($article['id']); ?>"/>
		 	<input name="submit" type="submit" value="SAVE">
			</form>
		 	</div>
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
			config.height = 600;
			config.toolbarCanCollapse = true;
		};

		CKEDITOR.replace( 'article_body' );
	</script>
</html>