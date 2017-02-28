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
	<h2>IrScan-C120 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/irscan-c120.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>IrScan-C120 为集成式热波成像无损检测系统，采用大功率红外辐射扫描进行热激励，具有加热均匀、波长范围宽和稳定可靠等优点，适用于各种金属、非金属及复合材料的检测。

</p>
<p>
	采用红外辐射对试件表面进行扫描，同时快速地对热激励区域进行同步热波图像的采集。相比于传统的固定式红外灯热激励，本技术具有试件内瞬时热梯度高、检测快速的优点，因此能够有效的应用于各种材料及缺陷的探测。

</p>
<p>
	采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合于在线、在役的无损检测应用。

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
	  		<img src="../images/products/pulse1.png">
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
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/ir2.png">
</div>

	<ul>
		<li>
				<p>轻巧便携，可单人操作；人体工学设计，握持舒适得力；</p>
			</li>
			<li>
				<p>声控指令，无需手动触发；</p>
			</li>
			<li>
				<p>可外接显示器、键盘鼠标及USB接口，便于后期整理图像和数据。</p>
			</li>
	</ul>
</class>

<hr/>

<class class="nine columns">

	<div class="three columns">
		<img src="../images/products/air3.png">
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
	  <img src="../images/products/table_en_irscan1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		一个典型应用范例如下图所示，试件为一玻璃纤维蜂窝，检测玻璃纤维蜂窝粘接质量。玻璃纤维导热慢，需要较高能量热激励和长时间的采集，红外辐射扫描热激励完全适合于此类缺陷的检测。

</p>
		<div class="four columns">
			<img src="../images/products/app_ir5.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_ir6.png" />
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
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
