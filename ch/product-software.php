<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-product.jpg" class="full-width" />
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
	<h2>软件 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/software.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<br/>
		<p>Thermography是一款红外无损检测领域专业软件，集观察、记录、回放、处理、分析于一身，功能齐全。

</p>



	</div>

	<div class="ten columns">
			<br/>
<h4 style="color: #C36"><b>热像仪数据采集</b></h4>
<ul>
<li type="disc">
单帧或者连续长时间采集
</li>
<li type="disc">
图像显示功能，手动/自动
</li>
</ul>

<h4 style="color: #C36"><b>数据重建</b></h4>
<ul>
<li type="disc">
	采用TSR技术实现数据重建，并可以求出1-D、2-D微分图像
</li>
<li type="disc">
	图像回放
</li>
</ul>

<h4 style="color: #C36"><b>图像处理</b></h4>
<ul>
<li type="disc">
	图像实时压缩，图像去噪
</li>
<li type="disc">
	背景差分、人工分段线性拉伸
</li>
<li type="disc">
	图像区域选择
</li>
<li type="disc">
	图像伪彩色
</li>
<li type="disc">
	图像旋转
</li>
<li type="disc">
	图像拼接
</li>
<li type="disc">
	生成报告
</li>
<li type="disc">
	AVI格式转换
</li>
</ul>

<h4 style="color: #C36"><b>工程管理</b></h4>
<ul>
<li type="disc">
	保存工程
</li>
<li type="disc">
	数据导出
</li>
</ul>

<h4 style="color: #C36"><b>锁相</b></h4>
<ul>
<li type="disc">
	512/1024/2048/4096点FFT分析

</li>
<li type="disc">
	导出振幅图与相位图

</li>
</ul>

</div>
</div>
</section>
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
document.getElementById("lascan").style.display = "none";
document.getElementById("irscan").style.display = "none";
document.getElementById("thermpulse").style.display = "none";
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
