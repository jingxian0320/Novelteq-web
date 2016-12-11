<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司产品</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>

</section><!-- end-full-width -->


<section class="container page-content">
	<section id="sidebar">
		<h4 class="subtitle">产品列表</h4>
		<div class="listbox1">
		<strong>
		<ul>
		<li><a href="technology.php" style="color:#91bad4">热激励方式 </a></li>
		<ul style="margin-left:14px">
			<li>
					<a href="technology/infrared/active/active.html">激光扫描热激励</a>
			</li>
			<ul style="margin-left:28px">
					<li>
							<a href="product-single.php">LaScan S240</a>
					</li>
					<li>
							<a href="technology/infrared/active/lock-in.html">LaScan T200</a>
					</li>
					<li>
							<a href="technology/infrared/active/lock-in.html">LaScan C200</a>
					</li>
			</ul>
			<li>
					<a href="technology/infrared/passive.html">闪光灯热激励</a>
			</li>
			<li>
					<a href="technology/infrared/passive.html">红外灯热激励</a>
			</li>
			<li>
					<a href="technology/infrared/passive.html">热风激励</a>
			</li>
			<li>
					<a href="technology/infrared/passive.html">涡流热激励</a>
			</li>
			<li>
					<a href="technology/infrared/passive.html">超声激励</a>
			</li>
		</ul>
		<li><a href="technology/thermalwave/thermalwave-NDT-tech.html" style="color:#91bad4">系统结构形式</a></li>
		<ul style="margin-left:14px">
			<li>
							<a href="technology/thermalwave/laser.html">便携</a>
				</li>
				<li>
							<a href="technology/thermalwave/flash.html">台式</a>
				</li>
				<li>

							<a href="technology/thermalwave/infrared.html">分立</a>

				</li>
				<li>

							<a href="technology/thermalwave/hotair.html">定制</a>

				</li>

		</ul>
		<li><a href="technology/camera/camera.html" style="color:#91bad4">热激励技术</a></li>
		<ul style="margin-left:14px">
			<li>
				<a href="technology/camera/cooled.html">短脉冲</a>
			</li>
			<li>
				<a href="technology/camera/uncooled.html">长脉冲</a>
			</li>
			<li>
				<a href="technology/camera/uncooled.html">锁相</a>
			</li>
		</ul>
		<li><a href="technology/camera/camera.html" style="color:#91bad4">软件</a></li>
		<li><a href="technology/camera/camera.html" style="color:#91bad4">附件</a></li>
		</ul>
	</strong>
		</div><!-- end-listbox1 -->
	</section>

<section id="main-content">
<div class="eleven columns">
	<h2>激光扫描热激励系统 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/lascan1.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>LaScan系列采用独家专利技术，以大功率激光器进行线扫描，实现短脉冲、高功率密度的热激励。再根据试件的特性控制热像仪与激光束扫描之间的时序，既可以实现快速热波成像，也可以实现长热激励时间的热波无损检测，具有广泛的适用性。检测对象包括各种金属、非金属及复合材料，特别是热响应速度快的样品。</p>

<p>由于激光扫描的独特性，LaScan系列产品还可以检测试件的近表面裂纹，以及有效的检测薄涂层的厚度与附着均匀性。</p>

<p>采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合于在线、在役的无损检测应用。</p>

	</div>
	<div class="clear"></div>
	<hr />
	<div class="portfolio">
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-single.php">
	<img src="../images/products/lascan1.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="portfolio-item.html">
	<h5> LaScan S240 </h5>
	<em>台式系统</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-lascan.php">
	<img src="../images/products/lascan1.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="portfolio-item.html">
	<h5> LaScan T200 </h5>
	<em>便携式系统</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-lascan.php">
	<img src="../images/products/lascan1.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="portfolio-item.html">
	<h5> LaScan C200 </h5>
	<em>一体式系统</em>
	</a></div>
	<!-- end-portfolio-item-->
</div>
</div>
</section>
  </section><!-- container -->


<?php include('footer.html'); ?>

</div><!-- end-wrap -->
<!-- End Document
================================================== -->
<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		/*
		*   Examples - images
		*/

		$("a#Single-Item").fancybox({
			'titlePosition'		: 'outside',
			'overlayColor'		: '#000',
			'overlayOpacity'	: 0.9
		});


	});
</script>



</body>
</html>
