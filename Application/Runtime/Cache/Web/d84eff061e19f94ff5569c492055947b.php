<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>ResearchFields</title>
		<link href="/WilsonGoh_v5/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/WilsonGoh_v5/Public/js/jquery.min.js"></script>
		<link href="/WilsonGoh_v5/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/WilsonGoh_v5/Public/css/detail.css" rel="stylesheet" type="text/css" media="all"/>
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
						<li><a href="<?php echo U('Researchfield/researchfield');?>" class="active">Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
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
    <div class="container content">
			<div class="head">
				<img src="/WilsonGoh_v5/Public/images/topic.jpg" alt=""/>
				<font>Current Research Topics</font>
			</div>
			<div class="detail">
			<label class="title"><?php echo ($article['title']); ?></label>
		 	<div readonly="readonly">
			<?php echo html_entity_decode($article['content']);?>
		 	</div>
		 	</div>
	  </div>
    </div>
</div>
<!--main end here-->

<!--copyright start here-->
<div class="bottom">
	<div class="container bottom-nav">
		<span>
			<ul class="res">
				<li><a href="<?php echo U('Homepage/homepage');?>" >Home Page</a></li>
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