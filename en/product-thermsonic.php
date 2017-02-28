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
	<h2>超声激励系统 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/thermsonic.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>ThermSonic 250为超声激励系统为分体式热波成像无损检测系统，采用超声能量对试件进行热激励，内部裂纹受到激励后会吸收耦合超声能量产生热量使其温度升高，超声激励属于内部激励，不受试件表面状态影响，由于仅在缺陷区域产生热量，因此能提高红外图像缺陷与无缺陷对比度，从而提高检测缺陷的能力，适合于各种金属、复合材料复杂结构件的裂纹检测。

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
	  		<img src="../images/products/ts1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，内部激励；</p>
          </li>
          <li>
          	<p>不受待测物表面状态影响；</p>
          </li>
          <li>
          	<p>可检测复杂结构件较深处缺陷。</p>
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
	  <img src="../images/products/table_en_thermsonic1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图所示的试件为碳纤维20J冲击缺陷样品。热波无损检测技术可以成为涂层质量无损检测的一种有效工具。

</p>
		<div class="four columns">
			<img src="../images/products/app_thp1.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_thp2.png" />
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
