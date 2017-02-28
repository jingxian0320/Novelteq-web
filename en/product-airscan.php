<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-product.jpg" class="full-width" />
<!-- <div class="page-subtitle"> -->
<!-- <div class="page-subtitle">
<h3>公司产品</h3>
<p>采用先进技术，满足您的多元需求</p>
</div> -->
<div class='white-space'></div>

</section><!-- end-full-width -->


<section class="container page-content">
<?php include('product-sidebar.php'); ?>

<section id="main-content">
<div class="eleven columns">
	<h2>热风激励系统 </h2>
	<hr />


	</div>
	<div class="ten columns column">
		<p>
			红外灯系列采用大功率红外辐射扫描进行热激励，具有加热均匀、波长范围宽和稳定可靠等优点，适用于各种金属、非金属及复合材料的检测。

		</p>

<p>
	采用红外辐射对试件表面进行扫描，同时快速地对热激励区域进行同步热波图像的采集，能够有效的应用于各种材料及缺陷的探测。

</p>

	</div>
	<div class="clear"></div>
	<hr />
	<div class="portfolio">
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-airscan-s240.php">
	<img src="../images/products/airscan-s240.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-airscan-s240.php">
	<h5> AirScan S240 </h5>
	<em>立式分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-airscan-t150.php">
	<img src="../images/products/airscan-t150.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-airscan-t150.php">
	<h5> AirScan T150 </h5>
	<em>台式分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-airscan-c150.php">
	<img src="../images/products/airscan-c150.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-airscan-c150.php">
	<h5> AirScan C150 </h5>
	<em>便携系统</em>
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
<script>
	document.getElementById("thermpulse").style.display = "none";
	document.getElementById("lascan").style.display = "none";
	document.getElementById("irscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
