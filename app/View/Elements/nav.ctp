<!-- Header Area -->
<div class="header">
	<!-- Navigation Menu -->
	<div class="navbar navbar-fixed-top" role="navigation" style="padding-right:160px;">
		<a id="footer" href="#signup-block">免费注册</a>
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#home">
					<!-- Logo Text -->
					<h1><?php echo $this->Html->image('/html/img/onwx.png')."&nbsp;$cakeSign"; ?></h1>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home">首页</a></li>
					<li><a href="#service">产品特色</a></li>
					<li><a href="#works">定制服务</a></li>
					<li><a href="#contact">联系我们</a></li>
					<li><a href="#about">关于我们</a></li>
					<li><?php echo $this->Html->link('登录', array('controller' => "user", 'action' => "login")); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Navigation End -->
</div>
<!-- Header End -->