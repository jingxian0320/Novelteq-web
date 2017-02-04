<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
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
	<h2>ThermPulse-S1200 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/thermpulse-s1200.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>ThermPulse-S1200 为分体式热波成像无损检测系统，采用大功率闪光灯进行热激励，具有脉冲时间短、瞬间加热功率高、试件表面同时加热等优点，适用于各种金属、非金属及复合材料，特别是热响应速度快的样品，如高热导率的金属材料或较浅层的缺陷。
</p>
		<p>采用分体式设计，探测头集热激励和图像采集于一身，重量轻、易操作、功能全，可手持，也可安装在支撑架上。控制系统具有强大的热波图像处理功能，及很大的功能扩展性。既适合于在线、在役检测应用，也可满足实验室研发需求。
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
	<class class="nine columns" >
		<div class="three columns">
			<img src="../images/products/pulse5.png">
		</div>
			<ul>
				<li>
					<p>可选配分离式探测单元，设计紧凑，重量轻，操作方便；</p>
				</li>
				<li>
					<p>强大的闪光能量，缺陷检测灵敏度更高；</p>
				</li>
				<li>
					<p>闪光脉冲宽度、强度均精准控制，适合各种应用需求。</p>
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
	  <img src="../images/products/table_thermpulse1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图所示的试件为碳钎维材料的整流罩。整流罩是飞机的一个重要部件，主要用来确保飞机外形的连续、减小空气阻力、尽量消除正激波等空气动力学。目前飞机多应用复合材料，因此对飞机整流罩复合材料内部缺陷的检测是及其重要的一项工作内容。下图中红色区域中有材料的脱粘缺陷。

</p>
		<div class="four columns">
			<img src="../images/products/app_tp1.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_tp2.png" />
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
document.getElementById("airscan").style.display = "none";
document.getElementById("XXXscan").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
