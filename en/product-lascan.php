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
	<h2>激光扫描热激励系统 </h2>
	<hr />


	</div>
	<div class="ten columns column">
		<p>
			LaScan系列采用独家专利技术，以大功率激光器进行线扫描，实现短脉冲、高功率密度的热激励。再根据试件的特性控制热像仪与激光束扫描之间的时序，既可以实现快速热波成像，也可以实现长热激励时间的热波无损检测，具有广泛的适用性。检测对象包括各种金属、非金属及复合材料，特别是热响应速度快的样品。

		</p>

<p>由于激光扫描的独特性，LaScan系列产品还可以检测试件的近表面裂纹，以及有效的检测薄涂层的厚度与附着均匀性。</p>

<p>采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合于在线、在役的无损检测应用。</p>

	</div>
	<div class="clear"></div>
	<hr />
	<div class="portfolio">
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-lascan-s240.php">
	<img src="../images/products/lascan-s240.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-lascan-s240.php">
	<h5> LaScan S240 </h5>
	<em>台式系统</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-lascan-t200.php">
	<img src="../images/products/lascan-t200.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-lascan-t200.php">
	<h5> LaScan T200 </h5>
	<em>便携式系统</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-lascan-c200.php">
	<img src="../images/products/lascan-c200.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-lascan-c200.php">
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
<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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
	document.getElementById("irscan").style.display = "none";
	document.getElementById("airscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
