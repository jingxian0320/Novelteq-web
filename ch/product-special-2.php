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
	<h2>热波成像半导体芯片封装检测设备 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/special-1.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>激光扫描热波成像芯片检测设备采用激光异步扫描专利技术，可以有效地应用于芯片与基底粘结质量的检测，包括芯片表面粗糙、与基底粘合质量好坏，厚度可从几到数百微米，对基底材料无特殊要求，可以满足包括目前其他检测手段无法解决的芯片+检测需求。

</p>



	</div>
	<br/>
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
	  		<img src="../images/products/las1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，对样品表面无要求；</p>
          </li>
          <li>
          	<p>功率稳定，使用寿命长；</p>
          </li>
          <li>
          	<p>热激励的面积与工作距离可以随需要改变。</p>
          </li>
      </ul>
  </class>
	<hr/>
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/las3.png">
</div>

	<ul>
		<li>
				<p>分离式探测单元，设计紧凑，激光系统、快速扫描装置及热像仪等全部集成一体；</p>
			</li>
			<li>
				<p>扫描均匀，检测面积大；</p>
			</li>
			<li>
				<p>据需要，可手持或固定安装。</p>
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
	  <img src="../images/products/table_special1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图是热播成像对半导体芯片进行无损检测，由检测图像可以清晰的看出芯片表面粗糙及基底粘合质量的好坏。

</p>
		<div class="three columns">
			<img src="../images/products/app_spe1.png" />
		</div>
		<div class="three columns">
    	<img src="../images/products/app_spe2.png" />
		</div>
		<div class="three columns">
			<img src="../images/products/app_spe3.png" />
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
