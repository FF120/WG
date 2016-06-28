<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>ResearchFields</title>
		<link href="/wg/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/wg/Public/js/jquery.min.js"></script>
		<link href="/wg/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/wg/Public/css/researchfield.css" rel="stylesheet" type="text/css" media="all"/>
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
				<img src="/wg/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/wg/Public/images/icon.png" alt=""/></span>
				<nav>
					<ul class="res">
						<li><a href="<?php echo U('Homepage/homepage');?>">Home Page</a></li>
						<li><a href="<?php echo U('Researchfield/researchfield');?>"  class="active">Research Fields</a></li>
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
    <div class="container">
      <div class="row">
		<div class="col-md-5 left">
		 	<div class="row profile">
				<div class="col-md-6 pic">
				    <img src="/wg/Public/images/profile.jpg" class="img-responsive"/>
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
				<h1>Basic Information</h1>
				<div readonly="readonly" class="area">
				<?php echo ($basic_information); ?>
				</div>
			</div>
		</div>
		<div class="col-md-7 right">
			<div class="head">
				<img src="/wg/Public/images/topic.jpg" alt=""/>
				<font>Current Research Topics</font>
			</div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aa): $mod = ($i % 2 );++$i;?><h4><a href="<?php echo U('Researchfield/goDeatils?id='.$aa['id']);?>"><?php echo ($aa['title']); ?></a></h4>
			<?php echo substr(html_entity_decode($aa['content']),0,350);?>
			</br></br>
			<span><a href="<?php echo U('Researchfield/goDeatils?id='.$aa['id']);?>">read more</a></span>
			<hr><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="showpage">
			  <?php echo ($page); ?>
		    </div>
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