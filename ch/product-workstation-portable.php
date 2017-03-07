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
	<h2>便携式无损检测工作站</h2>
	<hr />
	<h4 style="color: #C36"><b>产品特点</b></h4>
	<br/>
	<ul>
		<li type="disc">
					集热波图像采集与数据处理系统于一体；
			</li>
			<li type="disc">
					适合于外场使用；
			</li>
			<li type="disc">
					可配合各种热激励单元使用；
			</li>
			<li type="disc">
				多种图像处理功能；
			</li>
		</ul>

	</div>
	<div class="ten columns column">
<img src="../images/products/workstation-portable-chara.png" />

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
	document.getElementById("airscan").style.display = "none";
	document.getElementById("lascan").style.display = "none";
	document.getElementById("irscan").style.display = "none";
	document.getElementById("magnetherm").style.display = "none";
	document.getElementById("thermsonic").style.display = "none";
</script>



</body>
</html>
