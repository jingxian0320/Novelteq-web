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
	<h2>ThermPulse-C600 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/thermpulse-c600.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>ThermPulse-C6000 为集成式热波成像无损检测系统，采用大功率闪光灯进行热激励，具有脉冲时间短、瞬间加热功率高的优点，因此可以在试件中产生较高的温度梯度，有利于缺陷的检测。此外，闪光灯加热与热像仪精准同步，十分有利于热波信号的快速准确检测。

</p>
<p>
	该设备适用于各种金属、非金属及复合材料，特别是热响应速度快的样品，如高热导率的金属材料或较浅层的缺陷。
</p>
<p>
	手持探测单元采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合在线、在役的无损检测应用。
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
			<img src="../images/products/air9.png">
		</div>
			<ul>
				<li>
					<p>控制系统紧凑便携，易于操作；</p>
				</li>
				<li>
					<p>触摸屏角度可随舒适度任意调整；</p>
				</li>
				<li>
					<p>坚固美观的仪器箱，保护系统免受使用环境的冲击。</p>
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
					<p>界面清新，简单易用；</p>
				</li>
				<li>
					<p>触摸控制，操作方便；</p>
				</li>
				<li>
					<p>Windows操作系统，稳定可靠。</p>
				</li>
		</ul>
</class>

<hr/>

  <class class="nine columns" >
		<div class="three columns">
  		<img src="../images/products/pulse4.png">
		</div>
      <ul>
      	<li>
          	<p>轻巧便携，可单人操作；人体工学设计，握持舒适得力；</p>
          </li>
          <li>
          	<p>可充电高效电池供电，适合于各种应用场合；</p>
          </li>
          <li>
          	<p>可外接显示器、键盘鼠标及USB接口，便于后期整理图像和数据。</p>
          </li>
      </ul>
  </class>

</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_thermpulse3.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图所示为航空用蜂窝材料做的人工缺陷，有一处为粘接不完全缺陷，整个图像只需几秒钟便可采集处理完毕。由此可见，热波无损检测技术对航天安全有十分重要的意义。

</p>
		<div class="four columns">
			<img src="../images/products/app_tp3.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_tp4.png" />
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
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
