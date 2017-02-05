<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<!-- <div class="page-subtitle"> -->
<!-- <h3>公司产品</h3>
<p>采用先进技术，满足您的多元需求</p>
</div> -->
<div class='white-space'></div>

</section><!-- end-full-width -->


<section class="container page-content">
<?php include('product-sidebar.php'); ?>

<section id="main-content">
<div class="eleven columns">
	<h2>闪光灯热激励系统 </h2>
	<hr />

	<!-- <div class="three columns">
	<br />
	<img src="../images/products/lascan1.png" class="full-width" /> -->

	</div>
	<div class="ten columns column">
		<p>
			闪光灯系列采用自主研制的闪光灯装置实现短脉冲、高功率密度的热激励。闪光灯激励系统主要包括闪光灯电源、闪光灯及灯罩、同步触发器。

		</p>

<p>

	闪光灯电源是利用高压电容器瞬间放电，选择标准要求安全可靠、击穿电压高等特点；制作后的电源具有便携、同步触发、安全性高、充电时间快等特点。同步触发器的作用是为了保证闪光灯激励与红外热像仪采集之间的同步。闪光灯灯罩作用主要为了聚光、匀光、保护使用者眼睛。闪光脉冲宽度是闪光灯激励的核心，自主研制的闪光脉冲具有截尾可控等优势，闪光脉冲宽度最短为2ms.

</p>

<p>
	闪光灯激励是目前国际上应用最广、最主流的脉冲热激励方法。
</p>

	</div>
	<div class="clear"></div>
	<hr />
	<div class="portfolio">
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-thermpulse-s1200.php">
	<img src="../images/products/thermpulse-s1200.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermpulse-s1200.php">
	<h5> ThermPulse S1200 </h5>
	<em>立体分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-thermpulse-t640.php">
	<img src="../images/products/thermpulse-t640.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermpulse-s1200.php">
	<h5> ThermPulse T640 </h5>
	<em>台式分体</em>
	</a></div>
	<!-- end-portfolio-item-->
	<div class="portfolio-item three columns">
	<a id="Single-Item" href="product-thermpulse-c600.php">
	<img src="../images/products/thermpulse-c600.png" border="0" /><span class="prt-img-hov-bg"></span></a>
	<a href="product-thermpulse-c600.php">
	<h5> ThermPulse C600 </h5>
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
	document.getElementById("lascan").style.display = "none";
	document.getElementById("irscan").style.display = "none";
	document.getElementById("airscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
