<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司产品</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>

</section><!-- end-full-width -->


<section class="container page-content">
	<section id="sidebar">
		<h4 class="subtitle">激光扫描激励</h4>
		<div class="listbox1">
		<ul>
			<li><a href="products/thermalwave-NDT/lascan/lascan-S300.html">LaScan-S300</a></li>

			<li><a href="products/thermalwave-NDT/lascan/lascan-T200.html">LaScan-T200</a></li>

			<li><a href="products/thermalwave-NDT/lascan/lascan-C200.html">LaScan-C200</a></li>
		</ul>
	</section>
<section id="main-content">
<div class="eleven columns">
	<h2>LaScan-C200 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/lascan1.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p><b>LaScan-C200</b> 采用<b>独家专利技术</b>，以大功率激光器进行线扫描，实现短脉冲、高功率密度的热激励。再根据试件的特性控制热像仪与激光束扫描之间的时序，既可以实现快速热波成像，也可以实现长热激励时间的热波无损检测，具有广泛的适用性。检测对象包括各种金属、非金属及复合材料，特别是热响应速度快的样品。</p>
		<p>由于激光扫描的独特性，LaScan-C200还可以检测试件的近表面裂纹，以及有效的检测薄涂层的厚度与附着均匀性。</p>
		<p>采用<b>一体化便携式</b>设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合于在线、在役的无损检测应用。 </p>
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
  <class class="nine columns" >
		<div class="three columns">
  		<img src="../images/products/air10.png">
		</div>
      <ul>
      	<li>
          	<p>检测头轻巧便携，容易操作；</p>
          </li>
          <li>
          	<p>人体工学设计，握持舒适得力；</p>
          </li>
          <li>
          	<p>声控指令，无需手动触发；</p>
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
</div>

	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_lascan1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>LaScan-C200 采用了大功率闪光灯对整个视场同时热激励，脉冲时间很短，因此适合于检测一些具有较高导热率，且缺陷深度较浅的试件，如金属、碳纤维、及各种涂层材料。系统采用分体式，使得测试单元更轻便，图像采集处理单元更易操作，功能更强大。</p>
		<p>下图所示的试件为一有裂纹的太阳能硅片，但光学图像中裂纹无法显现。用激光扫描激励可以清有效地显现这一人工缺陷区域。</p>
		<div class="four columns">
			<img src="../images/products/app_solar3.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_solar4.png" />
		</div>
	</div>
</div>
</div>
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
	<script type="text/javascript" src="../js/vincie-send.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
