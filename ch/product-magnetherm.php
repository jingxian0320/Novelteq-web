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
	<h2>涡流激励系统 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/magnetherm.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>MagneTherm 300为涡流激励系统，采用电磁激励激励方式对试件进行热激励，它融合了涡流检测技术与红外无损检测技术的诸多优点，涡流激励不受表面发射率影响。

</p>
<p>
	涡流可直接加热导体内部(集肤深度以内)，在此基础上，热波透入深度更大，因此可检测深度更大。

</p>
<p>
	采用分体式设计，探测头集热激励和图像采集于一身，重量轻、易操作、功能全，可手持，也可安装在支撑架上。控制系统具有强大的热波图像处理功能，及很大的功能扩展性。既适合于在线、在役检测应用，也可满足实验室研发需求。

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
	  		<img src="../images/products/mt1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，内部激励；不受待测物表面状态影响；</p>
          </li>
          <li>
          	<p>可检测复杂结构件较深处缺陷；</p>
          </li>
          <li>
          	<p>检测材料为铁磁性材料</p>
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
		<img src="../images/products/air6.png">
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

</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_airscan1.png" />
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
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
