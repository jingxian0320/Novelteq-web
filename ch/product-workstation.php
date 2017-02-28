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
	<h2>热波无损检测工作站</h2>
	<hr />


	</div>
	<div class="ten columns column">


	</div>
	<div class="clear"></div>
	<hr />
	<div class="portfolio">
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-workstation-tank.php">
	<img src="../images/products/workstation-tank.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-workstation.php">
	<h5> 柜式无损检测 </h5>
	<em></br></em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-workstation-desktop.php">
	<img src="../images/products/workstation-desktop.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-workstation.php">
	<h5> 台式无损检测 </h5>
	<em></br></em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-workstation-portable.php">
	<img src="../images/products/workstation-portable.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-workstation.php">
	<h5> 便携式无损检测 </h5>
	<em></br></em>
	</a></div>
	<!-- end-portfolio-item-->
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
	document.getElementById("airscan").style.display = "none";
	document.getElementById("lascan").style.display = "none";
	document.getElementById("irscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
