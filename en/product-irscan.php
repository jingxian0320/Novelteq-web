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
	<h2>红外灯热激励系统 </h2>
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
	<a id="Single-Item" href="product-irscan-s200.php">
	<img src="../images/products/irscan-s200.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-irscan-s200.php">
	<h5> IrScan S200 </h5>
	<em>立式分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-irscan-t120.php">
	<img src="../images/products/irscan-t120.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-irscan-t120.php">
	<h5> IrScan T120 </h5>
	<em>台式分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-irscan-c120.php">
	<img src="../images/products/irscan-c120.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-irscan-c120.php">
	<h5> IrScan C120 </h5>
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
<!-- <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script> -->
<!-- <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script> -->
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
	document.getElementById("airscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
