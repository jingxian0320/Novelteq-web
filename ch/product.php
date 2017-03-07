<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-product.jpg" class="full-width" />
<!-- <div class="page-subtitle">
<h3>公司产品</h3>
<p>热波无损检测</p>
</div> -->
<div class="white-space"></div>

</section><!-- end-full-width -->


<section class="container page-content">
	<nav class="primary clearfix">

			<ul>
					<li>激励方式选择：</li>
				<li><a href="#" class="selected" data-filter="*">全 部</a></li>
				<li><a class="" href="#" data-filter=".short">短脉冲</a></li>
				<li><a class="" href="#" data-filter=".long">长脉冲</a></li>
				<li><a class="" href="#" data-filter=".fixed">锁 相</a></li>
				<li><a class="" href="#" data-filter=".ultrasound">超 声 </a></li>
				<li><a class="" href="#" data-filter=".workstation">工作站 </a></li>
				<li><a class="" href="#" data-filter=".special">专用检测设备 </a></li>
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
	<a id="Single-Item" href="product-thermpulse.php">
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
	<a id="Single-Item" href="product-airscan.php">
	<img src="../images/products/airscan.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-airscan.php">
	<h5> 热风扫描激励 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry ultrasound -item">
	<a id="Single-Item" href="product-thermsonic.php">
	<img src="../images/products/thermsonic.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermsonic.php">
	<h5> 超声激励 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->


	<div class="portfolio-item one-third column entry fixed -item">
	<a id="Single-Item" href="product-thermlockin.php">
	<img src="../images/products/locked.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermlockin.php">
	<h5> 锁相检测设备 </h5><em><br/></em>

	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry workstation -item">
	<a id="Single-Item" href="product-workstation.php">
	<img src="../images/products/workstation.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-workstation.php">
	<h5> 工作站 </h5><em><br/></em>
	</a></div>
	<!-- end-portfolio-item-->

	<div class="portfolio-item one-third column entry special -item">
	<a id="Single-Item" href="product-special-1.php">
	<img src="../images/products/special.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-special-1.php">
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
