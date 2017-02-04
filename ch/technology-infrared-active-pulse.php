<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司技术</h3>
<p>专注前沿科技发展，立足创新</p>
</div>

</section><!-- end-full-width -->

<section class="container page-content">
<?php include('technology-sidebar.html'); ?>
<section id="main-content">
	<div class="eleven columns">
	<h2>脉冲红外热成像无损检测技术</h2>
	<hr />
	<p>利用高能量脉冲对被检物进行主动控制式加热，并通过红外热像仪测得其表面红外辐射分布的系统。若被检物内部有缺陷，将造成热传导的不连续性，则从热像图中的灰度（或色彩）清晰的区分出温度差异，以此来判断待测物体表面下的缺陷。</p>
		<p>脉冲热源激励主要有：激光扫描激励、闪光灯、红外扫描激励、热风扫描激励、电磁激励和超声激励。</p>

    <h4 style="color: #C36"><b>技术原理</b></h4>
		<br/>
		<p>利用高能量脉冲在物体表面形成一个短周期热脉冲加热，产生的热脉冲向物体内部传播。当热波在物体内部遇到缺陷或热阻抗发生变化的地方就会有一部分热能反射回到物体表面，产生温度梯度分布，利用高分辨率红外热像仪记录存储，通过红外热图序列分析来检测物体缺陷。</p>


<h4 style="color: #C36"><b>技术优势</b></h4>
<br/>
    <ul>
			<li type="disc">
						非接触；
				</li>
				<li type="disc">
						适用范围广，包括金属、非金属和复合材料等；
				</li>
				<li type="disc">
					速度快；
				</li>
				<li type="disc">
					面积大；
				</li>
				<li type="disc">
					不受待测物体形状、结构的限制；
				</li>
				<li type="disc">
					检测结果图像显示，直观易懂；
				</li>
				<li type="disc">
					定量测量；
				</li>
   </ul>

</div>
</div>
</section><!-- main-content -->
  </section><!-- container -->


<?php include('footer.html'); ?>

</div><!-- end-wrap -->
<!-- End Document
================================================== -->

	<script>
	document.getElementById("defaultOpen").click();
		function openTab(evt, tabName) {
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
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
