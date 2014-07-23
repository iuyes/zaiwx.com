<?php
	// nav
	$this->start('nav');
	echo $this->element('nav');
	$this->end();
?>
<!-- Wrapper -->
<div class="wrapper">
	<?= $this->fetch('nav'); ?>
	<!-- For navigation -->
	<section id="home">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- Slider Two -->
					<li data-transition="slidedown" data-slotamount="1">
					   <?php echo $this->Html->image('/html/img/transparent.png'); ?>
					   <!-- Heading -->
					   <div class="caption tp-caption sft large_bold_white" data-x="center" data-y="60" data-speed="700" data-start="1700" data-easing="easeOutBack">永久免费的微信公众号服务平台</div>
					   <div class="caption tp-caption sft custom_para text-center"  data-x="center" data-y="115" data-speed="500" data-start="2100" data-easing="easeOutBack">
							迄今为止，最好用的微信第三方公众号服务平台。
						</div>
						<!-- Image -->
						<div class="caption sfb" data-x="center" data-y="166" data-speed="1000" data-start="3200" data-easing="easeOutBack">
							<?php echo $this->Html->image('/html/img/preview.png', array('width' => "960", 'alt' => "在微信后台管理界面", 'class' => "img-responsive")); ?>
						</div>
					</li>
					<!-- Slider one -->
					<li data-transition="slideup" data-slotamount="1">
					   <div class="caption tp-caption sft large_bold_white"  data-x="left" data-y="145" data-speed="700" data-start="1700" data-easing="easeOutBack">CakeWX<br><span style="font-size:30px;">绝壁好用的微信公众平台开发框架</span></div>
					   <div class="caption tp-caption sfl custom_para"  data-x="left" data-y="245" data-speed="500" data-start="2100" data-easing="easeOutBack">
							运行环境：Apache + PHP + MySQL<br>官方QQ交流群：295169425</font>
						</div>
						<div class="caption tp-caption sfl" data-x="left" data-y="320" data-speed="500" data-start="2600" data-easing="easeOutBack">
							<a href="http://www.cakewx.com" target="_blank" class="btn btn-slider"><i class="fa fa-download"></i>免费下载</a>
						</div>
						<div class="caption sfr" data-x="right" data-y="110" data-speed="500" data-start="3200" data-easing="easeOutBack">
							<?php echo $this->Html->image('/html/img/imac.png', array('width' => "380", 'alt' => "在微信后台管理界面", 'class' => "img-responsive")); ?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="container ann" style="text-align:center;line-height: 30px;color:#f00;">推荐使用Chrome，safari，Firefox火狐浏览器浏览器，获得最佳使用体验。</div>
	<!-- Main Content -->
	<div class="main-content">	
		<section id="service">
			<div class="services padd">
				<div class="container">
					<!-- Default Heading Area -->
					<div class="heading text-center">
						<!-- Heading -->
						<h2>产品特色</h2>
						<hr class="index_hr">
						<h2 id="teseline"><span>&nbsp;</span></h2>
					</div>
					<div class="row" style="background:#FFF;padding-bottom:40px;">
						<div class="col-md-6 col-sm-6">
							<!-- services Item -->
							<div class="services-item">
								<!-- Heading -->
								<h4><i class="fa fa-folder-open-o blue"></i> 开源免费</h4>
								<!-- Paragraph -->
								<p>基于CakePHP搭建，小巧精致，完全免费使用。可独立下载源码，搭建自主平台。</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- services Item -->
							<div class="services-item">
								<!-- Heading -->
								<h4><i class="fa fa-users blue"></i>多公众号管理。</h4>
								<!-- Paragraph -->
								<!-- Paragraph -->
								<p>一个后台即可同时管理多个公众帐号。订阅号，服务号最多可同时管理五个。</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="services-item">
								<h4><i class="fa fa-bars blue"></i> 自定义拖拽菜单。</h4>
								<p>后台可实时拖拽实现微信公众号自定义菜单，更加简单易用，史上最好用的公众号服务平台。</p>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6">
							<!-- services Item -->
							<div class="services-item">
								<!-- Heading -->
								<h4><i class="fa fa-edit blue"></i> 强大的后台管理功能。</h4>
								<!-- Paragraph -->
								<!-- Paragraph -->
								<p>自动回复、关键字匹配、多图文素材管理等公众号基础功能完全无缝对接。强大的应用扩展中心。（即将上线）</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</section>
		
		<!-- For navigation -->
		
		<section id="works">
			<!-- Portfolio Start -->
			<div class="portfolio">
				<div class="container">
					<!-- Default Heading Area -->
					<div class="heading">
						<!-- Heading -->
						<h2 class="text-center">定制服务</h2>
						<div class="bor"></div>
					</div>
				</div>
				<!-- Portfolio Block Content -->
				<div class="portfolio-content clearfix">
					<div class="col-md-4 col-sm-6">
						<?php echo $this->Html->image('/html/img/sdf.png'); ?>
						<h3>微信公众平台定制开发</h3>
					</div>
					<div class="col-md-4 col-sm-6">
						<?php echo $this->Html->image('/html/img/apps.png'); ?>
						<h3>Web APP开发</h3>
					</div>
					<div class="col-md-4 col-sm-6">
						<?php echo $this->Html->image('/html/img/app.png'); ?>
						<h3>手机APP定制开发</h3>
					</div>
				</div>
			</div>
		</section>
		<!-- For navigation -->
		<section id="contact">
			<!-- Contact Start -->
			<div class="contact padd">
				<div class="container">
					<div class="heading text-center">
						<h2>联系方式</h2>
						<div class="bor"></div>
						<p>专业的技术团队，为您提供完美的技术解决方案。</p>
					</div>
				</div>
				
				<div class="container">
					<!-- Info Area -->
					<div class="contact-info">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="info-item">
									<!-- Icon -->
									<i class="fa fa-map-marker"></i>
									<h4>地址</h4>
									<p>北京市东城区南竹杆胡同2号银河搜候中心5层20616-A0382</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="info-item">
									<i class="fa fa-envelope-o"></i>
									<h4>邮箱</h4>
									<p>liunianbook@gmail.com</p>
								</div>
							</div>
							<div class="clearfix visible-xs"></div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="info-item">
									<!-- Icon -->
									<i class="fa fa-print"></i>
									<h4>电话</h4>
									<p>13301372150</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="info-item">
									<i class="fa fa-calendar"></i>
									<h4>时间</h4>
									<p>早：9:00 - 晚：18:00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-map">
					<?php echo $this->Html->image('http://s01.liunian.mobi/zaiwx/images/mp.png'); ?>
				</div>
			
				<div class="container">
					<!-- Contact Contents -->
					<div class="contact-content">
						<!-- Heading -->
						<h5 class="text-center">咨询留言</h5>
						<div class="bor"></div>
						<br />
						<!-- Contact Form -->
						<form role="form" id="contactForm" method="post">
                                <div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" name="FName" id="name" placeholder="您的姓名" value="" required>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="FEMail" placeholder="邮件地址" value="" required>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" id="phone" name="FPhone" placeholder="您的电话" value="">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<textarea class="form-control" name="FMessage" id="message" rows="6" placeholder="留言内容"></textarea>
									</div> 
									<button type="submit" id="submit" name="submit" class="btn btn-theme">发送</button>
								</div>
							</div>
						</form>
						
						<!-- Alertbox for success -->
						<div id="success" class="alert alert-success alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>谢谢!</strong> 我们将在收到留言后及时回复您。
						</div>
						
						<!-- Alertbox for failure -->
						<div id="error" class="alert alert-danger alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>错误！</strong> 无法发送您的信息. 
						</div>									
						
					</div>
				</div>	
			</div>
		</section>
	</div>
	<!-- Main Content End -->
	
	<!-- Footer start -->
	<section id="about">
		<div class="cta">
			<div class="footer clearfix">
				<div style="float:left;margin:60px 20px 20px 0;width:350px;">
	            	<img src="http://s01.liunian.mobi/cakewx/web/erwm.png" width="100px" height="100px" style="float:left;margin-right:10px;">
	                <p>微信扫码左侧二维码<br>关注在微信官方微信公众号<br>关注在微信最新产品动态</p>
	            </div>
				<div class="span6 col-form" id="signup-block">
                    <form role="form" class="simple_form form form-stacked email-signup-form" id="regForm" method="post">
			          	<fieldset>
				            <div class="control-group">
				              <label class="string required control-label" for="memberid">您的名字</label>
				              <div class="controls">
				                <input autocomplete="off" name="FMemberId" id="memberid" placeholder="你的名字" type="text" required="required">
				              </div>
				            </div>
				            <div class="control-group">
				              <label class="string required control-label" for="email">联系邮箱</label>
				              <div class="controls">
				                <input autocomplete="off" name="FEMail" id="email" placeholder="工作邮箱" type="email" required="required">
				              </div>
				            </div>
                            <div class="control-group">
                                <label class="string required control-label" for="phone">联系电话</label>
                                <div class="controls">
                                    <input autocomplete="off" name="FMobileNumber" id="phone" placeholder="联系电话" required="required">
                                </div>
                            </div>
				            <div class="control-group">
				              <label class="string required control-label" for="password">密码</label>
				              <div class="controls">
				                <input autocomplete="off" name="FPassWord" id="password" placeholder="密码" type="password" required="required">
				              </div>
				            </div>
				            <div class="align-right">
				              <input class="btn btn-success pull-right" id="signup-btn" type="submit" value="免费注册">
				            </div>
			          </fieldset>
					</form>

                    <!-- Alertbox for success -->
                    <div id="regsuccess" class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        感谢您的注册
                    </div>

                    <!-- Alertbox for failure -->
                    <div id="regerror" class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        注册失败
                    </div>
                    <div class="help-block" style="margin-top:10px;color:#f8f8f8;">
			         	点击注册，表明你同意我们的服务条款和隐私政策。
			        </div>
		      	</div>
	      	</div>
		</div>
	</section>
	<div class="copyright">
		<div class="share">&copy; Copyright 2014 - 在微信 - All Rights Reserved. <a class="sina-weibo" href="http://weibo.com/lnbook" target="_blank"></a><a class="qq-weibo" href="http://t.qq.com/liunianbook" target="_blank"></a><a class="douban-btn" href="http://site.douban.com/228900/" target="_blank"></a><!--<a class="qq-btn" href="http://wpa.qq.com/msgrd?v=3&uin=2096519316&site=qq&menu=yes" target="_blank"></a>--></div>
	</div>
	<!-- Footer End -->
	<!-- Scroll to top -->
	<span class="totop"><a href="#.home"> <i class="fa fa-chevron-up"></i> </a></span>
</div>
<!-- Wrapper End -->