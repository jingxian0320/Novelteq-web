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
	<h2>AirScan-S240 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/airscan-s240.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>AirScan-S240 采用大功率热风扫描，热能主要是通过热传导进入试件表面，而不是通常的光吸收的形式，因此对样品表面的光学吸收特性要求不高，同时对样品表面的平整度也没有严格要求。

</p>
<p>
	最适用的检测对象是具有较低光学吸收系数的各种材料，如飞行器的结构材料、高铁列车的外壳等。

</p>



	</div>
	<div class="ten columns">
	<ul class="tab">
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'characterics')" id="defaultOpen">产品特点</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'parameters')">技术参数</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'applications')">典型应用</a></li>
	</ul>

	<div id="characterics" class="tabcontent">
		<br/>
		<class class="nine columns" >
			<div class="three columns">
	  		<img src="../images/products/air1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，对样品表面平整度要求低；</p>
          </li>
          <li>
          	<p>脉冲时间短，峰值功率高，适合于热响应速度快的样品；</p>
          </li>
          <li>
          	<p>大面积同时加热，热激励均匀。</p>
          </li>
      </ul>
  </class>
	<hr/>
	<class class="nine columns" >
		<div class="three columns">
			<img src="../images/products/ir2.png">
		</div>
			<ul>
				<li>
					<p>分离式探测单元，设计紧凑，重量轻，操作方便；</p>
				</li>
				<li>
					<p>探测单元具有独立显示器，可以观察试件及设备状态；</p>
				</li>
				<li>
					<p>多种触发方式，操作更方便。</p>
				</li>
		</ul>
</class>

<hr/>
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/air4.png">
</div>

	<ul>
		<li>
				<p>控制系统功能齐全，柜式工作站易于移动，操作简便；</p>
			</li>
			<li>
				<p>触摸屏角度可随舒适度任意调整；</p>
			</li>
			<li>
				<p>空间充足，可选配多种测试技术。</p>
			</li>
	</ul>
</class>

<hr/>

<class class="nine columns">

	<div class="three columns">
		<img src="../images/products/air5.png">
	</div>

		<ul>
			<li>
					<p>功能完整的热波图像处理能力，使缺陷更易于显现；</p>
				</li>
				<li>
					<p>界面清新，简单易用；触摸控制，操作方便；</p>
				</li>
				<li>
					<p>Windows操作系统，稳定可靠。</p>
				</li>
		</ul>
</class>

<hr/>

	<class class="nine columns" >
		<div class="three columns">
			<img src="../images/products/las2.png">
		</div>
			<ul>
				<li>
						<p>使用灵活，可选配多种探测单元；</p>
					</li>
					<li>
						<p>可根据需要灵活选用多种热像仪，包括高分辨非制冷型或制冷型；</p>
					</li>
					<li>
						<p>可选配多种测试平台。</p>
					</li>
			</ul>
	</class>

</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_en_airscan1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图所示为由复合材料制成的玻璃纤维板材，胶合质量有些不均匀，通过热波无损检测技术，这些非均匀区域能够清晰显现。

</p>
		<div class="four columns">
			<img src="../images/products/app_air5.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_air6.png" />
		</div>
	</div>
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
document.getElementById("thermpulse").style.display = "none";
document.getElementById("irscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
