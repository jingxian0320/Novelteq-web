<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司产品</h3>
<p>热波无损检测</p>
</div>
<!-- <div class="white-space"></div> -->

</section><!-- end-full-width -->


<section class="container page-content">
	<nav class="primary clearfix">

			<ul>
					<li>激励方式选择：</li>
				<li><a href="#" class="selected" data-filter="*">全部</a></li>
				<li><a class="" href="#" data-filter=".short">短脉冲</a></li>
				<li><a class="" href="#" data-filter=".long">长脉冲</a></li>
				<li><a class="" href="#" data-filter=".fixed">锁相</a></li>
				<li><a class="" href="#" data-filter=".ultrasound">超声 </a></li>
				<li><a class="" href="#" data-filter=".vortex">涡流 </a></li>
			</ul>
		</nav>

	<br />
	<hr />
	<div class="portfolio">
	<div class="portfolio-item one-third column entry short -item">
	<a id="Single-Item" href="product-lascan.php">
	<img src="../images/products/lascan.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-lascan.php">
	<h5> 激光扫描激励 </h5><em><br/></em>
	<!-- <em>xxx</em> -->
	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry short -item">
	<a id="Single-Item" href="../images/portfolio-img/portfoliopic02-big.jpg">
	<img src="../images/products/thermpulse.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermpulse.php">
	<h5> 闪光灯激励 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry long -item">
	<a id="Single-Item" href="product-irscan.php">
	<img src="../images/products/irscan.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-irscan.php">
	<h5> 红外灯激励 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry long -item">
	<a id="Single-Item" href="../images/portfolio-img/portfoliopic02-big.jpg">
	<img src="../images/products/airscan.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-airscan.php">
	<h5> 热风扫描激励 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry ultrasound -item">
	<a id="Single-Item" href="product-single.php">
	<img src="../images/products/thermsonic.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermsonic.php">
	<h5> 超声激励 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry vortex -item">
	<a id="Single-Item" href="product-single.php">
	<img src="../images/products/vortex.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-vortex.php">
	<h5> 电磁涡流激励 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item one-third column entry fixed -item">
	<a id="Single-Item" href="../images/portfolio-img/portfoliopic02-big.jpg">
	<img src="../images/products/locked.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="portfolio-locked.html">
	<h5> 锁相检测设备 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry long short fixed -item">
	<a id="Single-Item" href="product-single.php">
	<img src="../images/products/customized.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-customized.php">
	<h5> 定制化系统 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry -item">
	<a id="Single-Item" href="product-single.php">
	<img src="../images/products/special.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-special.php">
	<h5> 专用检测设备 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->
</div><!-- end-portfolio -->

<!-- <div class="prev-page"><a href="#">Previous</a></div>
<div class="next-page"><a href="#">Next</a></div> -->

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
	<!--
	<script type="text/javascript" src="js/vincie-send.js"></script> -->

<!--  -->
</body>
</html>
