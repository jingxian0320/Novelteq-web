<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司产品</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>

</section><!-- end-full-width -->


<section class="container page-content">
	<div class="five columns">
		<div class="column navi2 footer-in">
			<h4 style="color:black">Navigation</h4>
			<br />
			<p><a href="#"><img src="../images/rowp6.png" />Services</a></p>

			<p><a href="#"><img src="../images/rowp6.png" />Our Portfolio</a></p>

			<p><a href="#"><img src="../images/rowp6.png" />Blog</a></p>

			<p><a href="#"><img src="../images/rowp6.png" />Prices</a></p>

			<p><a href="#"><img src="../images/rowp6.png" />Contact Form</a></p>
		</div>
	</div>
	<!-- end-navi2 -->
<div class="eleven columns">
	<h2>LaScan-C200 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/lascanc200.png" class="full-width" />

	</div>
	<div class="seven columns column proj-det">
			<p>
								LaScan-C200 采用独家专利技术，以大功率激光器进行线扫描，实现短脉冲、高功率密度的热激励。再根据试件的特性控制热像仪与激光束扫描之间的时序，既可以实现快速热波成像，也可以实现长热激励时间的热波无损检测，具有广泛的适用性。检测对象包括各种金属、非金属及复合材料，特别是热响应速度快的样品。<br/><br/>
								由于激光扫描的独特性，LaScan-C200还可以检测试件的近表面裂纹，以及有效的检测薄涂层的厚度与附着均匀性。<br/><br/>
								采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合于在线、在役的无损检测应用。
			</p>
	</div>
	<div class="ten columns">
	<ul class="tab">
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></li>
	</ul>

	<div id="London" class="tabcontent">
	  <p>London is the capital city of England.</p>
	</div>

	<div id="Paris" class="tabcontent">
	  <p>Paris is the capital of France.</p>
	</div>

	<div id="Tokyo" class="tabcontent">
	  <p>Tokyo is the capital of Japan.</p>
	</div>
</div>
</div>
  </section><!-- container -->


<?php include('footer.html'); ?>

</div><!-- end-wrap -->
<!-- End Document
================================================== -->
<script type="text/javascript" src="js/slide1.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '../images/slide1/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						top:0
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						top:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						top:0
					},200);
				}
			});
		});
	</script>
	<script>
	document.getElementById("defaultOpen").click();
		function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>
	<script type="text/javascript" src="../js/vincie-send.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
